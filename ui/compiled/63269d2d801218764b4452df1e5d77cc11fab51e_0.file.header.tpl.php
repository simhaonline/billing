<?php
/* Smarty version 3.1.30, created on 2017-11-27 19:54:37
  from "/var/www/html/ibilling/ui/theme/ibilling/sections/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1cb3cdaf4d72_82206209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63269d2d801218764b4452df1e5d77cc11fab51e' => 
    array (
      0 => '/var/www/html/ibilling/ui/theme/ibilling/sections/header.tpl',
      1 => 1510951475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1cb3cdaf4d72_82206209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
