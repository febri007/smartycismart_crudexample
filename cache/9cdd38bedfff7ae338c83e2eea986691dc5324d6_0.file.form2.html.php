<?php
/* Smarty version 3.1.39, created on 2021-12-14 03:20:09
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\login\operator\form2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b7ff592ece24_89082376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cdd38bedfff7ae338c83e2eea986691dc5324d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\login\\operator\\form2.html',
      1 => 1639445266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b7ff592ece24_89082376 (Smarty_Internal_Template $_smarty_tpl) {
if (is_array($_smarty_tpl->tpl_vars['login_st']->value) == false) {?> <?php if ((($tmp = @$_smarty_tpl->tpl_vars['login_st']->value)===null||$tmp==='' ? '' : $tmp) == 'error') {?>
<div class="alert alert-danger alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <p><strong>Your account is not found</strong>, Please Try Again or contact your administrator</p>
    <div class="clear"></div>
</div>
<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['login_st']->value)===null||$tmp==='' ? '' : $tmp) == 'locked') {?>
<div class="alert alert-danger alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <p><strong>Your account has been locked</strong>, Please Try Again or contact your administrator</p>
    <div class="clear"></div>
</div>
<?php } else { ?>
<div class="alert alert-warning alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <p><strong>Please Login First</strong>, to acces this application!</p>
    <div class="clear"></div>
</div>
<?php }?>
<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('login/operatorlogin2/login_process');?>
" method="post">
    <input type="hidden" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['hash'])===null||$tmp==='' ? '' : $tmp);?>
" />

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username" name="username" autofocus="" autocomplete="off" maxlength="30" required="" />
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password" name="pass" autofocus="" autocomplete="off" maxlength="300" required="" />
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-8"></div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <!-- /.col -->
    </div>
</form>

<?php } else { ?>
<div class="alert alert-info">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <p><strong>Info</strong>, You has log in.</p>
</div>
<div class="alert alert-default text-center">
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url($_smarty_tpl->tpl_vars['login_st']->value['default_page']);?>
">Back to Dashboard</a></p>
</div>
<?php }
}
}
