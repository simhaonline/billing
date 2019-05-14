<?php
/* Smarty version 3.1.30, created on 2018-07-18 05:10:49
  from "/var/www/html/tudloaccounting/ui/theme/ibilling/contacts_import.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4f0419304eb6_72292271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29cc2deec33a1fdb6fc6009c259bec197ce0bd97' => 
    array (
      0 => '/var/www/html/tudloaccounting/ui/theme/ibilling/contacts_import.tpl',
      1 => 1510950242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5b4f0419304eb6_72292271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
    <div class="col-md-12 m-b-sm">

        <div class="pull-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list/" class="btn btn-xs btn-danger"><i class="fa fa-arrow-left"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
             <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/system/contacts.csv" class="btn btn-xs btn-primary"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download Sample File'];?>
</a>
        </div>

    </div>

</div>


<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default" id="uploading_inside">
            <div class="panel-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/csv_upload/" class="dropzone" id="upload_container">

                    <div class="dz-message">
                        <h3> <i class="fa fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop CSV File Here'];?>
</h3>
                        <br />
                        <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Click to Upload'];?>
</span>
                    </div>

                </form>

            </div>
        </div>

    </div>

</div>






<input type="hidden" id="_msg_importing" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Importing'];?>
 ...">
<input type="hidden" id="_msg_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
