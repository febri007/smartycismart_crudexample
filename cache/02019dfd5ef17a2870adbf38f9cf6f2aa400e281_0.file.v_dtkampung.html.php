<?php
/* Smarty version 3.1.39, created on 2022-01-05 08:33:21
  from 'C:\xampp\htdocs\example\cismart.3.1.11\application\views\operator\datakampung\\v_dtkampung.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61d549c1630b99_16336092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02019dfd5ef17a2870adbf38f9cf6f2aa400e281' => 
    array (
      0 => 'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\application\\views\\operator\\datakampung\\\\v_dtkampung.html',
      1 => 1641367999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/templates/notification.html' => 1,
  ),
),false)) {
function content_61d549c1630b99_16336092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\example\\cismart.3.1.11\\system\\plugins\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

  <?php echo '<script'; ?>
 type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
  <title>Now <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%d %B");?>
</title>
  <!--Start of Tawk.to Script-->
  <?php echo '<script'; ?>
 type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
      var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/5fa75fcf0a68960861bcbd80/default';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  <?php echo '</script'; ?>
>
  <!--End of Tawk.to Script-->
</head>

<body>

  <!-- notification -->
  <?php $_smarty_tpl->_subTemplateRender("file:base/templates/notification.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- <?php if ($_smarty_tpl->tpl_vars['notify']->value == 'sukses') {?> -->
  <!-- <div class="alert alert-success alert-dismissable">
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      <p><strong>Berhasil Menambahkan Data</strong>Thanks</p>
      <div class="clear"></div>
  </div> -->
  <!-- <?php } elseif ($_smarty_tpl->tpl_vars['notify']->value == 'false') {?>
  <div class="alert alert-danger alert-dismissable">
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      <p><strong>Proses Gagal! </strong>, Ulangi beberapa saat lagi</p>
      <div class="clear"></div>
  </div>
  <?php }?> -->
  <div class="container mt-n10">
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widget_total']->value, 'ttl');
$_smarty_tpl->tpl_vars['ttl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ttl']->value) {
$_smarty_tpl->tpl_vars['ttl']->do_else = false;
?>
            <h3><?php echo $_smarty_tpl->tpl_vars['ttl']->value->total;?>
</h3>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <p>Total Data</p> -->
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widget_ttl_laki']->value, 'ttl');
$_smarty_tpl->tpl_vars['ttl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ttl']->value) {
$_smarty_tpl->tpl_vars['ttl']->do_else = false;
?>
            <h3><?php echo $_smarty_tpl->tpl_vars['ttl']->value->total;?>
</h3>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <p>Laki-Laki</p> -->
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widget_ttl_cewe']->value, 'ttl');
$_smarty_tpl->tpl_vars['ttl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ttl']->value) {
$_smarty_tpl->tpl_vars['ttl']->do_else = false;
?>
            <h3><?php echo $_smarty_tpl->tpl_vars['ttl']->value->total;?>
</h3>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->

            <p>Perempuan</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>0</h3>

            <p>Data</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <div class="card mb-4">

      <div class="card-header">
        <button id="myBtn" class="btn btn-primary">Tambah Data</button>
        <a class="btn btn-primary" onclick="printData()">Cetak</a>
        <a class="pull-right btn btn-warning btn-large" style="margin-right:40px"
          href="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('operator/kampung/exportexcel');?>
"><i class="fa fa-file-excel-o"></i> Export to
          Excel</a>
      </div>
      <div class="card-body">
        <!-- <p><?php echo smarty_modifier_date_format(time());?>
 ,
          <?php echo smarty_modifier_date_format(time(),$_smarty_tpl->tpl_vars['time']->value['date']);?>
</p> -->
        <div class="datatable">
          <table id="printTable" class="display table table-striped table-bordered data" width="100%" border="1">
            <thead>
              <td>Nama</td>
              <td>JK</td>
              <td>Keterangan</td>
              <td>Foto</td>
              <td>action</td>
            </thead>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rs_id']->value, 'foo');
$_smarty_tpl->tpl_vars['foo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->do_else = false;
?>
            
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['nama'];?>
</td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['foo']->value['jk'] == 'l') {?>
                  Laki Laki
                  <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['jk'] == 'p') {?>
                  Perempuan
                  <?php }?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['keterangan'];?>
</td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value->base_url('resource/doc/');
echo $_smarty_tpl->tpl_vars['foo']->value['foto'];?>
" class="img-fluid mb-2"
                    alt="white sample" />
                </td>
                <td>
                  <a data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" data-nama="<?php echo $_smarty_tpl->tpl_vars['foo']->value['nama'];?>
" data-jk="<?php echo $_smarty_tpl->tpl_vars['foo']->value['jk'];?>
"
                    data-ket="<?php echo $_smarty_tpl->tpl_vars['foo']->value['keterangan'];?>
" title="Add this item" class="itemubah btn btn-primary btn-sm"
                    href="#itemubah">Ubah</i></a>
                  <a data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" data-nama="<?php echo $_smarty_tpl->tpl_vars['foo']->value['nama'];?>
" title="Add this item"
                    class="itemhapus btn btn-danger btn-sm" href="#itemhapus">Hapus</i></a>
                </td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- The Modal -->
  <div id="myModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('operator/kampung/process_add');?>
" name="form_tambah" method="post"
            enctype="multipart/form-data">
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Input Nama" name="txt_nama" id="txt_nama"
                autofocus="" autocomplete="off" maxlength="300" required="" />
              <div class="input-group-append">
              </div>
            </div>
            <div class="input-group mb-3">
              <select id="txt_jk" name="txt_jk" class="form-control">
                <option value="l" class="form-control">Laki-Laki</option>
                <option value="p" class="form-control">Perempuan</option>
              </select>
            </div>
            <div class="input-group mb-3">
              <textarea id="txt_keterangan" name="txt_keterangan" rows="4" cols="50" class="form-control"
                placeholder="Keterangan" required>
                            </textarea>
            </div>
            <div class="input-group mb-3">
              <input type="file" name="upload_file" id="upload_file">

            </div>

        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
          <input type="submit" value="Tambah" class="btn btn-info ">

        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ModalUbah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Ubah Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">X</span></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('operator/kampung/process_update');?>
" method="POST">
            <!-- Form Group (username)-->
            <div class="form-group">
              <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
">
              <label class="small mb-1" for="">Nama Barang</label>
              <input class="form-control" id="id1" name="id1" type="hidden" value="" />
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Input Nama" name="nama1" id="nama1" autofocus=""
                  autocomplete="off" maxlength="300" required="" />
                <div class="input-group-append">
                </div>
              </div>
              <label class="small mb-1" for="">JK</label>
              <div class="input-group mb-3">
                <select id="jk1" name="jk1" class="form-control">
                  <option value="l" class="form-control">Laki-Laki</option>
                  <option value="p" class="form-control">Perempuan</option>
                </select>
              </div>
              <label class="small mb-1" for="">Keterangan</label>
              <div class="input-group mb-3">
                <textarea id="txt_keterangan" id="ket1" name="ket1" rows="4" cols="50" class="form-control"
                  placeholder="Keterangan">
                                    </textarea>
              </div>
            </div>
            <input type="submit" class="btn btn-info btn-block" value="Update" class="btn btn-info ">
            <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Tutup</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">X</span></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value->site_url('operator/kampung/process_hapus');?>
" method="POST">
            <!-- Form Group (username)-->
            <div class="form-group">
              <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf']->value['hash'];?>
">
              <label class="small mb-1" for="">Yakin akan Menghapus : </label>
              <input class="form-control" id="id1" name="id1" type="hidden" value="" />
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Input Nama" name="nama1" id="nama1" autofocus=""
                  autocomplete="off" maxlength="300" required="" readonly />
                <div class="input-group-append">
                </div>
              </div>

              <input type="submit" class="btn btn-info btn-block" value="Hapus" class="btn btn-info ">
              <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Tutup</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
<!-- <?php echo '<script'; ?>
>
  $(function () {
    $(".data").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
<?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
>
  function validateForm() {
    let x = document.forms["form_tambah"]["txt_keterangan"].value;
    if (x == "") {
      alert("Nama Harus Disi");
      return false;
    }
  }

  function printData() {
    var divToPrint = document.getElementById("printTable");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
  }
  // $(document).ready(function () {
  //   $('.data').DataTable();
  // });
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function () {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  $(document).on("click", ".itemubah", function () {
    var id = $(this).data('id');
    var nama = $(this).data('nama');
    var jk = $(this).data('jk');
    var ket = $(this).data('ket');
    $('#ModalUbah').modal('show');
    $('[name="id1"]').val(id);
    $('[name="nama1"]').val(nama);
    $('[name="jk1"]').val(jk);
    $('[name="ket1"]').val(ket);

  });

  $(document).on("click", ".itemhapus", function () {
    var id = $(this).data('id');
    var nama = $(this).data('nama');
    $('#ModalHapus').modal('show');
    $('[name="id1"]').val(id);
    $('[name="nama1"]').val(nama);

  });
    // function prosesubah() {
    //     let form = $('#form_ubah')[0];
    //     let isi_form = new FormData(form);
    //     $.ajax({
    //         url: '',
    //         method: "POST",
    //         data: isi_form,
    //         dataType: "json",
    //         enctype: 'multipart/form-data',
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         success: (respon) => {
    //             console.log(respon);
    //             if (respon.status) {
    //                 alert("Berhasil Mengubah");
    //                 location.reload();
    //             } else {
    //                 $('#notif').html('<div class="alert alert-danger" role="alert"> Proses Gagal</div>')
    //             }
    //         }

    //     })
    // }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
  $(document).ready(function () {
      $('.select2').select2({
          allowClear: true
      });

      $('.input-append').datepicker({
          format: "yyyy",
          viewMode: "years",
          minViewMode: "years",
          autoclose: true,
          todayHighlight: true
      });
  });
<?php echo '</script'; ?>
>

</html><?php }
}
