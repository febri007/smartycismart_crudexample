<?php
/* Smarty version 3.1.39, created on 2021-12-14 02:59:59
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\settings\role\access.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b7fa9f8e76e0_95306297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70cce0dd6e4b39b2c2e0392c88b2384a6b5ce31c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\settings\\role\\access.html',
      1 => 1639445266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b7fa9f8e76e0_95306297 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="head-content">
    <h3>Role Permissions</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminpermissions');?>
" class="active">List Data</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<table class="table-view" width="100%">
    <tr>
        <th width="5%">No</th>
        <th width="20%">Web Portal</th>
        <th width="25%">Nama</th>
        <th width="35%">Deskripsi</th>
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
        <td align="center">
            <a href="<?php ob_start();
echo ('settings/adminpermissions/access_update/').($_smarty_tpl->tpl_vars['result']->value['role_id']);
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['config']->value->site_url($_prefixVariable1);?>
" class="button-edit">Permissions</a>
        </td>
    </tr>
    <?php
}
if ($_smarty_tpl->tpl_vars['result']->do_else) {
?>
    <tr>
        <td colspan="5">Empty</td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
