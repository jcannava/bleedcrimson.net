<?php /* Smarty version 2.6.20, created on 2012-03-30 23:39:33
         compiled from Htaccess.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'implode', 'Htaccess.tpl', 24, false),)), $this); ?>
# BEGIN Url Rewrite section
# (Automatically generated.  Do not edit this section)
<IfModule mod_rewrite.c>
<?php if ($this->_tpl_vars['Htaccess']['needOptions']): ?>
    Options +FollowSymlinks
<?php endif; ?>
    RewriteEngine On

    RewriteBase <?php echo $this->_tpl_vars['Htaccess']['rewriteBase']; ?>


    RewriteCond %{REQUEST_FILENAME} -f [OR]
    RewriteCond %{REQUEST_FILENAME} -d [OR]
    RewriteCond %{REQUEST_FILENAME} gallery\_remote2\.php
    RewriteCond %{REQUEST_URI} !<?php echo $this->_tpl_vars['Htaccess']['matchBaseFile']; ?>
$
    RewriteRule .   -   [L]

<?php $_from = $this->_tpl_vars['Htaccess']['rules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rule']):
?>
<?php if (! empty ( $this->_tpl_vars['rule']['conditions'] )): ?>
<?php $_from = $this->_tpl_vars['rule']['conditions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['condition']):
?>
    RewriteCond %{<?php echo $this->_tpl_vars['condition']['test']; ?>
} <?php echo $this->_tpl_vars['condition']['pattern']; ?>
<?php if (! empty ( $this->_tpl_vars['condition']['flags'] )): ?>   [<?php echo implode($this->_tpl_vars['condition']['flags'], ","); ?>
]<?php endif; ?>

<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
    RewriteRule .   <?php echo $this->_tpl_vars['rule']['substitution']; ?>
<?php if (! empty ( $this->_tpl_vars['rule']['flags'] )): ?>   [<?php echo implode($this->_tpl_vars['rule']['flags'], ","); ?>
]<?php endif; ?>

<?php endforeach; endif; unset($_from); ?>
</IfModule>

# END Url Rewrite section
