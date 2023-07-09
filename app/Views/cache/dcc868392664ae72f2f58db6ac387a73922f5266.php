<?php $__env->startSection('title', 'Mengubah data Data'); ?>
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

    <form method="post" id="formIsiData" class="container-fluid col-sm-8">
        <!-- general form -->
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">General Elements</h3>
            </div>
            <?php if(isset($nis)): ?>
            <!-- /.card-header -->
            <div class="card-body">
                <?= csrf_field() ?>
                <!-- input states -->
                <h4>Isi Data Siswa</h4>
                <div class="form-group">
                    <label class="col-form-label" for="nama">Nama Lengkap:</label>
                    <input required type="text" class="form-control" name="nama" id="nama" placeholder="Enter ...">
                </div>
                <!-- inline input -->
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="nis">
                            NIS:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="nis" name="nis">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="nisn">
                            NISN:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="nisn" name="nisn">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="agama">
                            Agama:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="agama" name="agama">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="no_telp">
                            Nomor Telepon:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="no_telp" name="no_telp">
                        </div>
                    </div>
                </div>
                <!-- inline input -->
                <div class="row">
                    <div class="col-sm-6">
                        <!-- radio -->
                        <div class="form-group">
                            <h5>Gender</h5>
                            <div class="form-check">
                                <input value="1" class="form-check-input" type="radio" name="gender" id="gender" checked>
                                <label class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input value="0" class="form-check-input" type="radio" name="gender" id="gender">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- radio -->
                        <div class="form-group">
                            <h5>Status Anak</h5>
                            <div class="form-check">
                                <input value="1" class="form-check-input" type="radio" name="status_anak" id="status_anak" checked>
                                <label class="form-check-label">Masih Pelajar</label>
                            </div>
                            <div class="form-check">
                                <input value="0" class="form-check-input" type="radio" name="status_anak" id="status_anak">
                                <label class="form-check-label">Sudah Lulus</label>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Isi Data Kelahiran Siswa</h4>
                <!-- inline input -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label" for="tempat_lahir">Tempat Lahir:</label>
                            <input required type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Tanggal Lahir:</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- inline input -->
                <div class="row">
                    <div class="col-sm-6">
                        <!-- radio -->
                        <div class="form-group">
                            <h5>Status Data</h5>
                            <div class="form-check">
                                <input value="1" class="form-check-input" type="radio" name="status_data" id="status_data" checked>
                                <label class="form-check-label">Aktif</label>
                            </div>
                            <div class="form-check">
                                <input value="0" class="form-check-input" type="radio" name="status_data" id="status_data">
                                <label class="form-check-label">Tidak Aktif</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="nama">Nama Ayah:</label>
                    <input required type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Enter ...">
                    <label class="col-form-label" for="nama">Nama Ibu:</label>
                    <input required type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Enter ...">
                </div>
                <h4>Isi Alamat Siswa</h4>
                <!-- inline input -->
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="jalan">
                            Jalan:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="jalan" name="jalan">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="kecamatan">
                            Kecamatan:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Optional ..." id="kecamatan" name="kecamatan">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="kelurahan">
                            Kelurahan:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Optional ..." id="kelurahan" name="kelurahan">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="kota">
                            Kota:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="kota" name="kota">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="provinsi">
                            Provinsi:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="provinsi" name="provinsi">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?php else: ?>
             <h3 class="text-center mt-5 mb-5">Pilih data yang ingin anda edit...</h3>
            <?php endif; ?>
        </div>
        <!-- /.card-body -->
    </form>
    <div class="container-fluid col-sm-4">
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

<section class="content">
</section>
<script>
    $(function () {
        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>