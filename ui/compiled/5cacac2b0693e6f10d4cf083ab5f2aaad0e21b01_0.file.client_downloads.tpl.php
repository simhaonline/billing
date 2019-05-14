<?php
/* Smarty version 3.1.30, created on 2018-07-23 22:35:37
  from "/var/www/html/tudlobilling_abdel/ui/theme/ibilling/client_downloads.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b569079eaaa46_52133806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cacac2b0693e6f10d4cf083ab5f2aaad0e21b01' => 
    array (
      0 => '/var/www/html/tudlobilling_abdel/ui/theme/ibilling/client_downloads.tpl',
      1 => 1510950229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5b569079eaaa46_52133806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="panel panel-default">

    <div class="panel-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover sys_table">
                <thead>
                <tr>
                    <th class="text-right" data-sort-ignore="true" width="20px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>

                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</th>

                    <th class="text-right" data-sort-ignore="true" width="170px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Download'];?>
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

                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'jpg' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'png' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'gif') {?>
                                <i class="fa fa-file-image-o"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'pdf') {?>
                                <i class="fa fa-file-pdf-o"></i>
                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'zip') {?>
                                <i class="fa fa-file-archive-o"></i>
                            <?php } else { ?>
                                <i class="fa fa-file"></i>
                            <?php }?>
                        </td>


                        <td>

                            <?php echo $_smarty_tpl->tpl_vars['ds']->value['title'];?>


                        </td>

                        <td class="text-right">

                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dl/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['ds']->value['file_dl_token'];?>
/" class="md-btn md-btn-primary"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download'];?>
</a>

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
