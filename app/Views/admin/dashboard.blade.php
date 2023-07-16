@extends('layout/admin_template')

@section('title', 'Halaman Dashboard')
@section('mainContent')
    
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
                  <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                    <div class="col-sm-12 col-md-6">
                    <div class="dt-buttons btn-group flex-wrap">               <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button">
                    <span>Copy</span>
                  </button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button">
                    <span>CSV</span>
                  </button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
                    <span>Excel</span>
                  </button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button">
                    <span>PDF</span>
                  </button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button">
                    <span>Print</span>
                  </button> <div class="btn-group">
                    <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true">
                    <span>Column visibility</span>
                    <span class="dt-down-arrow">
                    </span>
                  </button>
                  </div> </div>
                </div>
                  <div class="col-sm-12 col-md-6">
                    <div id="example1_filter" class="dataTables_filter">
                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
                  </label>
                  </div>
                </div>
                </div>
                  <div class="row">
                    <div class="col-sm-12">
                    <table class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info" id="example1">
                    <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">NIS</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">NISN</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Nama Lengkap</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Gender</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Agama</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Nomor Telepon</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Status Anak</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Status Data</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Aksi</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-5">
                  <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Last Update</div></div><div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                    <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="example1_previous">
                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                  </li>
                    <li class="paginate_button page-item active">
                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                  </li>
                    <li class="paginate_button page-item next" id="example1_next">
                    <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                  </li>
                  </ul>
                  </div>
                </div>
                </div>
                </div>
                </div>
                <!-- /.card-body -->
              </div>
          </div>
        </div>
      </div>
  </section>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
    $(document).ready(function () {
      $.ajax({
        url: "{{ site_url('dashboard/get_data_ajax') }}",
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
            $('<td>').text(["Angkat", "Kandung"][siswa.status_data]).appendTo(row);
            row.append(`<td>
              <a href="{{ base_url('/dashboard/detail') }}/' + siswa.nis + '" class="btn btn-info btn-sm">
                <i class="fas fa-eye"></i>
              </a>
              <a href="{{ base_url('/dashboard/update') }}/' + siswa.nis + '" class="btn btn-primary btn-sm">
                <i class="fas fa-pencil-alt"></i>
              </a>
              <a onclick="doSoftDelete(\'' + siswa.nis + '\')" class="btn btn-danger btn-sm">
                <i class="fas fa-trash"></i>
              </a>
            </td>`);
            var targetTbody = $('#example1 tbody');
            row.appendTo(targetTbody);
          });
        },
        error: function()
        {
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
        }
      });
    });
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
        window.location.href = "{{ site_url('dashboard') }}";
        },
        error: function(xhr, status, error) {
          alert("Data gagal ditambahkan: " + xhr.status + "\n" + xhr.responseText + "\n" + error);
        }
      });
    }
  </script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
@endsection