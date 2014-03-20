<?php /* Smarty version 2.6.20, created on 2012-03-31 00:20:57
         compiled from gallery:modules/rss/templates/blocks/RssBlock.tpl */ ?>
<?php echo $this->_reg_objects['g'][0]->callback(array('type' => "rss.FeedList"), $this);?>

<div class="<?php echo $this->_tpl_vars['class']; ?>
">
<h3> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'RSS Feeds'), $this);?>
 </h3>
<?php if (empty ( $this->_tpl_vars['block']['rss']['feeds'] )): ?>
<p> <?php echo $this->_reg_objects['g'][0]->text(array('text' => 'No feeds have yet been defined'), $this);?>
 </p>
<?php else: ?>
<?php $_from = $this->_tpl_vars['block']['rss']['feeds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['feed']):
?>
<a href="<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=rss.Render",'arg2' => "name=".($this->_tpl_vars['feed'])), $this);?>
">
<?php echo $this->_tpl_vars['feed']; ?>
</a><br/>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['block']['rss']['showMore']): ?>
<p><a href="<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=rss.FeedList"), $this);?>
"><?php echo $this->_reg_objects['g'][0]->text(array('text' => 'List all RSS Feeds'), $this);?>
</a></p>
<?php endif; ?>
</div>