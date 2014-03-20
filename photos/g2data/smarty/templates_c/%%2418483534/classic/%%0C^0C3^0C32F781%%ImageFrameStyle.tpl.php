<?php /* Smarty version 2.6.20, created on 2012-03-30 23:36:01
         compiled from gallery:modules/imageframe/templates/ImageFrameStyle.tpl */ ?>
img.ImageFrame_image { vertical-align:bottom; border:none; }
<?php $_from = $this->_tpl_vars['ImageFrameData']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['data']):
?>
<?php if ($this->_tpl_vars['data']['type'] == 'style'): ?>
img.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 { <?php echo $this->_tpl_vars['data']['style']; ?>
 }
<?php elseif ($this->_tpl_vars['data']['type'] == 'image'): ?>
table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 { direction: ltr; }
<?php if (! empty ( $this->_tpl_vars['data']['imageTL'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .TL { width:<?php echo $this->_tpl_vars['data']['widthTL']; ?>
px; height:<?php echo $this->_tpl_vars['data']['heightTL']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageTL']; ?>
) no-repeat; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageTTL'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .TTL { width:<?php echo $this->_tpl_vars['data']['widthTTL']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageTTL']; ?>
) no-repeat; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageTT'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .TT { height:<?php echo $this->_tpl_vars['data']['heightTT']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageTT']; ?>
) repeat-x; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageTTR'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .TTR { width:<?php echo $this->_tpl_vars['data']['widthTTR']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageTTR']; ?>
) no-repeat; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageTR'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .TR { width:<?php echo $this->_tpl_vars['data']['widthTR']; ?>
px; height:<?php echo $this->_tpl_vars['data']['heightTR']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageTR']; ?>
) no-repeat; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageLLT'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .LLT { height:<?php echo $this->_tpl_vars['data']['heightLLT']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageLLT']; ?>
) no-repeat; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageLL'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .LL { width:<?php echo $this->_tpl_vars['data']['widthLL']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageLL']; ?>
) repeat-y; }
table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .LL div.V { width:<?php echo $this->_tpl_vars['data']['widthLL']; ?>
px; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageLLB'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .LLB { height:<?php echo $this->_tpl_vars['data']['heightLLB']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageLLB']; ?>
) no-repeat; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageRRT'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .RRT { height:<?php echo $this->_tpl_vars['data']['heightRRT']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageRRT']; ?>
) no-repeat; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageRR'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .RR { width:<?php echo $this->_tpl_vars['data']['widthRR']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageRR']; ?>
) repeat-y; }
table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .RR div.V { width:<?php echo $this->_tpl_vars['data']['widthRR']; ?>
px; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageRRB'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .RRB { height:<?php echo $this->_tpl_vars['data']['heightRRB']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageRRB']; ?>
) no-repeat; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageBL'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .BL { width:<?php echo $this->_tpl_vars['data']['widthBL']; ?>
px; height:<?php echo $this->_tpl_vars['data']['heightBL']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageBL']; ?>
) no-repeat; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageBBL'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .BBL { width:<?php echo $this->_tpl_vars['data']['widthBBL']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageBBL']; ?>
) no-repeat; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageBB'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .BB { height:<?php echo $this->_tpl_vars['data']['heightBB']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageBB']; ?>
) repeat-x; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageBBR'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .BBR { width:<?php echo $this->_tpl_vars['data']['widthBBR']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageBBR']; ?>
) no-repeat; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageBR'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .BR { width:<?php echo $this->_tpl_vars['data']['widthBR']; ?>
px; height:<?php echo $this->_tpl_vars['data']['heightBR']; ?>
px; background:url(<?php echo $this->_tpl_vars['data']['imageBR']; ?>
) no-repeat; }
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['data']['imageCC'] )): ?>table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 .IMG { background:url(<?php echo $this->_tpl_vars['data']['imageCC']; ?>
) repeat center center; }
<?php endif; ?>
table.ImageFrame_<?php echo $this->_tpl_vars['id']; ?>
 td { font-size:1px } /* For IE */
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
td div.H { width:1px; height:0; }
td div.V { width:0; height:1px; }