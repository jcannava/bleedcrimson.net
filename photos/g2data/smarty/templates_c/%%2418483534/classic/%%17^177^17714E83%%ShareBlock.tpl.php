<?php /* Smarty version 2.6.20, created on 2012-03-30 23:37:47
         compiled from gallery:modules/share/templates/blocks/ShareBlock.tpl */ ?>
<?php echo $this->_reg_objects['g'][0]->callback(array('type' => "share.ShareBlock"), $this);?>

<?php if (! ( $this->_tpl_vars['block']['share']['onlyWhenLoggedIn'] && $this->_tpl_vars['user']['isGuest'] )): ?>
<div class="<?php echo $this->_tpl_vars['class']; ?>
">
<a href="http://www.facebook.com/share.php?u=<url>" class="fb_share_button" onclick="return fbs_click()" target="_blank" style="text-decoration:none;"><?php echo $this->_reg_objects['g'][0]->text(array('text' => 'Share'), $this);?>
</a>
</div>
<?php endif; ?>