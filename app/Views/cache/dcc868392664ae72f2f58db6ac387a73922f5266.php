<?php $__env->startSection('title', 'Mengubah data Data'); ?>
<?php $__env->startSection('mainContent'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Update Data</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Update Data</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content row">

    <form method="post" id="formUpdateData" class="container-fluid col-sm-8">
        <!-- general form -->
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Form Pengisian Data</h3>
            </div>
            <?php if(isset($nis)): ?>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- hidden input -->
                <input type="hidden" name="old_nis" id="old_nis" value="<?php echo e($nis); ?>">
                <?= csrf_field() ?>
                <!-- input states -->
                <h4>Isi Data Siswa (<?php echo e($nis); ?>)</h4>
                <div class="form-group">
                    <label class="col-form-label" for="nama">Nama Lengkap:</label>
                    <input required type="text" class="form-control" name="nama" id="nama" placeholder="Enter ..." value="<?php echo e($data['nama']); ?>">
                </div>
                <!-- inline input -->
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="nis">
                            NIS:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="nis" name="nis" value="<?php echo e($data['nis']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="nisn">
                            NISN:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="nisn" name="nisn" value="<?php echo e($data['nisn']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="agama">
                            Agama:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="agama" name="agama" value="<?php echo e($data['agama']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="no_telp">
                            Nomor Telepon:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="no_telp" name="no_telp" value="<?php echo e($data['no_telp']); ?>">
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
                                <input value="1" class="form-check-input" type="radio" name="gender" id="gender" <?php if($data['gender'] == 1): ?> checked <?php endif; ?>>
                                <label class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input value="0" class="form-check-input" type="radio" name="gender" id="gender" <?php if($data['gender'] == 0): ?> checked <?php endif; ?>>
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- radio -->
                        <div class="form-group">
                            <h5>Status Anak</h5>
                            <div class="form-check">
                                <input value="1" class="form-check-input" type="radio" name="status_anak" id="status_anak" <?php if($data['status_anak'] == 1): ?> checked <?php endif; ?>>
                                <label class="form-check-label">Masih Pelajar</label>
                            </div>
                            <div class="form-check">
                                <input value="0" class="form-check-input" type="radio" name="status_anak" id="status_anak" <?php if($data['status_anak'] == 0): ?> checked <?php endif; ?>>
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
                            <input required type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Enter ..." value="<?php echo e($data['tempat']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-form-label">Tanggal Lahir:</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo e($data['tahun']."-".$data['bulan']."-".$data['hari']); ?>">
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
                                <input value="1" class="form-check-input" type="radio" name="status_data" id="status_data" <?php if($data['status_data'] == 1): ?> checked <?php endif; ?>>
                                <label class="form-check-label">Aktif</label>
                            </div>
                            <div class="form-check">
                                <input value="0" class="form-check-input" type="radio" name="status_data" id="status_data" <?php if($data['status_data'] == 0): ?> checked <?php endif; ?>>
                                <label class="form-check-label">Tidak Aktif</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="nama">Nama Ayah:</label>
                    <input required type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Enter ..." value="<?php echo e($data['nama_ayah']); ?>">
                    <label class="col-form-label" for="nama">Nama Ibu:</label>
                    <input required type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Enter ..." value="<?php echo e($data['nama_ibu']); ?>">
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
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="jalan" name="jalan" value="<?php echo e($data['jalan']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="kecamatan">
                            Kecamatan:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Optional ..." id="kecamatan" name="kecamatan" value="<?php echo e($data['kecamatan']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="kelurahan">
                            Kelurahan:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Optional ..." id="kelurahan" name="kelurahan" value="<?php echo e($data['kelurahan']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="kota">
                            Kota:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="kota" name="kota" value="<?php echo e($data['kota']); ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for="provinsi">
                            Provinsi:
                        </label>
                        <input required type="text" class="form-control <?php if(isset($error)): ?> is-invalid <?php endif; ?>" placeholder="Enter ..." id="provinsi" name="provinsi" value="<?php echo e($data['provinsi']); ?>">
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
                    <table id="data-siswa" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th colspan="2">Nama Lengkap</th>
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
<script type="text/javascript">
$(document).ready(function() {

    // Fungsi ajax untuk mengambil data siswa dan menampilkannya
    $.ajax({
        url: "<?php echo e(site_url('dashboard/get_data_ajax')); ?>",
        dataType: "json",
        success: function(response)
        {
          // Menambahkan data ke dalam tabel
          $.each(response, function(index, siswa) {
            var row = $('<tr>');
            $('<td>').text(siswa.nis).appendTo(row);
            $('<td>').text(siswa.nama).appendTo(row);
            row.append('<td><a href="<?php echo e(base_url('/dashboard/update')); ?>/' + siswa.nis + '" class="btn btn-primary btn-sm">edit</a></td>');
            var targetTbody = $('#data-siswa tbody');
            row.appendTo(targetTbody);
          });
        },
        error: function()
        {
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
        }
    });

    // Fungsi untuk melempar data ke controller
    $('#formUpdateData').submit(function(event) {
        // Mencegah pengiriman formulir secara default
        event.preventDefault();

        // Mendapatkan nilai input dari form
        let old_nis = $('#old_nis').val();
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
            old_nis: old_nis,
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
            url: '<?php echo e(site_url("dashboard/update_data")); ?>',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function(response) {
                alert("Data berhasil diubah");
                window.location.href = "<?php echo e(site_url('dashboard')); ?>";
            },
            error: function(xhr, status, error) {
                alert("Data gagal diubah: " + xhr.status + "\n" + xhr.responseText + "\n" + error);
            }
        });
    });
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/admin_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>