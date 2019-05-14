<?php
/* Smarty version 3.1.30, created on 2018-07-19 07:10:29
  from "/var/www/html/tudlobilling_abdel/ui/theme/ibilling/appearance_editor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b5071a51499b9_67790742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45ff22c8dfe655ccb0b2c3cb305dab82ffa5abad' => 
    array (
      0 => '/var/www/html/tudlobilling_abdel/ui/theme/ibilling/appearance_editor.tpl',
      1 => 1510950215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5b5071a51499b9_67790742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div class="row" id="ib_editor_canvas">
    <div class="col-lg-2">
        <div class="form-group">
            <label for="editor_file"><?php echo $_smarty_tpl->tpl_vars['_L']->value['File'];?>
</label>
            <select name="editor_file" id="editor_file" class="form-control">
                <option value="no_file" selected="selected" ><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select File to Edit'];?>
</option>
                <option value="language.php"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Language File'];?>
</option>
                <option value="invoice_printer.php"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Layout Print'];?>
</option>
                <option value="invoice_pdf.php"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Layout PDF'];?>
</option>


            </select>
        </div>
        <button type="submit" id="ib_btn_save" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
    </div>
    <div class="col-lg-10">


        <div id="editor" style="min-height: 800px;"></div>



    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
