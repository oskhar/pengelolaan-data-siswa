```js
$(document).ready(function () {
  $.ajax({
    url: "{{ site_url('dashboard/get_data_ajax') }}",
    dataType: "json",
    success: function (response) {
      // Menambahkan data ke dalam tabel
      $.each(response, function (index, siswa) {
        var row = $("<tr>");
        $("<td>").text(siswa.nis).appendTo(row);
        $("<td>").text(siswa.nisn).appendTo(row);
        $("<td>").text(siswa.nama).appendTo(row);
        $("<td>").text(["Perempuan", "Laki Laki"][siswa.gender]).appendTo(row);
        $("<td>").text(siswa.agama).appendTo(row);
        $("<td>").text(siswa.no_telp).appendTo(row);
        $("<td>").text(["Lulus", "Pelajar"][siswa.status_anak]).appendTo(row);
        $("<td>").text(["Angkat", "Kandung"][siswa.status_data]).appendTo(row);
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
        var targetTbody = $("#example1 tbody");
        // row.appendTo(targetTbody);
      });
    },
    error: function () {
      alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
    },
  });
});
```
