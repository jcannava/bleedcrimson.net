<?php
@error_reporting(0);

require_once(dirname(__FILE__) . '/modules/core/classes/GalleryDataCache.class');
GalleryDataCache::put('G2_EMBED', 1, true);
require(dirname(__FILE__) . '/main.php');
require(dirname(__FILE__) . '/modules/core/classes/GalleryEmbed.class');

GalleryEmbed::getEmbedPathByHttpRequest();
?>
