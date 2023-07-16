@extends('layout/admin_template')

@section('title', 'Menambahkan Data')
@section('mainContent')
<!-- daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Create Data</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Create Data</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content row">
    <form method="post" id="formIsiData" class="container-fluid col-sm-10 justify-content-center">
    <?= csrf_field() ?>
    <!-- general form -->
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Form Pengisian Data</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- input states -->
            <h4>Isi Data Siswa</h4>
            <div class="form-group">
                <label class="col-form-label" for="nama">Nama Lengkap:</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter ...">
            </div>
            <!-- inline input -->
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nis">
                        NIS:
                    </label>
                    <input type="number" class="form-control" placeholder="Enter ..." id="nis" name="nis">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="nisn">
                        NISN:
                    </label>
                    <input type="number" class="form-control" placeholder="Enter ..." id="nisn" name="nisn">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="agama" id="agama">
                            <option value="Islam" selected="selected">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="no_telp">
                        Nomor Telepon (+62):
                    </label>
                    <input type="number" class="form-control" placeholder="Enter ..." id="no_telp" name="no_telp">
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
                            <label class="form-check-label">Kandung</label>
                        </div>
                        <div class="form-check">
                            <input value="0" class="form-check-input" type="radio" name="status_anak" id="status_anak">
                            <label class="form-check-label">Angkat</label>
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
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label">Tanggal Lahir:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" max="{{ date('Y-m-d') }}">
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
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Enter ...">
                <label class="col-form-label" for="nama">Nama Ibu:</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Enter ...">
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
                    <input type="text" class="form-control" placeholder="Enter ..." id="jalan" name="jalan">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="kecamatan">
                        Kecamatan:
                    </label>
                    <input type="text" class="form-control" placeholder="Optional ..." id="kecamatan" name="kecamatan">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="kelurahan">
                        Kelurahan:
                    </label>
                    <input type="text" class="form-control" placeholder="Optional ..." id="kelurahan" name="kelurahan">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="kota">
                        Kota:
                    </label>
                    <input type="text" class="form-control" placeholder="Enter ..." id="kota" name="kota">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                    <label for="provinsi">
                        Provinsi:
                    </label>
                    <input type="text" class="form-control" placeholder="Enter ..." id="provinsi" name="provinsi">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- /.card-body -->
    </div>
    </form>
</section>
  
<script type="text/javascript">
$(document).ready(function() {
  $('#formIsiData').submit(function(event) {
    // Mencegah pengiriman formulir secara default
    event.preventDefault();

    // Mendapatkan nilai input dari form
    let nama = $('#nama').val();
    let nis = $('#nis').val();
    let nisn = $('#nisn').val();
    let agama = $('#agama').val();
    let no_telp = $('#no_telp').val();
    let gender = $('input[name="gender"]:checked').val();
    let status_anak = $('input[name="status_anak"]:checked').val();
    let status_data = $('input[name="status_data"]:checked').val();
    let tempat_lahir = $('#tempat_lahir').val();
    let tanggal_lahir = $('#tanggal_lahir').val();
    let nama_ayah = $('#nama_ayah').val();
    let nama_ibu = $('#nama_ibu').val();
    let jalan = $('#jalan').val();
    let kecamatan = $('#kecamatan').val();
    let kelurahan = $('#kelurahan').val();
    let kota = $('#kota').val();
    let provinsi = $('#provinsi').val();

    // Memisahkan bagian bagian pada tanggal
    let split_tanggal = tanggal_lahir.split("-");
    let hari = split_tanggal[2];
    let bulan = split_tanggal[1];
    let tahun = split_tanggal[0]; 

    // Membuat objek data yang akan dikirimkan melalui AJAX
    let data = {
        nama: nama,
        nis: nis,
        nisn: nisn,
        agama: agama,
        no_telp: no_telp,
        gender: gender,
        status_anak: status_anak,
        status_data: status_data,
        tempat_lahir: tempat_lahir,
        hari: hari,
        bulan: bulan,
        tahun: tahun,
        nama_ayah: nama_ayah,
        nama_ibu: nama_ibu,
        jalan: jalan,
        kecamatan: kecamatan,
        kelurahan: kelurahan,
        kota: kota,
        provinsi: provinsi
    };

    // Kirim data ke controller menggunakan AJAX
    $.ajax({
      url: '{{ site_url("dashboard/create_data") }}',
      type: 'POST',
      data: data,
      dataType: 'json',
      success: function(response) {
        alert("Data berhasil ditambahkan");
        window.location.href = "{{ site_url('dashboard') }}";
      },
      error: function(response) {
        alert("Data gagal ditambahkan: " + response.message);
      }
    });
  });
});

</script>
@endsection