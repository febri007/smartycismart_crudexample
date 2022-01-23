<?php
/* Smarty version 3.1.39, created on 2021-12-14 02:59:54
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\settings\role\list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b7fa9ac1cea4_88449397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2a4d03e9ef27ce5ae901a6c875b31ae84050bce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\settings\\role\\list.html',
      1 => 1639445266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_61b7fa9ac1cea4_88449397 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="head-content">
    <h3>Role Management</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminrole/add');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/add-icon.png" alt="" /> Add Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminrole');?>
" class="active">List Data</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_smarty_tpl->_subTemplateRender("file:base/templates/notification.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- end of notification template-->
<table class="table-view" width="100%">
    <tr>
        <th width="5%">No</th>
        <th width="15%">Web Portal</th>
        <th width="20%">Role Name</th>
        <th width="25%">Role Description</th>
        <th width="20%">Default Page</th>
        <th width="15%"></th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rs_id']->value, 'result', false, 'no');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['no']->value => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
    <tr <?php if (($_smarty_tpl->tpl_vars['no']->value%2) <> 0) {?>class="blink-row"<?php }?>>
        <td><?php echo $_smarty_tpl->tpl_vars['no']->value+1;?>
.</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['portal_nm'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['role_nm'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['role_desc'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['default_page'];?>
</td>
        <td align="center">
            <a href="<?php ob_start();
echo ('settings/adminrole/edit/').($_smarty_tpl->tpl_vars['result']->value['role_id']);
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['config']->value->site_url($_prefixVariable1);?>
" class="button-edit">Edit</a>
            <a href="<?php ob_start();
echo ('settings/adminrole/hapus/').($_smarty_tpl->tpl_vars['result']->value['role_id']);
$_prefixVariable2 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['config']->value->site_url($_prefixVariable2);?>
" class="button-hapus">Hapus</a>
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
</table><?php }
}
