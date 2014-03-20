<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<head>

  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
    <!--[if IE 6]>
      <style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/ie-fixes/ie6.css";</style>
    <![endif]-->
    <!--[if lt IE 7.]>
      <script defer type="text/javascript" src="<?php print base_path() . path_to_theme() ?>/ie-fixes/pngfix.js"></script>
    <![endif]-->

</head>

<body>

<!-- begin wrapper -->
  <div id="container" style="background-color: #fff">

   <!-- begin header -->
    <div id="header">

    <!-- site logo -->
    <?php if ($logo) { ?>
        <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>">
          <img class="logo" src="<?php print $logo ?>" alt="<?php print t('Home') ?>" />
        </a>
    <?php } ?><!-- end site logo -->

    <!-- site name -->
      <?php if ($site_name) : ?>
            <h1>
	      <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>">
	        <?php print $site_name ?>
	      </a>
	    </h1>
	  <?php endif; ?><!-- end site name -->
	  <!-- site slogan -->
          <?php if ($site_slogan) : ?>
	      <h2>
	        <?php print $site_slogan ?>
	      </h2>
	    <?php endif; ?><!-- end site slogan -->

  </div><!-- end header -->

  <!-- search box in nowhere land - NEEDS WORK-->
  <?php if ($search_box) : ?>
   <div id="searchBox">
      <div class="wrap">
        <div class="form-item">
          <?php print $search_box ?>
	</div>
      </div>
    </div>
  <?php endif; ?><!-- end search box -->


  <!-- content -->
<!--  <div id="main">-->
    <!-- begin main content -->
    <div id="mainContent" style="width: <?php print amadou_get_mainContent_width( $sidebar_left, $sidebar_right) ?>px;">
        
          <?php if ($mission) { ?><div class="mission"><?php print $mission ?></div><?php } ?>
          <?php if ($breadcrumb) { ?><div class="breadcrumb"><?php print $breadcrumb ?></div><?php } ?>
          <?php if ($title) { ?><h1 class="pageTitle"><?php print $title ?></h1><?php } ?>
          <?php if ($tabs) { ?><div class="tabs"><?php print $tabs ?></div><?php } ?>
          <?php if ($help) { ?><div class="help"><?php print $help ?></div><?php } ?>
          <?php if ($messages) { ?><div class="messages"><?php print $messages ?></div><?php } ?>
	  <?php print $content_top; ?>
          <?php print $content; ?>

      </div>

    <!-- featured content -->
    	<!-- featured content top -->
    <?php if ($content_featured1) { ?>
    <div id="featuredContent">
	  <?php print $content_featured1; ?>
    </div>
        <?php } ?>

    	<!-- featured content middle -->
        <?php if ($content_featured2) { ?>
    <div id="featuredContent">
	  <?php print $content_featured2; ?>
    </div>
        <?php } ?>

    	<!-- featured content test -->
        <?php if ($content_featured3) { ?>
    <div id="featuredContent">
	  <?php print $content_featured3; ?>
    </div>
        <?php } ?>

      <!-- Begin Sidebars -->
    <div id="sideBars-bg" style="width: <?php print amadou_get_sideBars_width( $sidebar_left, $sidebar_right) ?>px;">
      <div id="sideBars" style="width: <?php print amadou_get_sideBars_width( $sidebar_left, $sidebar_right) ?>px;">

	<!-- left sidebar -->
        <?php if ($sidebar_left) { ?>
          <div id="leftSidebar">
            <?php print $sidebar_left ?>
          </div>
        <?php } ?>
        
        <!-- right sidebar -->
        <?php if ($sidebar_right) { ?>
          <div id="rightSidebar">
            <?php print $sidebar_right ?>
          </div>
        <?php } ?>

      </div><!-- end sidebars -->
    </div><!-- end sideBars-bg -->
    

    <div id="leftSidebar" style="width: 600px;">
    	<!-- top left headlines -->
        <?php if ($content_banner1) { ?>
    	<div style="float: left; width: 300px">
	  <?php print $content_banner1; ?>
	</div>
        <?php } ?>

    	<!-- top middle headlines -->
        <?php if ($content_banner2) { ?>
    	<div style="float: left; width: 300px">
	  <?php print $content_banner2; ?>
	</div>
        <?php } ?>
    </div>

    <div id="leftSidebar" style="width: 600px;">
    	<!-- top left headlines -->
        <?php if ($content_topleft) { ?>
    	<div style="float: left; width: 200px">
	  <?php print $content_topleft; ?>
	</div>
        <?php } ?>

    	<!-- top middle headlines -->
        <?php if ($content_topmiddle) { ?>
    	<div style="float: left; width: 200px">
	  <?php print $content_topmiddle; ?>
	</div>
        <?php } ?>

    	<!-- top right headlines -->
        <?php if ($content_topright) { ?>
    	<div style="float: left; width: 200px">
	  <?php print $content_topright; ?>
	</div>
        <?php } ?>
    </div>


    <div id="leftSidebar" style="width: 600px;">
    	<!-- bottom left headlines -->
        <?php if ($content_botleft) { ?>
    	<div style="float: left; width: 200px">
	  <?php print $content_botleft; ?>
	</div>
        <?php } ?>

    	<!-- bottom middle headlines -->
        <?php if ($content_botmiddle) { ?>
    	<div style="float: left; width: 200px">
	  <?php print $content_botmiddle; ?>
	</div>
        <?php } ?>

    	<!-- bottom right headlines -->
        <?php if ($content_botright) { ?>
    	<div style="float: left; width: 200px">
	  <?php print $content_botright; ?>
	</div>
        <?php } ?>
    </div>

  <!-- footer -->
    <div id="footer">
      <?php print $footer_message ?> 
    </div><!-- end footer -->
    
  </div><!-- end container -->
  
  <?php print $closure ?>
</body>
</html>
