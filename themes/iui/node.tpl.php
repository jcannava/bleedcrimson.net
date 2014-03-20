<?php
// $Id: node.tpl.php,v 1.1.2.2 2008/09/22 20:35:33 robloach Exp $

/**
 * @file node.tpl.php
 * 
 * Theme implementation to display a node.
 */

if ($teaser) {
  echo '<li>' . l($node->title, 'node/' . $node->nid) . '</li>'; 
}
else {
  print $content;
}
