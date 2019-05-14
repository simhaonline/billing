<?php
/* Smarty version 3.1.30, created on 2018-05-25 14:07:14
  from "/var/www/html/tudloaccounting/ui/theme/ibilling/sections/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0850d27cde37_24559376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8a6d57d1d8a52aa0d8ba77188a824f2da4fcea8' => 
    array (
      0 => '/var/www/html/tudloaccounting/ui/theme/ibilling/sections/header.tpl',
      1 => 1510951475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0850d27cde37_24559376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
