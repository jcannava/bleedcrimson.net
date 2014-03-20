<?php
// $Id: theme.inc,v 1.1.2.5 2009/04/08 22:26:21 mrfelton Exp $

/**
 * @file theme.inc
 * Preprocessing for views themes.
 */

/**
 * Preprocess the primary theme implementation for a view.
 */
function template_preprocess_rotor_view_rotor(&$vars) {
  $view = $vars['view'];
  $vars['css_name']   = views_css_safe($view->name);
  $vars['name']       = $view->name;
  $vars['display_id'] = $view->current_display;
}