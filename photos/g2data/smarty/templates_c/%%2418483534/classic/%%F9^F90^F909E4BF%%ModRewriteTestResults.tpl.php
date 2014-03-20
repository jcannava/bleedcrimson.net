<?php /* Smarty version 2.6.20, created on 2012-03-31 00:34:49
         compiled from gallery:modules/rewrite/templates/ModRewriteTestResults.tpl */ ?>
<div class="gbBlock">
<table><tr>
<td>
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Apache mod_rewrite'), $this);?>
 </h3>
<?php ob_start(); ?>
<a href="http://httpd.apache.org/docs/mod/mod_rewrite.html">mod_rewrite</a>
<?php $this->_smarty_vars['capture']['mod_rewrite_anchor'] = ob_get_contents(); ob_end_clean(); ?>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Testing if %s is supported by the server.",'arg1' => $this->_smarty_vars['capture']['mod_rewrite_anchor']), $this);?>

</p>
</td>
<td style="float: right; vertical-align: top;">
<?php if ($this->_tpl_vars['TestResults']['gallery']['modRewrite'] == REWRITE_STATUS_OK): ?>
<h3 class="giSuccess"> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Success'), $this);?>
 </h3>
<?php else: ?>
<h3 class="giWarning"> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Warning'), $this);?>
 </h3>
<?php endif; ?>
</td>
<?php if ($this->_tpl_vars['TestResults']['gallery']['modRewrite'] != $this->_tpl_vars['TestResults']['gallery']['trueModRewrite']): ?>
</tr><tr>
<td colspan="2">
<p class="giDescription giWarning">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "The current status may not be accurate, you have forced the test to pass."), $this);?>

</p>
</td>
<?php endif; ?>
<?php if ($this->_tpl_vars['TestResults']['gallery']['modRewrite'] != REWRITE_STATUS_OK): ?>
</tr><tr>
<td colspan="2">
<?php if ($this->_tpl_vars['TestResults']['gallery']['modRewrite'] != REWRITE_STATUS_MULTISITE): ?>
<?php if ($this->_tpl_vars['TestResults']['gallery']['modRewrite'] == REWRITE_STATUS_APACHE_UNABLE_TO_TEST): ?>
<div class="gbBlock">
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Custom Gallery directory test setup'), $this);?>
 </h3>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Gallery tries to test mod_rewrite in action. For this to work you need to edit each of these two files accordingly:"), $this);?>

</p>
<p class="giDescription">
<b><?php echo $this->_tpl_vars['TestResults']['gallery']['customFile1']; ?>
</b><br/>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Line 6:"), $this);?>
 <?php echo $this->_tpl_vars['TestResults']['gallery']['customLine1']; ?>

</p>
<p class="giDescription">
<b><?php echo $this->_tpl_vars['TestResults']['gallery']['customFile2']; ?>
</b><br/>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Line 6:"), $this);?>
 <?php echo $this->_tpl_vars['TestResults']['gallery']['customLine2']; ?>

</p>
</div>
<?php endif; ?>
<div class="gbBlock">
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Test mod_rewrite manually'), $this);?>
 </h3>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "For whatever reason, Gallery did not detect a working mod_rewrite setup. If you are confident that mod_rewrite does work you may override the automatic detection. Please, run these two tests to see for yourself."), $this);?>

</p>
<table class="gbDataTable"><tr>
<th> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Works'), $this);?>
 </th>
<th> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Test'), $this);?>
 </th>
</tr><tr>
<td style="text-align: center;">
<input type="checkbox" name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[force][test1]"), $this);?>
"/>
</td>
<td>
<a href="<?php echo $this->_tpl_vars['TestResults']['href']['test1']; ?>
"><?php echo $this->_reg_objects['g'][0]->text(array('text' => "mod_rewrite configuration 1 (with global Options +FollowSymlinks)"), $this);?>
</a>
</td>
</tr><tr>
<td style="text-align: center;">
<input type="checkbox" name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[force][test2]"), $this);?>
"/>
</td>
<td>
<a href="<?php echo $this->_tpl_vars['TestResults']['href']['test2']; ?>
"><?php echo $this->_reg_objects['g'][0]->text(array('text' => "mod_rewrite configuration 2 (with local Options +FollowSymlinks)"), $this);?>
</a>
</td>
</tr></table>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "If one of the two tests gives you a page with the text PASS_REWRITE you are good to go."), $this);?>

</p>
</div>
<?php else: ?>
<div class="gbBlock">
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Apache mod_rewrite and Gallery multisite'), $this);?>
 </h3>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Gallery tries to test mod_rewrite in action. This does not work with multisite since Gallery lacks the complete codebase."), $this);?>

</p>
<table class="gbDataTable"><tr>
<th> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Force'), $this);?>
 </th>
<th> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Test'), $this);?>
 </th>
</tr><tr>
<td style="text-align: center;">
<input type="checkbox" name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[force][test1]"), $this);?>
"/>
</td>
<td>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "mod_rewrite configuration 1 (with global Options +FollowSymlinks)"), $this);?>

