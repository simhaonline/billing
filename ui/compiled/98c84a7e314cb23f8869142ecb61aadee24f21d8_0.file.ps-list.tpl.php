<?php
/* Smarty version 3.1.30, created on 2018-07-23 22:29:44
  from "/var/www/html/tudlobilling_abdel/ui/theme/ibilling/ps-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b568f18ed5882_93524772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98c84a7e314cb23f8869142ecb61aadee24f21d8' => 
    array (
      0 => '/var/www/html/tudlobilling_abdel/ui/theme/ibilling/ps-list.tpl',
      1 => 1510950300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5b568f18ed5882_93524772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['List'];?>
 <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Product') {?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Products'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
 <?php }?></h5>
                <div class="ibox-tools">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-new" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product'];?>
</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/s-new" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Service'];?>
</a>
                </div>
            </div>
            <div class="ibox-content" id="ibox_form">
                <div class="input-group"><input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
" id="txtsearch" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" id="search" class="btn btn-sm btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button> </span></div>
                <input type="hidden" id="stype" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">

                <div class="project-list mt-md">
                    <div id="progressbar">
                    </div>

                    <div id="application_ajaxrender">


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}