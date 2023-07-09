<?php $__env->startSection('title', 'Halaman Dashboard'); ?>
<?php $__env->startSection('mainContent'); ?>
    
    <link rel="stylesheet" href="adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>NISN</th>
                                <th>Nama Lengkap</th>
                                <th>Gender</th>
                                <th>Agama</th>
                                <th>Nomor Telepon</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Status Anak</th>
                                <th>Status Data</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabel data siswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Jalan</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabel data siswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Tempat Lahir</th>
                                <th>Hari Lahir</th>
                                <th>Bulan Lahir</th>
                                <th>Tahun Lahir</th>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>