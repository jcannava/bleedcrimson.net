<?php
// $Id: page.tpl.php,v 1.1.2.4 2009/11/24 22:04:29 robloach Exp $

/**
 * @file page.tpl.php
 * 
 * Theme implementation to display a page.
 * 
 * With iUI, the front page must be different then every other page, as it should be the
 * only page that is requested by the browser. 
 */

// Special use case for the front page.
if ($is_front) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title><?php print $head_title ?></title>
  <meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>
<body>
  <div class="toolbar">
    <h1 id="pageTitle"></h1>
    <a id="backButton" class="button" href="#"></a>
    <?php print $search_box ? l(t('Search'), '<front>', array('fragment' => 'search_form', 'attributes' => array('class' => 'button'))) : ''; ?>
  </div>
    
<?php
  // Display the primary links
  if (!empty($primary_links)) {
    echo '<ul id="home" title="' . ($title ? $title : $site_name) . '" selected="true">';
    foreach($primary_links as $link_name => $link) {
      $link_title = $link['attributes']['title'] ? $link['attributes']['title'] : $link['title'];
      echo "<li><a href='{$link['href']}'>{$link_title}</a></li>";
    }
    if (!empty($content)) {
        print $content;
    }
    echo '</ul>';
  } // if (!empty($primary_links))
  
  // TODO: Display the search form
  ?>
  <form id="search_form" class="dialog" action="search/node">
      <fieldset>
          <h1>Search</h1>
          <a class="button leftButton" type="cancel">Cancel</a>
          <a class="button blueButton" type="submit">Search</a>
          
          <label>Keywords:</label>
          <input id="keywords" type="text" name="keywords"/>
      </fieldset>
  </form>
  
  <?

} // if ($is_front)


// Show the secondary links if they exist
if (!empty($secondary_links)) {
  $links = '';
  foreach($secondary_links as $link_name => $link) {
    $links .= "<li><a href='{$link['href']}'>{$link['attributes']['title']}</a></li>";
    // Don't display the secondary links if you're already looking at one.
    if ($_GET['q'] == $link['href']) {
      $links = '';
      break;
    }
  }
  if (!empty($content) && !empty($links)) {
    print $content;
  }
  if (!empty($links)) {
    echo '<ul id="links_for_'.$_GET['q'].'" title="' . ($title ? $title : $site_name) . '" selected="true">' . $links . '</ul>';
  }
} // if (!empty($secondary_links)

// Display main content
?>
<div id="<?php print $is_front ? 'front_content' : $_GET['q'] ?>" title="<?php print $title ? $title : $site_name; ?>" class="panel" selected="<?(empty($primary_links) && empty($links)) ? 'true' : 'false'; ?>">
    <?php print $content; ?>
  </div>
<?php
// Check if we're sending out the front page.
if ($is_front) {
  print $closure .'</body></html>';
}
