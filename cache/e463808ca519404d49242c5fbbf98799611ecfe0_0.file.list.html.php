<?php
/* Smarty version 3.1.39, created on 2021-12-14 02:59:52
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\settings\user\list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b7fa980eeac3_71431359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e463808ca519404d49242c5fbbf98799611ecfe0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\settings\\user\\list.html',
      1 => 1639445266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_61b7fa980eeac3_71431359 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="head-content">
    <h3>Users</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminuser/add');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/add-icon.png" alt="" /> Add Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminuser');?>
" class="active">List Data</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_smarty_tpl->_subTemplateRender("file:base/templates/notification.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- end of notification template-->
<div class="pageRow">
    <div class="pageNav">
        <ul>
            <li class="info"><strong><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagination']->value['start'])===null||$tmp==='' ? '0' : $tmp);?>
 - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagination']->value['end'])===null||$tmp==='' ? '0' : $tmp);?>
</strong> dari <strong><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagination']->value['total'])===null||$tmp==='' ? '0' : $tmp);?>
</strong> Data</li>
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['pagination']->value['data'])===null||$tmp==='' ? '' : $tmp);?>

        </ul>
    </div>
    <div class="clear"></div>
</div>
<table class="table-view" width="100%">
    <tr>
        <th width="5%">No</th>
        <th width="25%">Nama</th>
        <th width="25%">Hak Akses</th>
        <th width="20%">Email</th>
        <th width="10%">Lock Status</th>
        <th width="15%"></th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rs_id']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
    <tr <?php if (($_smarty_tpl->tpl_vars['no']->value%2) == 0) {?>class="blink-row"<?php }?>>
        <td><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
.</td>
        <td><?php echo (($tmp = @mb_strtoupper($_smarty_tpl->tpl_vars['result']->value['operator_name'], 'UTF-8'))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['result']->value['user_name'] : $tmp);?>
</td>
        <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['result']->value['role_nm'], 'UTF-8');?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['user_mail'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['result']->value['lock_st'];?>
</td>
        <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['result']->value['user_id'] != '1') {?>
            <a href="<?php ob_start();
echo ('settings/adminuser/edit/').($_smarty_tpl->tpl_vars['result']->value['user_id']);
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['config']->value->site_url($_prefixVariable1);?>
" class="button-edit">Edit</a>
            <a href="<?php ob_start();
echo ('settings/adminuser/hapus/').($_smarty_tpl->tpl_vars['result']->value['user_id']);
$_prefixVariable2 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['config']->value->site_url($_prefixVariable2);?>
" class="button-hapus">Hapus</a>
            <?php }?>
        </td>
    </tr>
    <?php
}
if ($_smarty_tpl->tpl_vars['result']->do_else) {
?>
    <tr>
        <td colspan="6">Data not found!</td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