</td>
</tr><tr>
<td style="text-align: center;">
<input type="checkbox" name="<?php echo $this->_reg_objects['g'][0]->formVar(array('var' => "form[force][test2]"), $this);?>
"/>
</td>
<td>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "mod_rewrite configuration 2 (with local Options +FollowSymlinks)"), $this);?>

</td>
</tr></table>
</div>
<?php endif; ?>
</td>
<?php endif; ?>
</tr><tr>
<td>
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Gallery .htaccess file"), $this);?>
 </h3>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Testing if Gallery can write to the .htaccess file."), $this);?>

</p>
</td>
<td style="float: right; vertical-align: top;">
<?php if ($this->_tpl_vars['TestResults']['gallery']['htaccess'] == REWRITE_STATUS_OK): ?>
<h2 class="giSuccess"> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Success'), $this);?>
 </h2>
<?php else: ?>
<h2 class="giError"> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Error'), $this);?>
 </h2>
<?php endif; ?>
</td>
<?php if ($this->_tpl_vars['TestResults']['gallery']['htaccess'] != REWRITE_STATUS_OK): ?>
</tr><tr>
<td colspan="2">
<div class="gbBlock">
<?php if ($this->_tpl_vars['TestResults']['gallery']['htaccess'] == REWRITE_STATUS_HTACCESS_MISSING): ?>
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Please create a file in your Gallery directory named .htaccess"), $this);?>
 </h3>
<pre class="giDescription">touch <?php echo $this->_tpl_vars['TestResults']['gallery']['htaccessPath']; ?>
<br/>chmod 666 <?php echo $this->_tpl_vars['TestResults']['gallery']['htaccessPath']; ?>
</pre>
<?php endif; ?>
<?php if ($this->_tpl_vars['TestResults']['gallery']['htaccess'] == REWRITE_STATUS_HTACCESS_CANT_READ): ?>
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Please make sure Gallery can read the existing .htaccess file"), $this);?>
 </h3>
<pre class="giDescription">chmod 666 <?php echo $this->_tpl_vars['TestResults']['gallery']['htaccessPath']; ?>
</pre>
<?php endif; ?>
<?php if ($this->_tpl_vars['TestResults']['gallery']['htaccess'] == REWRITE_STATUS_HTACCESS_CANT_WRITE): ?>
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Please make sure Gallery can write to the existing .htaccess file"), $this);?>
 </h3>
<pre class="giDescription">chmod 666 <?php echo $this->_tpl_vars['TestResults']['gallery']['htaccessPath']; ?>
</pre>
<?php endif; ?>
</div>
</td>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['TestResults']['embedded'] )): ?>
</tr><tr>
<td>
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Embedded .htaccess file"), $this);?>
 </h3>
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Testing if Gallery can write to the embedded .htaccess file."), $this);?>

</p>
</td>
<td style="float: right; vertical-align: top;">
<?php if ($this->_tpl_vars['TestResults']['embedded']['htaccess'] == REWRITE_STATUS_OK): ?>
<h2 class="giSuccess"> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Success'), $this);?>
 </h2>
<?php else: ?>
<h2 class="giError"> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Error'), $this);?>
 </h2>
<?php endif; ?>
</td>
<?php if ($this->_tpl_vars['TestResults']['embedded']['htaccess'] != REWRITE_STATUS_OK): ?>
</tr><tr>
<?php if ($this->_tpl_vars['TestResults']['embedded']['htaccessPath'] == '/.htaccess'): ?>
<td>
<div class="gbBlock">
<p class="giDescription">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Please configure the embedded htaccess path."), $this);?>

</p>
</div>
</td>
<?php else: ?>
<td colspan="2">
<div class="gbBlock">
<?php if ($this->_tpl_vars['TestResults']['embedded']['htaccess'] == REWRITE_STATUS_HTACCESS_MISSING): ?>
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Please create a file in your Gallery directory named .htaccess"), $this);?>
 </h3>
<pre class="giDescription">touch <?php echo $this->_tpl_vars['TestResults']['embedded']['htaccessPath']; ?>
<br/>chmod 666 <?php echo $this->_tpl_vars['TestResults']['embedded']['htaccessPath']; ?>
</pre>
<?php endif; ?>
<?php if ($this->_tpl_vars['TestResults']['embedded']['htaccess'] == REWRITE_STATUS_HTACCESS_CANT_READ): ?>
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Please make sure Gallery can read the existing .htaccess file"), $this);?>
 </h3>
<pre class="giDescription">chmod 666 <?php echo $this->_tpl_vars['TestResults']['embedded']['htaccessPath']; ?>
</pre>
<?php endif; ?>
<?php if ($this->_tpl_vars['TestResults']['embedded']['htaccess'] == REWRITE_STATUS_HTACCESS_CANT_WRITE): ?>
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Please make sure Gallery can write to the existing .htaccess file"), $this);?>
 </h3>
<pre class="giDescription">chmod 666 <?php echo $this->_tpl_vars['TestResults']['embedded']['htaccessPath']; ?>
</pre>
<?php endif; ?>
</div>
</td>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
</tr></table>
</div>