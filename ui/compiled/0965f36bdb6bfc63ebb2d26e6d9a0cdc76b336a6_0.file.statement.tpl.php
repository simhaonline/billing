<?php
/* Smarty version 3.1.30, created on 2018-07-19 07:28:03
  from "/var/www/html/tudlobilling_abdel/ui/theme/ibilling/statement.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b5075c35f9b03_17928053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0965f36bdb6bfc63ebb2d26e6d9a0cdc76b336a6' => 
    array (
      0 => '/var/www/html/tudlobilling_abdel/ui/theme/ibilling/statement.tpl',
      1 => 1510950318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5b5075c35f9b03_17928053 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['View Statement'];?>
</h5>

            </div>
            <div class="ibox-content">

                <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/statement-view" id="tform" role="form">
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</label>
                        <div class="col-sm-9">
                            <select id="account" name="account">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose an Account'];?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



                            </select>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="fdate" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['From Date'];?>
</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['tdate']->value;?>
" name="fdate" id="fdate" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tdate" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['To Date'];?>
</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['mdate']->value;?>
" name="tdate" id="tdate" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="stype" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
                        <div class="col-sm-9">
                            <select id="stype" name="stype" class="form-control">
                                <option value="all" selected="selected"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Transactions'];?>
</option>
                                <option value="credit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Credit'];?>
</option>
                                <option value="debit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Debit'];?>
</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" id="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View Statement'];?>
</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>



    </div>



</div>




<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
