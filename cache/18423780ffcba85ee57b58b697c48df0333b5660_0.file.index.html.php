<?php
/* Smarty version 3.1.39, created on 2021-12-22 08:13:05
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\operator\welcome\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61c27ba1592af9_73470025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18423780ffcba85ee57b58b697c48df0333b5660' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\operator\\welcome\\index.html',
      1 => 1640095004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c27ba1592af9_73470025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\system\\plugins\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),1=>array('file'=>'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\system\\plugins\\smarty\\libs\\plugins\\function.html_select_time.php','function'=>'smarty_function_html_select_time',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php echo '<script'; ?>
 type="text/javascript" src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-aUK68XbLUOG9d6zG">
    <?php echo '</script'; ?>
>
</head>
<body>
    <span>Daftar karyawan</span>
    <a onclick="printData()" class="btn btn-info ">Cetak</a>
    <form id="form_tambah">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
"> 
        <!-- <button class="btnpay btn-info btn-xl" id="pay-button"><i class="fas fa-credit-card"></i>&nbsp; Test API</button> -->
        <button type="button" onclick="prosestambah();" class="btn btn-primary btn-block">Test API</button>
    </form>
    

    <table border="1"  id="printTable" class="table table-striped table-bordered" width="100%"> 
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
                <td> <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('operator/welcome/delete');?>
"  method="post">
                       
                    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
"> 
                   
                        <input type="hidden" name="nama_delete" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->name;?>
"> 
                         
                        <input type="submit" value="Hapus" class="btn btn-info "></td>
                    </form>	
                </td>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
            </tr>
        </tbody>
    </table>

    <div class="box box-solid box-info">
        <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('operator/welcome/add');?>
" method="post">
            <table style="margin:20px auto;">
                <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
">
                <tr>
                    <td>
                        Nama</td>
                    <td><input type="text" name="inp_nama" id="inp_nama"></td>
                </tr>
                <tr>
                    <td><?php echo smarty_function_html_select_date(array(),$_smarty_tpl);?>
</td>
                    <td><?php echo smarty_function_html_select_time(array('use_24_hours'=>true),$_smarty_tpl);?>

                    </td>
                    <td>
    
                        <input type="submit" value="Tambah" class="btn btn-info ">
                    </td>
                </tr>
    
            </table>
        </form>
    
    <div class="box box-solid box-info">
        <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('operator/welcome/update');?>
" method="post">
		<table style="margin:20px auto;">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
">  
			<tr>
			</tr>
            <tr>
				<td>
                    <span>Update data</span>
                    
                    <select name="update_from">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'foo');
$_smarty_tpl->tpl_vars['foo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value->name;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <td> to <input type="text" name="upd_nama" id="upd_nama"></td></td>
				<td><input type="submit" value="Update"  class="btn btn-info "></td>
			</tr>
			
		</table>
	</form>	
    
    <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('operator/welcome/delete');?>
" method="post">
	    <table style="margin:20px auto;">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
">  
			<tr>
				<td>Nama</td>
			</tr>
            <tr>
				<td>
                    <span>Delete data</span>
                    
                    <select name="nama_delete">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'foo');
$_smarty_tpl->tpl_vars['foo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value->name;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                   
				<td><input type="submit" value="Delete" class="btn btn-info"></td>
			</tr>
			
		</table>
	</form>	
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
                    <td><input type="file" name="upload_file" id="upload_file"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="simpan" value="upload" class="edit-button">
                    </td>
                </tr>
            </table>
        </form>

        <!-- smarty belajar -->
        <form id="form1" name="form1" onsubmit="return false">
            <label>Pilih Kategori: </label>
            <select id="kategori" name="kategori" onchange="tampilkan()">
              <option value="makanan">makanan</option>
              <option value="minuman">minuman</option>
            </select>
            <br/><br/>
             <label>Pilih Sub Kategori: </label> <select id="tampil" name="tampil">
            </select>
          </form>
    
 
  
</body>
<?php echo '<script'; ?>
>
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
$(document).ready(function() {
$('.btnpay').click(function(event) {

event.preventDefault();
// var order_id = $(this).attr('value');
// var harga = $(this).attr('data-harga');
let form = $('#form_tambah')[0];
let isi_form = new FormData(form);
$.ajax({
    url: "<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('operator/welcome/token/');?>
",
    data: {
       isi_form
    },
    method: "POST",
    cache: false,

    success: function(data) {
        snap.pay(data, {

            onSuccess: function(result) {
                // alert("transaksi sukses");
                location.reload();
            },
            onPending: function(result) {
                // alert("pending");
                location.reload();
            },
            onError: function(result) {
                // alert("error");
                location.reload();
            },
            onClose: function(result) {
                alert("Anda Menutup Pembayaran");
                location.reload();
            }
        });
    }
});
});

});

function prosestambah() {
        let form = $('#form_tambah')[0];
        let isi_form = new FormData(form);
        $.ajax({
            url: "<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('operator/welcome/token/');?>
",
            method: "POST",
            data: isi_form,
            dataType: "json",
            enctype: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            success: (respon) => {
                console.log(respon);
                if (respon.status) {
                
                } else {
                    
                }
            }

        })
    }
function tampilkan(){
  var makanan=document.getElementById("form1").kategori.value;
  if (makanan=="makanan")
    {
        document.getElementById("tampil").innerHTML="<option value='Nasi Goreng'>Nasi Goreng</option><option value='Bakso'>Bakso</option>";
    }
  else if (makanan=="minuman")
    {
        document.getElementById("tampil").innerHTML="<option value='Teh'>Teh</option><option value='Copy'>Copy</option>";
    }
}
<?php echo '</script'; ?>
>

</html><?php }
}
