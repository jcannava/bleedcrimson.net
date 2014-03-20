<?php /* Smarty version 2.6.20, created on 2012-03-30 23:35:48
         compiled from gallery:modules/share/templates/ShareBlockHead.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'gallery:modules/share/templates/ShareBlockHead.tpl', 6, false),array('modifier', 'markup', 'gallery:modules/share/templates/ShareBlockHead.tpl', 6, false),)), $this); ?>
<meta name="title" content="<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['theme']['item']['title'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['theme']['item']['pathComponent']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['theme']['item']['pathComponent'])))) ? $this->_run_mod_handler('markup', true, $_tmp, 'strip') : smarty_modifier_markup($_tmp, 'strip')); ?>
" />
<?php if (! empty ( $this->_tpl_vars['theme']['item']['description'] ) || ! empty ( $this->_tpl_vars['theme']['item']['summary'] )): ?>
<meta name="description" content="<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['theme']['item']['description'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['theme']['item']['summary']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['theme']['item']['summary'])))) ? $this->_run_mod_handler('markup', true, $_tmp, 'strip') : smarty_modifier_markup($_tmp, 'strip')); ?>
" />
<?php endif; ?>
<script>
function fbs_click() {
u=location.href;
t=document.title;
window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');
return false;
}
if (top.location != location) {
top.location.href = document.location.href;
}
</script>
<style>
html .fb_share_button {
display: -moz-inline-block;
display:inline-block;
padding:1px 20px 0 5px;
height:15px; border:1px solid #d8dfea;
background:url(http://b.static.ak.fbcdn.net/rsrc.php/zAB5S/hash/4273uaqa.gif) no-repeat top right;
}
html .fb_share_button:hover {
color:#fff;
border-color:#295582;
background:#3b5998 url(http://b.static.ak.fbcdn.net/rsrc.php/zAB5S/hash/4273uaqa.gif) no-repeat top right;
text-decoration:none;
}
</style>