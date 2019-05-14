<?php
/* Smarty version 3.1.30, created on 2018-07-09 02:54:45
  from "/var/www/html/tudloaccounting/ui/theme/ibilling/documents.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4306b5a90935_26334080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6258dc1ea3128bba96121996e64d7caa45a830a3' => 
    array (
      0 => '/var/www/html/tudloaccounting/ui/theme/ibilling/documents.tpl',
      1 => 1510950251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5b4306b5a90935_26334080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">



    <div class="col-md-12">



        <div class="panel panel-default">
            <div class="panel-body">

                <a data-toggle="modal" href="#modal_add_item" class="btn btn-primary add_document waves-effect waves-light" id="add_document"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Document'];?>
</a>


            </div>

        </div>
    </div>



</div>

<div class="row">



    <div class="col-md-12">



        <div class="panel panel-default">

            <div class="panel-body">

                <form class="form-horizontal" method="post" action="">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-search"></span>
                                </div>
                                <input type="text" name="name" id="foo_filter" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
..."/>

                            </div>
                        </div>

                    </div>
                </form>

                <table class="table table-bordered table-hover sys_table footable" id="footable_tbl"  data-filter="#foo_filter" data-page-size="50">
                    <thead>
                    <tr>

                        <th class="text-right" data-sort-ignore="true" width="20px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>

                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</th>


                        <th class="text-right" data-sort-ignore="true" width="200px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
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

                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
documents/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['title'];?>
</a>

                            </td>



                            <td class="text-right">

                                <a href="#" class="btn btn-primary btn-xs c_link" data-token="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['ds']->value['file_dl_token'];?>
"><i class="fa fa-link"></i> </a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
documents/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-success btn-xs"><i class="fa fa-search"></i> </a>

                                <a href="#" class="btn btn-danger btn-xs cdelete" id="did<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                    </tbody>

                    <tfoot>
                    <tr>
                        <td colspan="3">
                            <ul class="pagination">
                            </ul>
                        </td>
                    </tr>
                    </tfoot>

                </table>

            </div>
        </div>
    </div>



</div>

<div class="md-fab-wrapper">
    <a class="md-fab md-fab-primary waves-effect waves-light add_document" data-toggle="modal" href="#modal_add_item">
        <i class="fa fa-plus"></i>
    </a>
</div>

<div id="modal_add_item" class="modal fade" tabindex="-1" data-width="760" style="display: none;">

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Document'];?>
</h4>
    </div>
    <div class="modal-body">
        <div class="row">

            <div class="col-md-12">

                <form>
                    <div class="form-group">
                        <label for="doc_title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</label>
                        <input type="text" class="form-control" id="doc_title" name="doc_title">

                    </div>



                </form>

                <form action="" class="dropzone" id="upload_container">

                    <div class="dz-message">
                        <h3> <i class="fa fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop File Here'];?>
</h3>
                        <br />
                        <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click to Upload'];?>
</span>
                    </div>

                </form>
                <hr>
                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Server Config'];?>
:</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upload Maximum Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['upload_max_size']->value;?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['POST Maximum Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['post_max_size']->value;?>
</p>

            </div>






        </div>
    </div>
    <div class="modal-footer">
        <input type="hidden" name="file_link" id="file_link" value="">
        <button type="button" data-dismiss="modal" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
        <button type="button" id="btn_add_file" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}