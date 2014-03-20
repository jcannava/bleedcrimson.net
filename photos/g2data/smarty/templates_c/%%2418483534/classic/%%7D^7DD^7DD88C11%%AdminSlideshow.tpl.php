<?php /* Smarty version 2.6.20, created on 2012-03-31 00:15:44
         compiled from gallery:modules/slideshow/templates/AdminSlideshow.tpl */ ?>
<div class="gbBlock gcBackground1">
<h2> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Slideshow Settings'), $this);?>
 </h2>
</div>
<?php if (! empty ( $this->_tpl_vars['status'] )): ?>
<div class="gbBlock">
<?php if (! empty ( $this->_tpl_vars['status']['installed'] )): ?>
<h2 class="giSuccess"><?php echo $this->_reg_objects['g'][0]->text(array('text' => "Installed PicLens version %s",'arg1' => $this->_tpl_vars['status']['installed']), $this);?>

<?php elseif (! empty ( $this->_tpl_vars['status']['downloadFailed'] )): ?>
<h2 class="giError"><?php echo $this->_reg_objects['g'][0]->text(array('text' => "An error occurred while downloading PicLens!"), $this);?>

<?php elseif (! empty ( $this->_tpl_vars['status']['uninstalled'] )): ?>
<h2 class="giSuccess"><?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Uninstalled PicLens'), $this);?>

<?php endif; ?>
</h2>
</div>
<?php endif; ?>
<div class="gbBlock">
<h2> PicLens </h2>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Gallery can optionally use a Flash and JavaScript based slideshow from %s to provide users with the best possible viewing experience.  Gallery can install %s for you automatically, or you can choose to use an HTML slideshow.",'arg1' => "<a href=\"http://piclens.com\">PicLens</a>",'arg2' => 'PicLens'), $this);?>

</p>
<?php if ($this->_tpl_vars['AdminSlideshow']['piclens']['current']): ?>
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Version %s installed.",'arg1' => $this->_tpl_vars['AdminSlideshow']['piclens']['current']), $this);?>
 </h3>
<?php if ($this->_tpl_vars['AdminSlideshow']['piclens']['update']): ?>
<p>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "There's a newer version of PicLens available."), $this);?>

</p>
<?php endif; ?>
<?php elseif (! $this->_tpl_vars['AdminSlideshow']['piclens']['update']): ?>
<h3 class="giError">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "PicLens downloads are currently unavailable.  Please try again later."), $this);?>

</h3>
<?php endif; ?>
</div>
<?php if ($this->_tpl_vars['AdminSlideshow']['piclens']['current'] || $this->_tpl_vars['AdminSlideshow']['piclens']['update']): ?>
<div class="gbBlock gcBackground1">
<?php if (! $this->_tpl_vars['AdminSlideshow']['piclens']['current']): ?>
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][install]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Install PicLens version %s",'arg1' => $this->_tpl_vars['AdminSlideshow']['piclens']['update']), $this);?>
"/>
<?php else: ?>
<?php if ($this->_tpl_vars['AdminSlideshow']['piclens']['update']): ?>
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][install]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Update to PicLens version %s",'arg1' => $this->_tpl_vars['AdminSlideshow']['piclens']['update']), $this);?>
"/>
<?php endif; ?>
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][uninstall]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Uninstall PicLens'), $this);?>
"/>
<?php endif; ?>
</div>
<?php endif; ?>