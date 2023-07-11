<?php $__env->startSection('title', 'Halaman Trash'); ?>
<?php $__env->startSection('mainContent'); ?>
    
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Read Data</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Tabel data siswa</h3>
                  </div>
                  <div class="card-header">
                    <div class="col-sm-12 col-md-6">
                      <form method="post" id="example1_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
                        </label>
                      </form>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body view-data">
                    <table class="table table-bordered table-striped" id="data-siswa">
                      <thead>
                          <tr>
                              <th>NIS</th>
                              <th>NISN</th>
                              <th>Nama Lengkap</th>
                              <th>Gender</th>
                              <th>Agama</th>
                              <th>Nomor Telepon</th>
                              <th>Status Anak</th>
                              <th>Status Data</th>
                              <th colspan="2">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
        </div>
      </div>
  </section>
  <script>
    $(document).ready(function () {
      $.ajax({
        url: "<?php echo e(site_url('dashboard/get_deleted_data_ajax')); ?>",
        dataType: "json",
        success: function(response)
        {
          // Menambahkan data ke dalam tabel
          $.each(response, function(index, siswa) {
            var row = $('<tr>');
            $('<td>').text(siswa.nis).appendTo(row);
            $('<td>').text(siswa.nisn).appendTo(row);
            $('<td>').text(siswa.nama).appendTo(row);
            $('<td>').text(["Perempuan", "Laki Laki"][siswa.gender]).appendTo(row);
            $('<td>').text(siswa.agama).appendTo(row);
            $('<td>').text(siswa.no_telp).appendTo(row);
            $('<td>').text(["Lulus", "Pelajar"][siswa.status_anak]).appendTo(row);
            $('<td>').text(["Tidak Aktif", "Aktif"][siswa.status_data]).appendTo(row);
            row.append('<td><a href="<?php echo e(base_url('/dashboard/detail')); ?>/' + siswa.nis + '" class="btn btn-primary btn-sm">detail</a></td>');
            row.append('<td><a onclick="doRecoverData(\'' + siswa.nis + '\')" class="btn btn-success btn-sm">recover</a></td>');
            var targetTbody = $('#data-siswa tbody');
            row.appendTo(targetTbody);
          });
        },
        error: function(xhr, status, error)
        {
          alert(xhr.status + "\n" + xhr.responseText + "\n" + error);
        }
      });
    });
    // Lakukan pemulihan data yang sudah dihapus
    function doRecoverData(nis) {
        // Membuat data dictionary
        let data = {nis: nis};

        // Kirim data ke controller menggunakan AJAX
        $.ajax({
            url: '<?php echo e(site_url("dashboard/recover_data")); ?>',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(response) {
            alert("Data berhasil dipulihkan");
            window.location.href = "<?php echo e(site_url('dashboard/trash')); ?>";
            },
            error: function(xhr, status, error) {
            alert("Data gagal dipulihkan: " + xhr.status + "\n" + xhr.responseText + "\n" + error);
            }
        });
    }
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>