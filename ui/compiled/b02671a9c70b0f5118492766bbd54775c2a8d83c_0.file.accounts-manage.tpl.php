<?php
/* Smarty version 3.1.30, created on 2017-04-01 21:13:29
  from "/var/www/html/ibilling/ui/theme/ibilling/accounts-manage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e05039dd2bd4_58632937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b02671a9c70b0f5118492766bbd54775c2a8d83c' => 
    array (
      0 => '/var/www/html/ibilling/ui/theme/ibilling/accounts-manage.tpl',
      1 => 1491015435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_58e05039dd2bd4_58632937 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Accounts'];?>
</h5>

            </div>
            <div class="ibox-content">

                <table class="table table-striped table-bordered">
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>

                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['ib_url'] != '') {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['ds']->value['ib_url'];?>
" target="_blank" class="btn btn-xs btn-primary"><i class="fa fa-globe"></i></a>
                                <?php }?>

                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="did<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="cdelete btn btn-danger btn-xs"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                            </td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



                </table>

            </div>
        </div>



    </div>



</div>


<input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
