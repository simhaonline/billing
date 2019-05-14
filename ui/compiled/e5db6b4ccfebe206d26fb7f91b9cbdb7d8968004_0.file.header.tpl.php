<?php
/* Smarty version 3.1.30, created on 2018-07-19 07:05:03
  from "/var/www/html/tudlobilling_abdel/ui/theme/ibilling/sections/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b50705fac13c1_90338397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5db6b4ccfebe206d26fb7f91b9cbdb7d8968004' => 
    array (
      0 => '/var/www/html/tudlobilling_abdel/ui/theme/ibilling/sections/header.tpl',
      1 => 1510951475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b50705fac13c1_90338397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
