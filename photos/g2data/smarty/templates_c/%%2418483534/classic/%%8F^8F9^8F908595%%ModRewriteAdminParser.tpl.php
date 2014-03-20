<?php /* Smarty version 2.6.20, created on 2012-03-30 23:39:03
         compiled from gallery:modules/rewrite/templates/ModRewriteAdminParser.tpl */ ?>
<div class="gbBlock">
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Embedded Setup'), $this);?>
 </h3>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "For URL Rewrite to work in an embedded environment you need to set up an extra .htaccess file to hold the mod_rewrite rules."), $this);?>

</p>
<table class="gbDataTable"><tr>
<td>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Absolute path to the folder of your embedded .htaccess:"), $this);?>

</td><td>
<input type="text" size="60" name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[embeddedHtaccess]"), $this);?>
" value="<?php echo $this->_tpl_vars['form']['embeddedHtaccess']; ?>
" id="embeddedHtaccess"/><br/>
</td>
</tr><tr>
<td>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Please enter the Url to your environment. E.g. http://www.mySite.com/myNiceCMS/"), $this);?>

</td><td>
<?php echo $this->_tpl_vars['AdminParser']['host']; ?>
<input type="text" size="40" name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[embeddedLocation]"), $this);?>
" value="<?php echo $this->_tpl_vars['form']['embeddedLocation']; ?>
" id="embeddedLocation"/><br/>
</td>
</tr></table>
</div>