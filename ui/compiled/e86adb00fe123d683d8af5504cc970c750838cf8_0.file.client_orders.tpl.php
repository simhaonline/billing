<?php
/* Smarty version 3.1.30, created on 2018-07-23 22:35:22
  from "/var/www/html/tudlobilling_abdel/ui/theme/ibilling/client_orders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b56906a6a9b25_73129758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e86adb00fe123d683d8af5504cc970c750838cf8' => 
    array (
      0 => '/var/www/html/tudlobilling_abdel/ui/theme/ibilling/client_orders.tpl',
      1 => 1510950233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5b56906a6a9b25_73129758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="panel panel-default">

    <div class="panel-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover sys_table">
                <thead>
                <tr>

                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
 #</th>


                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>

                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>

                    <tr>

                        <td> <?php ob_start();
echo $_smarty_tpl->tpl_vars['ds']->value['date_added'];
$_prefixVariable1=ob_get_clean();
echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_prefixVariable1));?>
 </td>

                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/order_view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['ds']->value['ordernum'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['stitle'];?>
</a>


                        </td>

                        <td>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/order_view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['ds']->value['ordernum'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['ordernum'];?>
</a>

                        </td>




                        <td class="amount">
                            <?php echo $_smarty_tpl->tpl_vars['ds']->value['amount'];?>


                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Active') {?>
                                <span class="label label-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ds']->value['status']]);?>
</span>
                            <?php } else { ?>
                                <span class="label label-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ds']->value['status']]);?>
</span>
                            <?php }?>
                        </td>
                    </tr>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                </tbody>



            </table>

        </div>




    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
