<?php
/* Smarty version 3.1.39, created on 2021-12-14 02:59:43
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\base\admin\sidebar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b7fa8fa462f5_15790400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60b22bca2b8b8c7411101e4faa93707ea6a409f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\base\\admin\\sidebar.html',
      1 => 1639445266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b7fa8fa462f5_15790400 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="side-info">
    <p><b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['com_user']->value['operator_name'])===null||$tmp==='' ? '' : $tmp);?>
</b></p>
    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['com_user']->value['role_nm'])===null||$tmp==='' ? '' : $tmp);?>
</p>
    <div class="clear"></div>
</div>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['list_sidebar_nav']->value)===null||$tmp==='' ? '' : $tmp);?>

<div class="side-menu">
    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('login/adminlogin/logout_process');?>
" class="logout">Logout</a></h3>
</div><?php }
}
