<?php $__env->startSection('title', 'Menambahkan Data'); ?>
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

<section class="content">
    <div class="container-fluid">
    <!-- general form -->
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">General Elements</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form method="post">
            <?= csrf_field() ?>
            <!-- input states -->
            <h4>Isi Data Siswa</h4>
            <div class="form-group">
                <label class="col-form-label" for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter ...">
            </div>
            <!-- inline input -->
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nis">
                        <?php if(isset($error)): ?>
                            <i class="far fa-times-circle"></i>
                        <?php endif; ?>
                        NIS
                    </label>
                    <input type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="nis">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nisn">
                        <?php if(isset($error)): ?>
                            <i class="far fa-times-circle"></i>
                        <?php endif; ?>
                        NISN
                    </label>
                    <input type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="nisn">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nis">
                        <?php if(isset($error)): ?>
                            <i class="far fa-times-circle"></i>
                        <?php endif; ?>
                        agama
                    </label>
                    <input type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="nis">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nisn">
                        <?php if(isset($error)): ?>
                            <i class="far fa-times-circle"></i>
                        <?php endif; ?>
                        nomor telepon
                    </label>
                    <input type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="nisn">
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
                            <input class="form-check-input" type="radio" name="Gender">
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender" checked="">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group">
                        <h5>Status Anak</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_anak">
                            <label class="form-check-label">Masih Pelajar</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_anak" checked="">
                            <label class="form-check-label">Sudah Lulus</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group">
                        <h5>Status Data</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_data">
                            <label class="form-check-label">Aktif</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_data" checked="">
                            <label class="form-check-label">Tidak Aktif</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="nama">Nama Ayah</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter ...">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="nama">Nama Ibu</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter ...">
            </div>

            <h4>Isi Alamat Siswa</h4>

            <div class="row">
            <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                <label>Select</label>
                <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                <label>Select Disabled</label>
                <select class="form-control" disabled="">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                </select>
                </div>
            </div>
            </div>

        </form>
        </div>
        <!-- /.card-body -->
    </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>