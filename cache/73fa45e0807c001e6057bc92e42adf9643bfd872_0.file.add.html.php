<?php
/* Smarty version 3.1.39, created on 2021-12-14 03:05:27
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\settings\menu\add.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b7fbe7e02e05_57082887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73fa45e0807c001e6057bc92e42adf9643bfd872' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\settings\\menu\\add.html',
      1 => 1639445266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_61b7fbe7e02e05_57082887 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function($) {
        $('.icp-auto').iconpicker();
    });
<?php echo '</script'; ?>
>
<div class="head-content">
    <h3>Navigation - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['portal']->value['portal_nm'])===null||$tmp==='' ? '' : $tmp);?>
</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url(('settings/adminmenu/add/').($_smarty_tpl->tpl_vars['portal']->value['portal_id']));?>
" class="active"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/add-icon.png" alt="" /> Add Menu</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url(('settings/adminmenu/navigation/').($_smarty_tpl->tpl_vars['portal']->value['portal_id']));?>
">List Menu</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminmenu');?>
">Web Portal</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_smarty_tpl->_subTemplateRender("file:base/templates/notification.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- end of notification template-->
<form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('settings/adminmenu/process_add');?>
" method="post" enctype="multipart/form-data">
    <input type="hidden" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['csrf']->value['hash'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <input type="hidden" name="portal_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['portal']->value['portal_id'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Tambah Menu</th>
        </tr>
        <tr>
            <td width="25%">Induk Menu</td>
            <td width="75%">
                <select name="parent_id">
                    <option value="0"></option>
                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['list_parent']->value)===null||$tmp==='' ? '' : $tmp);?>

                </select>
            </td>
        </tr>
        <tr>
            <td>Judul Menu</td>
            <td><input type="text" name="nav_title" maxlength="100" size="50" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_title'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="nav_desc" maxlength="255" size="70" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_desc'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Alamat Menu</td>
            <td><input type="text" name="nav_url" maxlength="255" size="40" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_url'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Urutan</td>
            <td><input type="text" name="nav_no" maxlength="5" size="5" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['nav_no'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Digunakan</td>
            <td>
                <select name="active_st">
                    <option value="1"<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['active_st'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "1") {?>selected="selected"<?php }?>>Ya</option>
                    <option value="0" <?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['active_st'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == "0") {?>selected="selected"<?php }?>>Tidak</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Ditampilkan</td>
            <td>
                <select name="display_st">
                    <option value="1"<?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['display_st'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "1") {?>selected="selected"<?php }?>>Ya</option>
                    <option value="0" <?php ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['result']->value['display_st'])===null||$tmp==='' ? '' : $tmp);
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == "0") {?>selected="selected"<?php }?>>Tidak</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Navigation Icon</td>
            <td colspan="3">
                <input type="text" class="icp-auto" name="nav_icon" />
            </td>
        </tr>
        <tr>
            <td>Warna Icon</td>
            <td colspan="3">
                <input type="text" class="jscolor" name="nav_icon_color" value="777" />
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="save" value="Simpan" class="edit-button" /> </td>
        </tr>
    </table>
</form>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet">
<link href="https://itsjavi.com/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css" rel="stylesheet">

<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-2.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://itsjavi.com/fontawesome-iconpicker/dist/js/fontawesome-iconpicker.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        $('.icp-auto').iconpicker();
    });
<?php echo '</script'; ?>
><?php }
}
