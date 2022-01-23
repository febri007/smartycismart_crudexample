<?php
/* Smarty version 3.1.39, created on 2021-12-14 02:55:13
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\base\operator\document-login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b7f9814c8e89_63752466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6dc89e96fa21048a457e5dfe932dbab6f2e3b2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\base\\operator\\document-login.html',
      1 => 1639445266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b7f9814c8e89_63752466 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <!-- head -->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['meta_desc'])===null||$tmp==='' ? '' : $tmp);?>
" />
        <meta name="keywords" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['meta_key'])===null||$tmp==='' ? '' : $tmp);?>
" />
        <meta name="robots" content="index,follow" />
        <title>Login - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['site']->value['site_title'])===null||$tmp==='' ? '' : $tmp);?>
</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/resource/doc/images/icon/favicon-operator.png" rel="SHORTCUT ICON" />
        <!-- themes style -->
        <!-- other style -->
        <?php echo $_smarty_tpl->tpl_vars['LOAD_STYLE']->value;?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMESPATH']->value;?>
" media="screen" />
    </head>
    <!-- body -->
    <body class="hold-transition login-page full">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>CISMART</b> v3.1.11</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- load javascript -->
        <?php echo $_smarty_tpl->tpl_vars['LOAD_JAVASCRIPT']->value;?>

        <!-- end of javascript  -->
        <div style="position: fixed; bottom: 0; right: 0;">
            <a href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
backend"><i class="fa fa-cogs"></i> Developer Login</a>
        </div>
    </body>
    <!-- end body -->
</html>
<?php }
}
