### Project untuk pelatihan awal

Project dengan Framework CodeIgniter serta diintegrasikan dengan adminLTE template dan dengan blade template engine laravel

### Arsitektur database

Tabel Data Siswa

- id
- nis
- nisn
- nama
- gender
- agama
- no_telp
- nama_ayah
- nama_ibu
- status_anak
- status_data (aktif/tidak aktif)
- created_at (date, default now)
- update_at (date, default null)
- delete_at (date, default null)

Tabel data_kelahiran

- id
- tempat
- hari
- bulan
- tahun

Tabel alamat

- id
- jalan
- kecamatan
- kelurahan
- kota
- provinsi

### Rule

- framework CI 4
- mariaDb
- Template AdminLTe
- Pas data tampil via dataTables mke ajax. Biar kena konsep client side.
- tambah ubah hapus juga mke ajax <a href="docs/konsep_ajax.md">Cara memanfaatkan fitur ajax menggunakan CodeIgniter</a>
- bagian view. Coba cari cara blade laravel on codeigniter
- coba perhatiin ada kolom status data, create, update, delete. Nahh skrng gimna
  - cara nya pas dihapus data ttp ada. (soft delete)
  - cara pas datanya ubah (ke record tgll berapa diubah)
  - pas ditambah (ke record ditambah nya kapan)
- Pengumpulan: tanggal 13
