<?php
/* Smarty version 3.1.30, created on 2018-06-08 05:14:59
  from "/var/www/html/tudloaccounting/ui/theme/ibilling/welcome.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1a49134aec27_09861836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '666d1f784ea2ec8768d08664f01abd7fc1d09c9e' => 
    array (
      0 => '/var/www/html/tudloaccounting/ui/theme/ibilling/welcome.tpl',
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
function content_5b1a49134aec27_09861836 (Smarty_Internal_Template $_smarty_tpl) {
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
