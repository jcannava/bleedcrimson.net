<?php /* Smarty version 2.6.20, created on 2012-03-30 22:36:08
         compiled from gallery:themes/classic/templates/album.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'markup', 'gallery:themes/classic/templates/album.tpl', 30, false),array('modifier', 'entitytruncate', 'gallery:themes/classic/templates/album.tpl', 121, false),array('modifier', 'indent', 'gallery:themes/classic/templates/album.tpl', 151, false),array('modifier', 'default', 'gallery:themes/classic/templates/album.tpl', 156, false),)), $this); ?>
<table width="100%" cellspacing="0" cellpadding="0">
<tr valign="top">
<?php if (! empty ( $this->_tpl_vars['theme']['params']['sidebarBlocks'] )): ?>
<td id="gsSidebarCol">
<?php echo $this->_reg_objects['g'][0]->theme(array('include' => "sidebar.tpl"), $this);?>

</td>
<?php endif; ?>
<td>
<?php if (! empty ( $this->_tpl_vars['theme']['params']['sidebarBlocks'] )): ?>
<script type="text/javascript">
// <![CDATA[
var el = document.getElementById("gsSidebarCol");
var text = el.innerText;  // IE
if (!text) text = el.textContent; // Firefox
if (!text || !text.match(/\S/)) el.style.display = 'none';
// ]]>
</script>
<?php endif; ?>
<div id="gsContent" class="gcBorder1">
<div class="gbBlock gcBackground1">
<table style="width: 100%">
<tr>
<td>
<?php if (! empty ( $this->_tpl_vars['theme']['item']['title'] )): ?>
<h2> <?php echo ((is_array($_tmp=$this->_tpl_vars['theme']['item']['title'])) ? $this->_run_mod_handler('markup', true, $_tmp) : smarty_modifier_markup($_tmp)); ?>
 </h2>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['theme']['item']['description'] )): ?>
<p class="giDescription">
<?php echo ((is_array($_tmp=$this->_tpl_vars['theme']['item']['description'])) ? $this->_run_mod_handler('markup', true, $_tmp) : smarty_modifier_markup($_tmp)); ?>

</p>
<?php endif; ?>
</td>
<td style="width: 30%">
<?php echo $this->_reg_objects['g'][0]->block(array('type' => "core.ItemInfo",'item' => $this->_tpl_vars['theme']['item'],'showDate' => true,'showSize' => true,'showOwner' => $this->_tpl_vars['theme']['params']['showAlbumOwner'],'class' => 'giInfo'), $this);?>

</td>
</tr>
</table>
</div>
<?php if (! empty ( $this->_tpl_vars['theme']['navigator'] )): ?>
<div class="gbBlock gcBackground2 gbNavigator">
<?php echo $this->_reg_objects['g'][0]->block(array('type' => "core.Navigator",'navigator' => $this->_tpl_vars['theme']['navigator'],'reverseOrder' => true), $this);?>

</div>
<?php endif; ?>
<?php if (! count ( $this->_tpl_vars['theme']['children'] )): ?>
<div class="gbBlock giDescription gbEmptyAlbum">
<h3 class="emptyAlbum">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "This album is empty."), $this);?>

<?php if (isset ( $this->_tpl_vars['theme']['permissions']['core_addDataItem'] )): ?>
<br/>
<a href="<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=core.ItemAdmin",'arg2' => "subView=core.ItemAdd",'arg3' => "itemId=".($this->_tpl_vars['theme']['item']['id'])), $this);?>
"> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Add a photo!"), $this);?>
 </a>
<?php endif; ?>
</h3>
</div>
<?php else: ?>
<?php $this->assign('childrenInColumnCount', 0); ?>
<div class="gbBlock">
<table id="gsThumbMatrix" width="100%">
<tr valign="top">
<?php $_from = $this->_tpl_vars['theme']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['child']):
?>
<?php if (( $this->_tpl_vars['childrenInColumnCount'] == $this->_tpl_vars['theme']['params']['columns'] )): ?>
</tr>
<tr valign="top">
<?php $this->assign('childrenInColumnCount', 0); ?>
<?php endif; ?>
<?php $this->assign('childrenInColumnCount', ($this->_tpl_vars['childrenInColumnCount']+1)); ?>
<td class="<?php if ($this->_tpl_vars['child']['canContainChildren']): ?>giAlbumCell gcBackground1<?php else: ?>giItemCell<?php endif; ?>">
<?php if (( $this->_tpl_vars['child']['canContainChildren'] || $this->_tpl_vars['child']['entityType'] == 'GalleryLinkItem' )): ?>
<?php $this->assign('frameType', 'albumFrame'); ?>
<?php ob_start(); ?><?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=core.ShowItem",'arg2' => "itemId=".($this->_tpl_vars['child']['id'])), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('linkUrl', ob_get_contents());ob_end_clean(); ?>
<?php else: ?>
<?php $this->assign('frameType', 'itemFrame'); ?>
<?php ob_start(); ?><?php echo $this->_reg_objects['g'][0]->url(array('params' => $this->_tpl_vars['theme']['pageUrl'],'arg1' => "itemId=".($this->_tpl_vars['child']['id'])), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('linkUrl', ob_get_contents());ob_end_clean(); ?>
<?php endif; ?>
<div>
<?php if (isset ( $this->_tpl_vars['theme']['params'][$this->_tpl_vars['frameType']] ) && isset ( $this->_tpl_vars['child']['thumbnail'] )): ?>
<?php $this->_tag_stack[] = array('container', array('type' => "imageframe.ImageFrame",'frame' => $this->_tpl_vars['theme']['params'][$this->_tpl_vars['frameType']],'width' => $this->_tpl_vars['child']['thumbnail']['width'],'height' => $this->_tpl_vars['child']['thumbnail']['height']), $this); $_block_repeat=true; $this->_reg_objects['g'][0]->container($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat); while ($_block_repeat) { ob_start();?>
<a href="<?php echo $this->_tpl_vars['linkUrl']; ?>
">
<?php echo $this->_reg_objects['g'][0]->image(array('id' => "%ID%",'item' => $this->_tpl_vars['child'],'image' => $this->_tpl_vars['child']['thumbnail'],'class' => "%CLASS% giThumbnail"), $this);?>

</a>
<?php $_obj_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_reg_objects['g'][0]->container($this->_tag_stack[count($this->_tag_stack)-1][1], $_obj_block_content, $this, $_block_repeat);} array_pop($this->_tag_stack);?>

<?php elseif (isset ( $this->_tpl_vars['child']['thumbnail'] )): ?>
<a href="<?php echo $this->_tpl_vars['linkUrl']; ?>
">
<?php echo $this->_reg_objects['g'][0]->image(array('item' => $this->_tpl_vars['child'],'image' => $this->_tpl_vars['child']['thumbnail'],'class' => 'giThumbnail'), $this);?>

</a>
<?php else: ?>
<a href="<?php echo $this->_tpl_vars['linkUrl']; ?>
" class="giMissingThumbnail">
<?php echo $this->_reg_objects['g'][0]->text(array('text' => 'no thumbnail'), $this);?>

</a>
<?php endif; ?>
</div>
</td>
<td>
<?php if (! empty ( $this->_tpl_vars['child']['title'] )): ?>
<p class="giTitle">
<?php if ($this->_tpl_vars['child']['canContainChildren'] && ( ! isset ( $this->_tpl_vars['theme']['params']['albumFrame'] ) || $this->_tpl_vars['theme']['params']['albumFrame'] == $this->_tpl_vars['theme']['params']['itemFrame'] )): ?>
<?php echo $this->_reg_objects['g'][0]->text(array('text' => "Album: %s",'arg1' => ((is_array($_tmp=$this->_tpl_vars['child']['title'])) ? $this->_run_mod_handler('markup', true, $_tmp) : smarty_modifier_markup($_tmp))), $this);?>

<?php else: ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['child']['title'])) ? $this->_run_mod_handler('markup', true, $_tmp) : smarty_modifier_markup($_tmp)); ?>

<?php endif; ?>
</p>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['child']['summary'] )): ?>
<p class="giDescription">
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['child']['summary'])) ? $this->_run_mod_handler('entitytruncate', true, $_tmp, 256) : smarty_modifier_entitytruncate($_tmp, 256)))) ? $this->_run_mod_handler('markup', true, $_tmp) : smarty_modifier_markup($_tmp)); ?>

</p>
<?php endif; ?>
<?php if (( $this->_tpl_vars['child']['canContainChildren'] && $this->_tpl_vars['theme']['params']['showAlbumOwner'] ) || ( ! $this->_tpl_vars['child']['canContainChildren'] && $this->_tpl_vars['theme']['params']['showImageOwner'] )): ?>
<?php $this->assign('showOwner', true); ?>
<?php else: ?>
<?php $this->assign('showOwner', false); ?>
<?php endif; ?>
<?php echo $this->_reg_objects['g'][0]->block(array('type' => "core.ItemInfo",'item' => $this->_tpl_vars['child'],'showDate' => true,'showOwner' => $this->_tpl_vars['showOwner'],'showSize' => true,'showViewCount' => true,'showSummaries' => true,'class' => 'giInfo'), $this);?>

<?php echo $this->_reg_objects['g'][0]->block(array('type' => "core.ItemLinks",'item' => $this->_tpl_vars['child'],'links' => $this->_tpl_vars['child']['itemLinks']), $this);?>

</td>
<?php if ($this->_tpl_vars['theme']['params']['showSubalbums']): ?>
<td class="tree">
<?php if (! empty ( $this->_tpl_vars['theme']['tree'][$this->_tpl_vars['child']['id']] )): ?>
<h4> <?php echo $this->_reg_objects['g'][0]->text(array('text' => "Subalbums:"), $this);?>
 </h4>
<ul>
<?php $this->assign('empty', ""); ?>
<?php $this->assign('depth', 0); ?>
<?php $_from = $this->_tpl_vars['theme']['tree'][$this->_tpl_vars['child']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['node']):
?>
<?php if ($this->_tpl_vars['node']['depth'] > $this->_tpl_vars['depth']): ?>
<li><ul>
<?php elseif ($this->_tpl_vars['node']['depth'] < $this->_tpl_vars['depth']): ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['empty'])) ? $this->_run_mod_handler('indent', true, $_tmp, $this->_tpl_vars['depth']-$this->_tpl_vars['node']['depth'], "</ul></li>") : smarty_modifier_indent($_tmp, $this->_tpl_vars['depth']-$this->_tpl_vars['node']['depth'], "</ul></li>")); ?>

<?php endif; ?>
<?php $this->assign('depth', $this->_tpl_vars['node']['depth']); ?>
<li>
<a href="<?php echo $this->_reg_objects['g'][0]->url(array('arg1' => "view=core.ShowItem",'arg2' => "itemId=".($this->_tpl_vars['node']['id'])), $this);?>
">
<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['theme']['treeItems'][$this->_tpl_vars['node']['id']]['title'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['theme']['treeItems'][$this->_tpl_vars['node']['id']]['pathComponent']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['theme']['treeItems'][$this->_tpl_vars['node']['id']]['pathComponent'])))) ? $this->_run_mod_handler('markup', true, $_tmp) : smarty_modifier_markup($_tmp)); ?>

</a>
</li>
<?php endforeach; endif; unset($_from); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['empty'])) ? $this->_run_mod_handler('indent', true, $_tmp, $this->_tpl_vars['depth'], "</ul></li>") : smarty_modifier_indent($_tmp, $this->_tpl_vars['depth'], "</ul></li>")); ?>

</ul>
<?php endif; ?>
</td>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php unset($this->_sections['flush']);
$this->_sections['flush']['name'] = 'flush';
$this->_sections['flush']['start'] = (int)$this->_tpl_vars['childrenInColumnCount'];
$this->_sections['flush']['loop'] = is_array($_loop=$this->_tpl_vars['theme']['params']['columns']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['flush']['show'] = true;
$this->_sections['flush']['max'] = $this->_sections['flush']['loop'];
$this->_sections['flush']['step'] = 1;
if ($this->_sections['flush']['start'] < 0)
    $this->_sections['flush']['start'] = max($this->_sections['flush']['step'] > 0 ? 0 : -1, $this->_sections['flush']['loop'] + $this->_sections['flush']['start']);
else
    $this->_sections['flush']['start'] = min($this->_sections['flush']['start'], $this->_sections['flush']['step'] > 0 ? $this->_sections['flush']['loop'] : $this->_sections['flush']['loop']-1);
if ($this->_sections['flush']['show']) {
    $this->_sections['flush']['total'] = min(ceil(($this->_sections['flush']['step'] > 0 ? $this->_sections['flush']['loop'] - $this->_sections['flush']['start'] : $this->_sections['flush']['start']+1)/abs($this->_sections['flush']['step'])), $this->_sections['flush']['max']);
    if ($this->_sections['flush']['total'] == 0)
        $this->_sections['flush']['show'] = false;
} else
    $this->_sections['flush']['total'] = 0;
if ($this->_sections['flush']['show']):

            for ($this->_sections['flush']['index'] = $this->_sections['flush']['start'], $this->_sections['flush']['iteration'] = 1;
                 $this->_sections['flush']['iteration'] <= $this->_sections['flush']['total'];
                 $this->_sections['flush']['index'] += $this->_sections['flush']['step'], $this->_sections['flush']['iteration']++):
$this->_sections['flush']['rownum'] = $this->_sections['flush']['iteration'];
$this->_sections['flush']['index_prev'] = $this->_sections['flush']['index'] - $this->_sections['flush']['step'];
$this->_sections['flush']['index_next'] = $this->_sections['flush']['index'] + $this->_sections['flush']['step'];
$this->_sections['flush']['first']      = ($this->_sections['flush']['iteration'] == 1);
$this->_sections['flush']['last']       = ($this->_sections['flush']['iteration'] == $this->_sections['flush']['total']);
?>
<td>&nbsp;</td>
<?php endfor; endif; ?>
</tr>
</table>
</div>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['theme']['navigator'] )): ?>
<div class="gbBlock gcBackground2 gbNavigator">
<?php echo $this->_reg_objects['g'][0]->block(array('type' => "core.Navigator",'navigator' => $this->_tpl_vars['theme']['navigator'],'reverseOrder' => true), $this);?>

</div>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['theme']['jumpRange'] )): ?>
<div id="gsPages" class="gbBlock gcBackground1">
<?php echo $this->_reg_objects['g'][0]->block(array('type' => "core.Pager"), $this);?>

</div>
<?php endif; ?>
<?php echo $this->_reg_objects['g'][0]->block(array('type' => "core.GuestPreview",'class' => 'gbBlock'), $this);?>

<?php echo $this->_reg_objects['g'][0]->block(array('type' => "core.EmergencyEditItemLink",'class' => 'gbBlock','checkBlocks' => "sidebar,album"), $this);?>

<?php $_from = $this->_tpl_vars['theme']['params']['albumBlocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
<?php echo $this->_reg_objects['g'][0]->block(array('type' => $this->_tpl_vars['block']['0'],'params' => $this->_tpl_vars['block']['1']), $this);?>

<?php endforeach; endif; unset($_from); ?>
</div>
</td>
</tr>
</table>