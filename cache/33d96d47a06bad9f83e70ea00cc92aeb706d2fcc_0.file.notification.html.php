<?php
/* Smarty version 3.1.39, created on 2021-12-14 02:59:46
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\base\templates\notification.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b7fa92e393c7_15908891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33d96d47a06bad9f83e70ea00cc92aeb706d2fcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\base\\templates\\notification.html',
      1 => 1639445266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b7fa92e393c7_15908891 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- notification template -->
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['notification_header']->value)===null||$tmp==='' ? '' : $tmp) == "error") {?>
<div class="alert alert-danger alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <p><strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['notification_header']->value, 'UTF-8');?>
 :</strong> <?php echo $_smarty_tpl->tpl_vars['notification_message']->value;?>
 </p>
    <?php echo $_smarty_tpl->tpl_vars['notification_error']->value;?>

    <div class="clear"></div>
</div>
<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['notification_header']->value)===null||$tmp==='' ? '' : $tmp) == "warning") {?>
<div class="alert alert-warning">
    <p><strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['notification_header']->value, 'UTF-8');?>
 :</strong> <?php echo $_smarty_tpl->tpl_vars['notification_message']->value;?>
 </p>
    <?php echo $_smarty_tpl->tpl_vars['notification_error']->value;?>

    <div class="clear"></div>
</div>
<?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['notification_header']->value)===null||$tmp==='' ? '' : $tmp) == "success") {?>
<div class="alert alert-success alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <p><strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['notification_header']->value, 'UTF-8');?>
 :</strong> <?php echo $_smarty_tpl->tpl_vars['notification_message']->value;?>
 </p>
    <?php echo $_smarty_tpl->tpl_vars['notification_error']->value;?>

    <div class="clear"></div>
</div>
<?php } else {
}?>
<!-- End of notification template -->
<?php }
}
