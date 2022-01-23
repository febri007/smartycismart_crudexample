<?php
/* Smarty version 3.1.39, created on 2021-12-14 03:04:33
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\settings\role\edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b7fbb1d23291_30046503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '040687420674dd9174dac09eece43ed53f400d08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\settings\\role\\edit.html',
      1 => 1639445266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_61b7fbb1d23291_30046503 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="head-content">
    <h3>Role Management</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="#" class="active">Edit Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminrole/add');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/add-icon.png" alt="" /> Add Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminrole');?>
">List Data</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_smarty_tpl->_subTemplateRender("file:base/templates/notification.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- end of notification template-->
<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminrole/process_update');?>
" method="post">
    <input type="hidden" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['hash'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <input type="hidden" name="role_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['role_id'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Edit Role</th>
        </tr>
        <tr>
            <td width="25%">Web Portal *</td>
            <td width="75%">
                <select name="portal_id">
                    <option value=""></option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rs_id']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['portal_id'];?>
" <?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['portal_id'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == $_smarty_tpl->tpl_vars['data']->value['portal_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['portal_nm'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Role Name *</td>
            <td><input type="text" name="role_nm" maxlength="30" size="50" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['role_nm'])===null||$tmp==='' ? '' : $tmp);?>
" /> </td>
        </tr>
        <tr>
            <td>Role Description *</td>
            <td><input type="text" name="role_desc" maxlength="70" size="100" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['role_desc'])===null||$tmp==='' ? '' : $tmp);?>
" /> </td>
        </tr>
        <tr>
            <td>Default Page *</td>
            <td><input type="text" name="default_page" maxlength="50" size="50" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['default_page'])===null||$tmp==='' ? '' : $tmp);?>
" /> </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="save" value="Simpan" class="edit-button" /> </td>
        </tr>
    </table>
</form>
<?php }
}
