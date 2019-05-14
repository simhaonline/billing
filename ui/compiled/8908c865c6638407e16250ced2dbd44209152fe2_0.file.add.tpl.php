<?php
/* Smarty version 3.1.30, created on 2018-07-18 06:50:47
  from "/var/www/html/tudloaccounting/application/plugins/notes/views/add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4f1b87db4f48_55271369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8908c865c6638407e16250ced2dbd44209152fe2' => 
    array (
      0 => '/var/www/html/tudloaccounting/application/plugins/notes/views/add.tpl',
      1 => 1510951046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4f1b87db4f48_55271369 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">

    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body">

                <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/init/add_post/" method="post">

                    <div class="form-group"><label class="col-lg-2 control-label">Title </label>

                        <div class="col-lg-10"><input type="text" name="title" class="form-control">

                        </div>
                    </div>


                    <div class="form-group"><label class="col-lg-2 control-label">Contents </label>

                        <div class="col-lg-10">

                            <textarea class="form-control" name="contents" rows="15"></textarea>

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary" type="submit" id="submit"><i
                                        class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


</div><?php }
}
