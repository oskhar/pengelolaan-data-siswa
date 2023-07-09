<?php $__env->startSection('title', 'Halaman Dashboard'); ?>
<?php $__env->startSection('mainContent'); ?>
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
<section class="content row">
    <div class="container-fluid col-sm-8 justify-content-center">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="dist/img/user6-128x128.jpg" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center"><?php echo e($data_siswa['nama']); ?></h3>

                    <p class="text-muted text-center">NIS <?php echo e($data_siswa['nis']); ?></p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>NISN:</b> <span class="float-right"><?php echo e($data_siswa['nisn']); ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Gender:</b> <span class="float-right"><?php echo e(["Perempuan", "Laki Laki"][$data_siswa['gender']]); ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Agama:</b> <span class="float-right"><?php echo e($data_siswa['agama']); ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Nomor Telepon:</b> <span class="float-right"><?php echo e($data_siswa['no_telp']); ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Nama Ayah:</b> <span class="float-right"><?php echo e($data_siswa['nama_ayah']); ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Nama Ibu:</b> <span class="float-right"><?php echo e($data_siswa['nama_ibu']); ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Domisilih Jalan:</b> <span class="float-right"><?php echo e($data_alamat['jalan']); ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Domisilih Detail:</b> <span class="float-right"><?php echo e($data_alamat['kecamatan']); ?>, <?php echo e($data_alamat['kelurahan']); ?>, <?php echo e($data_alamat['kota']); ?>, <?php echo e($data_alamat['provinsi']); ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Tempat Lahir:</b> <span class="float-right"><?php echo e($data_kelahiran['tempat']); ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>Tanggal Lahir:</b> <span class="float-right"><?php echo e($data_kelahiran['hari']); ?> <?php echo e($data_kelahiran['bulan']); ?> <?php echo e($data_kelahiran['tahun']); ?></span>
                        </li>
                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><b>Update Data</b></a>
                </div>
                <!-- /.card-body -->
        </div>
    </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>