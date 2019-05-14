<?php
/* Smarty version 3.1.30, created on 2018-07-19 07:25:11
  from "/var/www/html/tudlobilling_abdel/ui/theme/ibilling/welcome.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b507517819046_79467061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6902cb37276e98c7be758c5073e7a3191c19295' => 
    array (
      0 => '/var/www/html/tudlobilling_abdel/ui/theme/ibilling/welcome.tpl',
      1 => 1510950336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5b507517819046_79467061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div class="row">
    <div class="col-md-12">

        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
!

    </div>



</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
