<?php
/* Smarty version 3.1.39, created on 2021-12-14 03:00:43
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\settings\portal\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b7facb174831_17641843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a4621c279a70a60b3c14d33dd5bc19acd58316e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\settings\\portal\\add.html',
      1 => 1639445266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_61b7facb174831_17641843 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="head-content">
    <h3>Web Portal</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminportal/add');?>
" class="active"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/add-icon.png" alt="" /> Add Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminportal');?>
">List Data</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_smarty_tpl->_subTemplateRender("file:base/templates/notification.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- end of notification template-->
<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminportal/process_add');?>
" method="post">
    <input type="hidden" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['hash'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Tambah Web Portal</th>
        </tr>
        <tr>
            <td width="25%">Nama Portal *</td>
            <td width="75%"><input type="text" name="portal_nm" maxlength="30" size="50" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['portal_nm'])===null||$tmp==='' ? '' : $tmp);?>
" /> </td>
        </tr>
        <tr>
            <td>Judul Web *</td>
            <td><input type="text" name="site_title" maxlength="40" size="50" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['site_title'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Deskripsi Web *</td>
            <td><input type="text" name="site_desc" maxlength="70" size="100" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['site_desc'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Meta Description *</td>
            <td><input type="text" name="meta_desc" maxlength="70" size="100" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['meta_desc'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Meta Keyword *</td>
            <td><input type="text" name="meta_keyword" maxlength="70" size="100" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['meta_keyword'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="save" value="Simpan" class="edit-button" /> </td>
        </tr>
    </table>
</form>
<?php }
}
