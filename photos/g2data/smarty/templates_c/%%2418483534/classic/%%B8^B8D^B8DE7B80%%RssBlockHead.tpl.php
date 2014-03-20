<?php /* Smarty version 2.6.20, created on 2012-03-30 23:35:48
         compiled from gallery:modules/rss/templates/RssBlockHead.tpl */ ?>
<?php echo $this->_reg_objects['g'][0]->callback(array('type' => "rss.FeedList"), $this);?>

<?php if (! empty ( $this->_tpl_vars['block']['rss']['feeds'] )): ?>
<?php $_from = $this->_tpl_vars['block']['rss']['feeds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['feed']):
?>
<link rel="alternate" type="application/rss+xml" title="<?php echo $this->_tpl_vars['feed']; ?>
"
href="<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=rss.Render",'arg2' => "name=".($this->_tpl_vars['feed'])), $this);?>
" />
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>