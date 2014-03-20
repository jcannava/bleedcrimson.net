<?php /* Smarty version 2.6.20, created on 2012-03-31 00:15:35
         compiled from gallery:modules/imageblock/templates/ImageBlockSiteAdmin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'gallery:modules/imageblock/templates/ImageBlockSiteAdmin.tpl', 57, false),array('modifier', 'replace', 'gallery:modules/imageblock/templates/ImageBlockSiteAdmin.tpl', 124, false),)), $this); ?>
<div class="gbBlock gcBackground1">
<h2> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Image Block Settings'), $this);?>
 </h2>
</div>
<?php if (isset ( $this->_tpl_vars['status']['saved'] )): ?>
<div class="gbBlock"><h2 class="giSuccess">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Settings saved successfully'), $this);?>

</h2></div>
<?php endif; ?>
<div class="gbBlock">
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Show'), $this);?>
 </h3>
<input type="checkbox" id="cbHeading"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[heading]"), $this);?>
" <?php if ($this->_tpl_vars['form']['heading']): ?>checked="checked"<?php endif; ?>/>
<label for="cbHeading">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Heading'), $this);?>

</label>
<br/>
<input type="checkbox" id="cbTitle"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[title]"), $this);?>
" <?php if ($this->_tpl_vars['form']['title']): ?>checked="checked"<?php endif; ?>/>
<label for="cbTitle">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Title'), $this);?>

</label>
<br/>
<input type="checkbox" id="cbDate"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[date]"), $this);?>
" <?php if ($this->_tpl_vars['form']['date']): ?>checked="checked"<?php endif; ?>/>
<label for="cbDate">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Date'), $this);?>

</label>
<br/>
<input type="checkbox" id="cbViews"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[views]"), $this);?>
" <?php if ($this->_tpl_vars['form']['views']): ?>checked="checked"<?php endif; ?>/>
<label for="cbViews">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'View Count'), $this);?>

</label>
<br/>
<input type="checkbox" id="cbOwner"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[owner]"), $this);?>
" <?php if ($this->_tpl_vars['form']['owner']): ?>checked="checked"<?php endif; ?>/>
<label for="cbOwner">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Owner'), $this);?>

</label>
<br/>
</div>
<?php if (isset ( $this->_tpl_vars['ImageBlockSiteAdmin']['list'] )): ?>
<div class="gbBlock">
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Frames'), $this);?>
 </h3>
<p class="giDescription">
<a href="<?php echo $this->_tpl_vars['ImageBlockSiteAdmin']['sampleUrl']; ?>
"> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'View samples'), $this);?>
 </a>
</p>
<table class="gbDataTable"><tr>
<td>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Album Frame'), $this);?>

</td><td>
<select name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[albumFrame]"), $this);?>
">
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['ImageBlockSiteAdmin']['list'],'selected' => $this->_tpl_vars['form']['albumFrame']), $this);?>

</select>
</td>
</tr><tr>
<td>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Photo Frame'), $this);?>

</td><td>
<select name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[itemFrame]"), $this);?>
">
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['ImageBlockSiteAdmin']['list'],'selected' => $this->_tpl_vars['form']['itemFrame']), $this);?>

</select>
</td>
</tr></table>
</div>
<?php endif; ?>
<div class="gbBlock gcBackground1">
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][save]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Save'), $this);?>
"/>
<input type="submit" class="inputTypeSubmit"
name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[action][reset]"), $this);?>
" value="<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Reset'), $this);?>
"/>
</div>
<div class="gbBlock">
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'External Image Block'), $this);?>
 </h3>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Use a PHP block like the one shown below to include an image block in a PHP page outside of Gallery."), $this);?>

</p>
<p class="giInfo">
&lt;?php @readfile('<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=imageblock.External",'arg2' => "blocks=randomImage",'arg3' => "show=title",'forceDirect' => true,'forceSessionId' => false,'forceFullUrl' => true), $this);?>
'); ?&gt;
</p>
<table class="gbDataTable"><tr>
<td> <?php echo $this->_tpl_vars['ImageBlockSiteAdmin']['prefix']; ?>
blocks</td>
<td> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Pipe(|) separate list chosen from: randomImage, recentImage, viewedImage, randomAlbum, recentAlbum, viewedAlbum, dailyImage, weeklyImage, monthlyImage, dailyAlbum, weeklyAlbum, monthlyAlbum, specificItem; default is randomImage"), $this);?>
 </td>
</tr><tr>
<td> <?php echo $this->_tpl_vars['ImageBlockSiteAdmin']['prefix']; ?>
show&nbsp;*</td>
<td> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Pipe(|) separated list chosen from: title, date, views, owner, heading, fullSize, rawImage; the value can also be: none"), $this);?>
 </td>
</tr><tr>
<td> <?php echo $this->_tpl_vars['ImageBlockSiteAdmin']['prefix']; ?>
itemId </td>
<td> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Limit the item selection to the subtree of the gallery under the album with the given id; or the id of the item to display when used with specificItem block type"), $this);?>
 </td>
</tr><tr>
<td> <?php echo $this->_tpl_vars['ImageBlockSiteAdmin']['prefix']; ?>
maxSize </td>
<td> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Scale images to this maximum size. If used alone Gallery will locate the most-closely-sized image to the specified value - larger images will be scaled down as necessary in your browser. If specified along with %sshow=fullSize the full size image will always be used and scaled down as necessary.",'arg1' => $this->_tpl_vars['ImageBlockSiteAdmin']['prefix']), $this);?>
 </td>
</tr><tr>
<td> <?php echo $this->_tpl_vars['ImageBlockSiteAdmin']['prefix']; ?>
exactSize </td>
<td> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Just like %smaxSize except that it will not substitute an image smaller than the size you request, so you'll get the closest match in size possible.  Note that this may use a lot more bandwidth if a much larger image has to be scaled down in your browser.",'arg1' => $this->_tpl_vars['ImageBlockSiteAdmin']['prefix']), $this);?>
 </td>
</tr><tr>
<td> <?php echo $this->_tpl_vars['ImageBlockSiteAdmin']['prefix']; ?>
link </td>
<td> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Href for link on image; value of none for no link; default is link to item in the Gallery"), $this);?>
 </td>
</tr><tr>
<td> <?php echo $this->_tpl_vars['ImageBlockSiteAdmin']['prefix']; ?>
linkTarget </td>
<td> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Add a link target (for example, to open links in a new browser window)"), $this);?>
 </td>
<?php if (isset ( $this->_tpl_vars['ImageBlockSiteAdmin']['list'] )): ?>
</tr><tr>
<td> <?php echo $this->_tpl_vars['ImageBlockSiteAdmin']['prefix']; ?>
itemFrame&nbsp;*</td>
<td> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Image frame to use around images'), $this);?>
 </td>
</tr><tr>
<td> <?php echo $this->_tpl_vars['ImageBlockSiteAdmin']['prefix']; ?>
albumFrame&nbsp;*</td>
<td> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Image frame to use around albums'), $this);?>
 </td>
<?php endif; ?>
</tr></table>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "If a parameter marked with * is omitted then the site default defined above is used."), $this);?>

</p>
<?php if (isset ( $this->_tpl_vars['ImageBlockSiteAdmin']['list'] )): ?>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Image frames require CSS to be displayed correctly. Include the following in the %s section to support image frames.",'arg1' => "&lt;head&gt;"), $this);?>

</p>
<p class="giInfo">
<?php ob_start(); ?><?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "controller=imageblock.ExternalCSS",'arg2' => "frames=wood",'forceDirect' => true,'forceSessionId' => false,'forceFullUrl' => true,'useAuthToken' => false), $this);?>
<?php $this->_smarty_vars['capture']['cssUrl'] = ob_get_contents(); ob_end_clean(); ?>
&lt;link rel="stylesheet" href="<?php echo ((is_array($_tmp=$this->_smarty_vars['capture']['cssUrl'])) ? $this->_run_mod_handler('replace', true, $_tmp, "&", "&amp;") : smarty_modifier_replace($_tmp, "&", "&amp;")); ?>
"/&gt;
</p>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Specify the frame id (or pipe separated list of ids) in the frames parameter. Omit the parameter to support the image frames configured above. Frame ids are the directory names in the %s directory.",'arg1' => "<tt>modules/imageframe/frames</tt>"), $this);?>

</p>
<?php endif; ?>
</div>