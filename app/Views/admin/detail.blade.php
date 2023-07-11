@extends('layout/admin_template')

@section('title', 'Halaman Dashboard')
@section('mainContent')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Detail Data</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Read Data</li>
          <li class="breadcrumb-item active">Detail Data</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content row">
    <div class="container-fluid col-sm-8 justify-content-center">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Pengisian Data</h3>
                </div>
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="dist/img/user6-128x128.jpg" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{ $data_siswa['nama'] }}</h3>

                    <p class="text-muted text-center">NIS {{ $data_siswa['nis'] }}</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>NISN:</b> <span class="float-right">{{ $data_siswa['nisn'] }}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Gender:</b> <span class="float-right">{{ ["Perempuan", "Laki Laki"][$data_siswa['gender']] }}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Agama:</b> <span class="float-right">{{ $data_siswa['agama'] }}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Nomor Telepon:</b> <span class="float-right">{{ $data_siswa['no_telp'] }}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Nama Ayah:</b> <span class="float-right">{{ $data_siswa['nama_ayah'] }}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Nama Ibu:</b> <span class="float-right">{{ $data_siswa['nama_ibu'] }}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Domisilih Jalan:</b> <span class="float-right">{{ $data_alamat['jalan'] }}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Domisilih Detail:</b> <span class="float-right">{{ $data_alamat['kecamatan'] }}, {{ $data_alamat['kelurahan'] }}, {{ $data_alamat['kota'] }}, {{ $data_alamat['provinsi'] }}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Tempat Lahir:</b> <span class="float-right">{{ $data_kelahiran['tempat'] }}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Tanggal Lahir:</b> <span class="float-right">{{ $data_kelahiran['hari'] }} {{ $bulan[(int)$data_kelahiran['bulan']] }} {{ $data_kelahiran['tahun'] }}</span>
                        </li>
                    </ul>

                    @if ($data_trash)
                        <a href="{{ base_url("/dashboard/update/") }}{{ $data_siswa['nis'] }}/1" class="btn btn-primary btn-block"><b>Recover & Update Data</b></a>
                        <a onclick="doRecoverData('{{ $data_siswa['nis'] }}')" class="btn btn-success btn-block"><b>Recover Data</b></a>
                    @else
                        <a href="{{ base_url("/dashboard/update/") }}{{ $data_siswa['nis'] }}" class="btn btn-primary btn-block"><b>Update Data</b></a>
                        <a onclick="doSoftDelete('{{ $data_siswa['nis'] }}')" class="btn btn-danger btn-block"><b>Delete Data</b></a>
                    @endif
                </div>
                <!-- /.card-body -->
        </div>
    </div>
    </div>
</section>
<script>
    // Untuk menghapus data secara lembut (softdelete)
    function doSoftDelete(nis) {
        // Membuat data dictionary
        let data = {nis: nis};

        // Kirim data ke controller menggunakan AJAX
        $.ajax({
            url: '{{ site_url("dashboard/soft_delete") }}',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(response) {
            alert("Data berhasil dihapus");
            window.location.href = "{{ site_url('dashboard/detail') }}/{{ $data_siswa['nis'] }}";
            },
            error: function(xhr, status, error) {
            alert("Data gagal dihapus: " + xhr.status + "\n" + xhr.responseText + "\n" + error);
            }
        });
    }
    // Untuk memulihkan data yang sudah dihapus
    function doRecoverData(nis) {
        // Membuat data dictionary
        let data = {nis: nis};

        // Kirim data ke controller menggunakan AJAX
        $.ajax({
            url: '{{ site_url("dashboard/recover_data") }}',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(response) {
            alert("Data berhasil dipulihkan");
            window.location.href = "{{ site_url('dashboard/detail') }}/{{ $data_siswa['nis'] }}";
            },
            error: function(xhr, status, error) {
            alert("Data gagal dipulihkan: " + xhr.status + "\n" + xhr.responseText + "\n" + error);
            }
        });
    }
</script>
@endsection