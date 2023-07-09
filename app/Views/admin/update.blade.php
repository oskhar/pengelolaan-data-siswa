@extends('layout/admin_template')

@section('title', 'Mengubah data Data')
@section('mainContent')

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

    <div class="container-fluid col-sm-8">
    <!-- general form -->
    <div class="card card-success">
        <div class="card-header">
        <h3 class="card-title">General Elements</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form method="post" action="">
            <?= csrf_field() ?>
            <!-- input states -->
            <h4>Isi Data Siswa</h4>
            <div class="form-group">
                <label class="col-form-label" for="nama">Nama Lengkap:</label>
                <input required type="text" class="form-control" id="nama" placeholder="Enter ...">
            </div>
            <!-- inline input -->
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nis">
                        @isset($error)<i class="far fa-times-circle"></i>@endisset
                        NIS:
                    </label>
                    <input required type="text" class="form-control @isset($error) is-invalid @endisset" placeholder="Enter ..." id="nis">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nisn">
                        @isset($error)<i class="far fa-times-circle"></i>@endisset
                        NISN:
                    </label>
                    <input required type="text" class="form-control @isset($error) is-invalid @endisset" placeholder="Enter ..." id="nisn">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="agama">
                        @isset($error)<i class="far fa-times-circle"></i>@endisset
                        agama:
                    </label>
                    <input required type="text" class="form-control @isset($error) is-invalid @endisset" placeholder="Enter ..." id="agama" name="agama">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nisn">
                        @isset($error)<i class="far fa-times-circle"></i>@endisset
                        nomor telepon:
                    </label>
                    <input required type="text" class="form-control @isset($error) is-invalid @endisset" placeholder="Enter ..." id="nisn">
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
                            <input class="form-check-input" type="radio" name="Gender" checked>
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group">
                        <h5>Status Anak</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_anak" checked>
                            <label class="form-check-label">Masih Pelajar</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_anak">
                            <label class="form-check-label">Sudah Lulus</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- inline input -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label" for="nama">Tempat Lahir:</label>
                        <input required type="text" class="form-control" id="nama" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-form-label">Tanggal Lahir:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
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
                            <input class="form-check-input" type="radio" name="status_data" checked>
                            <label class="form-check-label">Aktif</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status_data">
                            <label class="form-check-label">Tidak Aktif</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="nama">Nama Ayah:</label>
                <input required type="text" class="form-control" id="nama" placeholder="Enter ...">
                <label class="col-form-label" for="nama">Nama Ibu:</label>
                <input required type="text" class="form-control" id="nama" placeholder="Enter ...">
            </div>
            <h4>Isi Alamat Siswa</h4>
        </form>
        </div>
        <!-- /.card-body -->
    </div>
    </div>
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
@endsection