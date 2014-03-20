<?php /* Smarty version 2.6.20, created on 2012-03-30 22:36:08
         compiled from gallery:modules/imageframe/templates/containers/ImageFrame.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'gallery:modules/imageframe/templates/containers/ImageFrame.tpl', 8, false),array('modifier', 'replace', 'gallery:modules/imageframe/templates/containers/ImageFrame.tpl', 14, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['ImageFrameData']['data'][$this->_tpl_vars['frame']] )): ?>
<?php $this->assign('data', $this->_tpl_vars['ImageFrameData']['data'][$this->_tpl_vars['frame']]); ?>
<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'ImageFrame_counter','assign' => 'IF_count'), $this);?>

<?php $this->assign('objectId', "IFid".($this->_tpl_vars['IF_count'])); ?>
<?php if (isset ( $this->_tpl_vars['maxSize'] ) && isset ( $this->_tpl_vars['width'] ) && isset ( $this->_tpl_vars['height'] )): ?>
<?php echo $this->_reg_objects['g'][0]->shrinkDimensions(array('widthVar' => 'width','heightVar' => 'height','maxSize' => $this->_tpl_vars['maxSize']), $this);?>

<?php endif; ?>
<?php if (! isset ( $this->_tpl_vars['data'] ) || $this->_tpl_vars['data']['type'] == 'style'): ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['content'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", $this->_tpl_vars['objectId']) : smarty_modifier_replace($_tmp, "%ID%", $this->_tpl_vars['objectId'])))) ? $this->_run_mod_handler('replace', true, $_tmp, "%CLASS%", "ImageFrame_".($this->_tpl_vars['frame'])) : smarty_modifier_replace($_tmp, "%CLASS%", "ImageFrame_".($this->_tpl_vars['frame']))); ?>

<?php elseif ($this->_tpl_vars['data']['type'] == 'image'): ?>
<?php if (isset ( $this->_tpl_vars['data']['square'] ) && $this->_tpl_vars['data']['square'] && isset ( $this->_tpl_vars['width'] ) && isset ( $this->_tpl_vars['height'] )): ?>
<?php $this->assign('isSquare', true); ?>
<?php if ($this->_tpl_vars['width'] > $this->_tpl_vars['height']): ?><?php $this->assign('height', $this->_tpl_vars['width']); ?>
<?php else: ?><?php $this->assign('width', $this->_tpl_vars['height']); ?><?php endif; ?>
<?php endif; ?>
<table class="ImageFrame_<?php echo $this->_tpl_vars['frame']; ?>
" border="0" cellspacing="0" cellpadding="0">
<?php if (! empty ( $this->_tpl_vars['data']['imageTT'] ) || ! empty ( $this->_tpl_vars['data']['imageTL'] ) || ! empty ( $this->_tpl_vars['data']['imageTR'] ) || ! empty ( $this->_tpl_vars['data']['imageTTL'] ) || ! empty ( $this->_tpl_vars['data']['imageTTR'] )): ?>
<tr>
<td class="TL"></td>
<?php if ($this->_tpl_vars['data']['wHL']): ?><td class="TTL"></td><?php endif; ?>
<td class="TT"<?php if ($this->_tpl_vars['data']['wHL'] || $this->_tpl_vars['data']['wHR']): ?> style="width:<?php if (isset ( $this->_tpl_vars['width'] )): ?><?php echo $this->_tpl_vars['width']-$this->_tpl_vars['data']['wHL']-$this->_tpl_vars['data']['wHR']; ?>
px<?php else: ?>expression((document.getElementById('<?php echo $this->_tpl_vars['objectId']; ?>
').width-<?php echo $this->_tpl_vars['data']['wHL']+$this->_tpl_vars['data']['wHR']; ?>
)+'px')<?php endif; ?>"
<?php endif; ?>><div class="H"></div></td>
<?php if ($this->_tpl_vars['data']['wHR']): ?><td class="TTR"></td><?php endif; ?>
<td class="TR"></td>
</tr>
<?php endif; ?>
<tr>
<?php ob_start(); ?>
<td class="LL"<?php if ($this->_tpl_vars['data']['hVT'] || $this->_tpl_vars['data']['hVB']): ?> style="height:<?php if (isset ( $this->_tpl_vars['height'] )): ?><?php echo $this->_tpl_vars['height']-$this->_tpl_vars['data']['hVT']-$this->_tpl_vars['data']['hVB']; ?>
px<?php else: ?>expression((document.getElementById('<?php echo $this->_tpl_vars['objectId']; ?>
').height-<?php echo $this->_tpl_vars['data']['hVT']+$this->_tpl_vars['data']['hVB']; ?>
)+'px')<?php endif; ?>"
<?php endif; ?>><div class="V">&nbsp;</div></td>
<?php $this->_smarty_vars['capture']['LL'] = ob_get_contents(); ob_end_clean(); ?>
<?php ob_start(); ?>
<td class="RR"<?php if ($this->_tpl_vars['data']['hVT'] || $this->_tpl_vars['data']['hVB']): ?> style="height:<?php if (isset ( $this->_tpl_vars['height'] )): ?><?php echo $this->_tpl_vars['height']-$this->_tpl_vars['data']['hVT']-$this->_tpl_vars['data']['hVB']; ?>
px<?php else: ?>expression((document.getElementById('<?php echo $this->_tpl_vars['objectId']; ?>
').height-<?php echo $this->_tpl_vars['data']['hVT']+$this->_tpl_vars['data']['hVB']; ?>
)+'px')<?php endif; ?>"
<?php endif; ?>><div class="V">&nbsp;</div></td>
<?php $this->_smarty_vars['capture']['RR'] = ob_get_contents(); ob_end_clean(); ?>
<?php if ($this->_tpl_vars['data']['hVT']): ?><td class="LLT"></td><?php else: ?><?php echo $this->_smarty_vars['capture']['LL']; ?>
<?php endif; ?>
<td rowspan="<?php echo $this->_tpl_vars['data']['rowspan']; ?>
" colspan="<?php echo $this->_tpl_vars['data']['colspan']; ?>
" class="IMG"<?php if (isset ( $this->_tpl_vars['isSquare'] )): ?> align="center" valign="middle" style="width:<?php echo $this->_tpl_vars['width']; ?>
px;height:<?php echo $this->_tpl_vars['height']; ?>
px;"
<?php endif; ?>>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['content'])) ? $this->_run_mod_handler('replace', true, $_tmp, "%ID%", $this->_tpl_vars['objectId']) : smarty_modifier_replace($_tmp, "%ID%", $this->_tpl_vars['objectId'])))) ? $this->_run_mod_handler('replace', true, $_tmp, "%CLASS%", 'ImageFrame_image') : smarty_modifier_replace($_tmp, "%CLASS%", 'ImageFrame_image')); ?>
</td>
<?php if ($this->_tpl_vars['data']['hVT']): ?><td class="RRT"></td><?php else: ?><?php echo $this->_smarty_vars['capture']['RR']; ?>
<?php endif; ?>
</tr>
<?php if ($this->_tpl_vars['data']['hVT']): ?>
<tr>
<?php echo $this->_smarty_vars['capture']['LL']; ?>

<?php echo $this->_smarty_vars['capture']['RR']; ?>

</tr>
<?php endif; ?>
<?php if ($this->_tpl_vars['data']['hVB']): ?>
<tr>
<td class="LLB"></td>
<td class="RRB"></td>
</tr>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageBB'] ) || ! empty ( $this->_tpl_vars['data']['imageBL'] ) || ! empty ( $this->_tpl_vars['data']['imageBR'] ) || ! empty ( $this->_tpl_vars['data']['imageBBL'] ) || ! empty ( $this->_tpl_vars['data']['imageBBR'] )): ?>
<tr>
<td class="BL"></td>
<?php if ($this->_tpl_vars['data']['wHL']): ?><td class="BBL"></td><?php endif; ?>
<td class="BB"<?php if ($this->_tpl_vars['data']['wHL'] || $this->_tpl_vars['data']['wHR']): ?> style="width:<?php if (isset ( $this->_tpl_vars['width'] )): ?><?php echo $this->_tpl_vars['width']-$this->_tpl_vars['data']['wHL']-$this->_tpl_vars['data']['wHR']; ?>
px<?php else: ?>expression((document.getElementById('<?php echo $this->_tpl_vars['objectId']; ?>
').width-<?php echo $this->_tpl_vars['data']['wHL']+$this->_tpl_vars['data']['wHR']; ?>
)+'px')<?php endif; ?>"
<?php endif; ?>><div class="H"></div></td>
<?php if ($this->_tpl_vars['data']['wHR']): ?><td class="BBR"></td><?php endif; ?>
<td class="BR"></td>
</tr>
<?php endif; ?>
</table>
<?php endif; ?>