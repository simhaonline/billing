<?php
/* Smarty version 3.1.30, created on 2018-05-25 14:07:32
  from "/var/www/html/tudloaccounting/ui/theme/ibilling/settings_activate_license.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0850e42220e2_98838899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b20d11beabbb2aebfe7ab21a99a9f84090f253c5' => 
    array (
      0 => '/var/www/html/tudloaccounting/ui/theme/ibilling/settings_activate_license.tpl',
      1 => 1510950313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5b0850e42220e2_98838899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-md-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Activate License</h5>

            </div>
            <div class="ibox-content">

                <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/activate_license_post/">

                    <div class="form-group">
                        <label for="fullname">Your Full Name</label>
                        <input type="text" required class="form-control" id="fullname" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">

                    </div>

                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" required class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
">

                    </div>
                    <div class="form-group">
                        <label for="purchase_code">Purchase Code</label>
                        <input type="text" required class="form-control" id="purchase_code" name="purchase_code">
                        <span class="help-block"><a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-" target="_blank">How To Get Your Envato Purchase Code?</a> </span>
                    </div>




                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                </form>

            </div>
        </div>



    </div>



</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
