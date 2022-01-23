<?php
/* Smarty version 3.1.39, created on 2021-12-14 02:59:35
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\login\admin\form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b7fa87478964_93075999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fa12185f606743dcd79e03b81d36174a7f06e13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\login\\admin\\form.html',
      1 => 1639445266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b7fa87478964_93075999 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="loginBox-body">
    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['login_st']->value)===null||$tmp==='' ? '' : $tmp) == '') {?>
    <p><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/alert.png" alt="" />You are enter restricted area, <strong>Please Login</strong> First to acces this page !!</p>
    <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('login/adminlogin/login_process');?>
" method="post">
        <input type="hidden" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['hash'])===null||$tmp==='' ? '' : $tmp);?>
" />
        <label for="aid_username">Username :</label>
        <input type="text" name="username" maxlength="30" />
        <br />
        <label for="aid_password">Password :</label>
        <input type="password" name="pass" maxlength="30" />
        <br />
        <label> </label>
        <input class="button" type="submit" value="" name="save[login]" />
    </form>
    <?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['login_st']->value)===null||$tmp==='' ? '' : $tmp) == 'error') {?>
    <p><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/alert.png" alt="" /><strong>Username or password</strong> not found, Please Try Again or contact your administrator</p>
    <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('login/adminlogin/login_process');?>
" method="post">
        <input type="hidden" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['hash'])===null||$tmp==='' ? '' : $tmp);?>
" />
        <label for="aid_username">Username :</label>
        <input type="text" name="username" maxlength="30" />
        <br />
        <label for="aid_password">Password :</label>
        <input type="password" name="pass" maxlength="30" />
        <br />
        <label> </label>
        <input class="button" type="submit" value="" name="save[login]" />
    </form>
    <?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['login_st']->value)===null||$tmp==='' ? '' : $tmp) == 'locked') {?>
    <p><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/alert.png" alt="" />You account has been <strong>locked</strong>, Please contact your administrator to activate your account</p>
    <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('login/adminlogin/login_process');?>
" method="post">
        <input type="hidden" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['hash'])===null||$tmp==='' ? '' : $tmp);?>
" />
        <label for="aid_username">Username :</label>
        <input type="text" name="username" maxlength="30" />
        <br />
        <label for="aid_password">Password :</label>
        <input type="password" name="pass" maxlength="30" />
        <br />
        <label> </label>
        <input class="button" type="submit" value="" name="save[login]" />
    </form>
    <?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['login_st']->value)===null||$tmp==='' ? '' : $tmp) == 'still') {?>
    <p>
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/alert.png" alt="" /> You are still login. Back to <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('home/adminwelcome');?>
">administrator menu</a><br />
        Or <a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('login/adminlogin/logout_process');?>
"><strong>logout</strong></a> to end your session
    </p>
    <?php }?>
</div>
<?php }
}
