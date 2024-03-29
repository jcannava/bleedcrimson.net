<?php
// Amadou 3.x
// $Id: template.php,v 1.6.2.1.6.3 2007/07/04 21:13:16 jwolf Exp $

/**
 * Declare the available regions implemented by this engine.
 *
 * @return
 *    An array of regions.  The first array element will be used as the default region for themes.
 *    Each array element takes the format: variable_name => t('human readable name')
 */
function amadou_regions() {
    return array(
	'header' => t ('header'),
        'content_top' => t('content top'),
        'sidebar_left' => t('sidebar left'),
        'sidebar_right' => t('sidebar right'),
        'content_bottom' => t('content bottom'),
	'content_topleft' => t('headlines top left'),
	'content_topmiddle' => t('headlines top middle'),
	'content_topright' => t('headlines top right'),
	'content_botleft' => t('headlines bottom left'),
	'content_botmiddle' => t('headlines bottom middle'),
	'content_botright' => t('headlines bottom right'),
	'content_banner1' => t('exclusive content banner left'),
	'content_banner2' => t('exclusive content banner right'),
	'content_featured1' => t('featured content top'),
	'content_featured2' => t('featured content middle'),
	'content_featured3' => t('featured content bottom'),
        'footer' => t('footer')
    );
}

/**
* Adjust content width according to the absence or presence of sidebars.
*
*   If only one sidebar is active, the mainContent width will expand to fill
*   the space of the missing sidebar.
*/
function amadou_get_mainContent_width($sidebar_left, $sidebar_right) {
  $width = 600;
  if (!$sidebar_left) {
    $width = $width + 180;
  }  
  if (!$sidebar_right) {
    $width = $width + 180;
  }  
  return $width;
}
function amadou_get_sideBars_width($sidebar_left, $sidebar_right) {
  $width = 415;
  if (!$sidebar_left) {
    $width = $width - 205;
  }  
  if (!$sidebar_right) {
    $width = $width - 205;
  }  
  return $width;
}

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function amadou_breadcrumb($breadcrumb) {
   if (!empty($breadcrumb)) {
     return '<div class="breadcrumb">'. implode(' :: ', $breadcrumb) .'</div>';
   }
 }

/**
 * Return themed links.
 * Creates the type of delimiter used for $links
 */
function amadou_links($links, $attributes = array('class' => 'links')) {
  $output = '';

  if (count($links) > 0) {

    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) {
      $class = '';

      // Automatically add a class to each link and also to each LI
      if (isset($link['attributes']) && isset($link['attributes']['class'])) {
        $link['attributes']['class'] .= ' ' . $key;
        $class = $key;
      }
      else {
        $link['attributes']['class'] = $key;
        $class = $key;
      }

      // Add first and last classes to the list of links to help out themers.
      $extra_class = '';
      if ($i == 1) {
        $extra_class .= 'first ';
      } else {
        $output .= '&nbsp;&bull; &nbsp;';
      }
      if ($i == $num_links) {
        $extra_class .= 'last ';
      }
      $output .= '<span class="'. $extra_class . $class .'">';

      // Is the title HTML?
      $html = isset($link['html']) && $link['html'];

      // Initialize fragment and query variables.
      $link['query'] = isset($link['query']) ? $link['query'] : NULL;
      $link['fragment'] = isset($link['fragment']) ? $link['fragment'] : NULL;

      if (isset($link['href'])) {
        $output .= l($link['title'], $link['href'], $link['attributes'], $link['query'], $link['fragment'], FALSE, $html);
      }
      else if ($link['title']) {
        //Some links are actually not links, but we wrap these in <span> for adding title and class attributes
        if (!$html) {
          $link['title'] = check_plain($link['title']);
        }
        $output .= '<span'. drupal_attributes($link['attributes']) .'>'. $link['title'] .'</span>';
      }

      $i++;
      $output .= "</span>\n";
    }

  }

  return $output;
}

/**
* Customize a TinyMCE theme.
*
* @param init
*   An array of settings TinyMCE should invoke a theme. You may override any
*   of the TinyMCE settings. Details here:
*
*    http://tinymce.moxiecode.com/wrapper.php?url=tinymce/docs/using.htm
*
* @param textarea_name
*   The name of the textarea TinyMCE wants to enable.
*
* @param theme_name
*   The default tinymce theme name to be enabled for this textarea. The
*   sitewide default is 'simple', but the user may also override this.
*
* @param is_running
*   A boolean flag that identifies id TinyMCE is currently running for this
*   request life cycle. It can be ignored.
*/
function phptemplate_tinymce_theme($init, $textarea_name, $theme_name, $is_running) {

  switch ($textarea_name) {
    // Disable tinymce for these textareas
    case 'log': // book and page log
    case 'img_assist_pages':
    case 'caption': // signature
    case 'pages':
    case 'access_pages': //TinyMCE profile settings.
    case 'user_mail_welcome_body': // user config settings
    case 'user_mail_approval_body': // user config settings
    case 'user_mail_pass_body': // user config settings
    case 'synonyms': // taxonomy terms
    case 'description': // taxonomy terms
      unset($init);
      break;

    // Force the 'simple' theme for some of the smaller textareas.
    case 'signature':
    case 'site_mission':
    case 'site_footer':
    case 'site_offline_message':
    case 'page_help':
    case 'user_registration_help':
    case 'user_picture_guidelines':
      $init['theme'] = 'simple';
      foreach ($init as $k => $v) {
        if (strstr($k, 'theme_advanced_')) unset($init[$k]);
      }
      break;
  }

  // Add some extra features when using the advanced theme. 
  // If $init is available, we can extend it
  if (isset($init)) {
    switch ($theme_name) {
     case 'advanced':
   $init['width'] = '100%';
       break;
  
    }
  }

  // Always return $init
  return $init;
}
