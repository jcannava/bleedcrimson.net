<?php

function myTheme_settings($saved_settings) {
  $defaults = array(
    'myTheme_development' => 0,
  );
 
  $settings = array_merge($defaults, $saved_settings);
 
  $form['myTheme_development'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enabled theme development mode'),
    '#help' => t('Causes a theme registry and css cache reset on all page loads if enabled. Disable on a live site.'),
    '#default_value' => $settings['myTheme_development'],
  );
 
  return $form;
}
?>
