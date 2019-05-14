<?php
/* Smarty version 3.1.30, created on 2018-07-18 06:50:09
  from "/var/www/html/tudloaccounting/ui/theme/ibilling/wrapper.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4f1b61e2e3f8_66569279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '926e56aee12c448571c2e4c845360e165403cbb8' => 
    array (
      0 => '/var/www/html/tudloaccounting/ui/theme/ibilling/wrapper.tpl',
      1 => 1510950337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'_pd\']->value)."/views/".((string)$_smarty_tpl->tpl_vars[\'_include\']->value).".tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5b4f1b61e2e3f8_66569279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['_pd']->value)."/views/".((string)$_smarty_tpl->tpl_vars['_include']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
