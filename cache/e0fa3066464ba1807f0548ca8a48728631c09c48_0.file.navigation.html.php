<?php
/* Smarty version 3.1.39, created on 2021-12-14 03:05:25
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\settings\menu\navigation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b7fbe548cfc0_21986806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0fa3066464ba1807f0548ca8a48728631c09c48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\settings\\menu\\navigation.html',
      1 => 1639445266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_61b7fbe548cfc0_21986806 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="head-content">
    <h3>Navigation - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['portal']->value['portal_nm'])===null||$tmp==='' ? '' : $tmp);?>
</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url(('settings/adminmenu/add/').($_smarty_tpl->tpl_vars['portal']->value['portal_id']));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
resource/doc/images/icon/add-icon.png" alt="" /> Add Menu</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url(('settings/adminmenu/navigation/').($_smarty_tpl->tpl_vars['portal']->value['portal_id']));?>
" class="active">List Menu</a></li>
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
<table class="table-view" width="100%">
    <tr>
        <th width="5%"></th>
        <th width="28%">Judul Menu</th>
        <th width="20%">Alamat</th>
        <th width="18%">Deskripsi</th>
        <th width="7%">Uses</th>
        <th width="7%">Show</th>
        <th width="15%"></th>
    </tr>
    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['rs_id']->value)===null||$tmp==='' ? '' : $tmp);?>

</table><?php }
}
