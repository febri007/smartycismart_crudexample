<?php
/* Smarty version 3.1.39, created on 2021-12-14 07:46:26
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\operator\welcome\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b83dc23a03f2_70828380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c023d6550e4f2fc1b08f8d34d1058a471d2dc972' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\operator\\welcome\\index.php',
      1 => 1639464384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b83dc23a03f2_70828380 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <span>Daftar karyawan</span>
    
    <table border="1" width="100%"> 
        <thead>
            <td>name</td>
            <td>action</td>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'foo');
$_smarty_tpl->tpl_vars['foo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->name;?>
</td>
                <td></td>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
            </tr>
        </tbody>
    </table>
    <div>
        <span>tambah data</span>
        <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('operator/welcome/add');?>
" method="post">
		<table style="margin:20px auto;">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
">  
			<tr>
				<td>Nama</td>
				<td><input type="text" name="inp_nama" id="inp_nama"></td>
			</tr>
            <tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
			
		</table>
	</form>	
    </div>
    
 
  <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('operator/welcome/process_upload');?>
" method="post" enctype="multipart/form-data">
  <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
">   
  <table class="table-input" width="100%">
          <tr>
              <th>Upload File</th>
          </tr>
          <tr>
              <td>Browse File</td>
              <td><input type="file" name="upload_file"></td>
          </tr>
          <tr>
              <td></td>
              <td>
                  <input type="submit" name="simpan" value="upload" class="edit-button">
              </td>
          </tr>
      </table>
  </form>
</body>
</html><?php }
}
