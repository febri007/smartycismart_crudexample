<?php
/* Smarty version 3.1.39, created on 2021-12-17 07:00:29
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\operator\lock\lockscreen.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61bc277dc97e22_04172731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09115559ea616b12db9fc8fa995f7139a5ce8203' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\operator\\lock\\lockscreen.html',
      1 => 1639713470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61bc277dc97e22_04172731 (Smarty_Internal_Template $_smarty_tpl) {
?><body class="hold-transition lockscreen">
  <!-- Automatic element centering -->
  <div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
      <a href=""><b>Lock</b>Screen</a>
    </div>
    <!-- User name -->
    <!-- <div class="lockscreen-name">John Doe</div> -->

    <!-- START LOCK SCREEN ITEM -->
    <!-- <div class="lockscreen-item"> -->
    <!-- lockscreen image -->
    <!-- <div class="lockscreen-image">
          <p>TE</p>
        </div> -->
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <?php if ($_smarty_tpl->tpl_vars['notify']->value == 'sukses') {?>
    <div class="alert alert-success alert-dismissable">
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      <p><strong>Terkonfirmasi</strong>Thanks</p>
      <div class="clear"></div>
    </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['notify']->value == 'false') {?>
    <div class="alert alert-danger alert-dismissable">
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      <p><strong>Not Your account</strong>, Please Try Again or contact your administrator</p>
      <div class="clear"></div>
    </div>
    <?php }?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('operator/exportpdf/logon');?>
" class="lockscreen-credentials" method="POST">
      <div class="input-group">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
">
        <input type="password" name="pass" id="pass" class="form-control" placeholder="enter password" required>
        <div class="input-group-append">
          <button type="button" class="btn">
            <i class="fas fa-arrow-right text-muted"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <!-- <div class="help-block text-center">
        Enter your password to retrieve your session
      </div>-->
  <!-- <div class="text-center">
        <a href="login.html">Or sign in as a different user</a>
      </div> -->
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2014-2021 <b><a href="]" class="text-black">AdminLTE.io</a></b><br>
    All rights reserved
  </div>
  </div>
  <!-- /.center -->

  <!-- jQuery -->

</body><?php }
}
