<?php

namespace App\Controllers;
use App\Models\Siswa;
use App\Models\Alamat;
use App\Models\DataKelahiran;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Dashboard extends BaseController
{
    protected $Siswa;
    protected $Alamat;
    protected $DataKelahiran;

    public function __construct()
    {
        $this->Siswa = new Siswa();
        $this->Alamat = new Alamat();
        $this->DataKelahiran = new DataKelahiran();
    }
    public function export_excel()
    {
        // Menyiapkan data yang ingin diexport
        $data_siswa = $this->Siswa->findAll();
        $data_alamat = $this->Alamat;
        $data_kelahiran = $this->DataKelahiran;
        
        // Menggabungkan data siswa, alamat siswa, dan data kelahiran siswa
        $all_data = [];
        
        foreach ($data_siswa as $siswa) {
            // Mengambil data alamat siswa berdasarkan siswa_id
            $alamatSiswa = $data_alamat->where('nis_siswa', $siswa['nis'])->findAll();
            
            // Mengambil data kelahiran siswa berdasarkan siswa_id
            $kelahiranSiswa = $data_kelahiran->where('nis_siswa', $siswa['nis'])->findAll();
            
            // Menggabungkan data siswa, alamat siswa, dan data kelahiran siswa menjadi satu array
            foreach ($alamatSiswa as $alamat) {
                foreach ($kelahiranSiswa as $kelahiran) {
                    $all_data[] = array_merge($siswa, $alamat, $kelahiran);
                }
            }
        }

        // Membuat objek Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Menulis judul data ke dalam sel-sel
        $sheet->setCellValue('A1', 'nama');
        $sheet->setCellValue('B1', 'nis');
        $sheet->setCellValue('C1', 'nisn');
        $sheet->setCellValue('D1', 'agama');
        $sheet->setCellValue('E1', 'no telp');
        $sheet->setCellValue('F1', 'gender');
        $sheet->setCellValue('G1', 'status anak');
        $sheet->setCellValue('H1', 'status data');
        $sheet->setCellValue('I1', 'nama ayah');
        $sheet->setCellValue('J1', 'nama ibu');
        $sheet->setCellValue('K1', 'tempat');
        $sheet->setCellValue('L1', 'hari');
        $sheet->setCellValue('M1', 'bulan');
        $sheet->setCellValue('N1', 'tahun');
        $sheet->setCellValue('O1', 'jalan');
        $sheet->setCellValue('P1', 'kecamatan');
        $sheet->setCellValue('Q1', 'kelurahan');
        $sheet->setCellValue('R1', 'kota');
        $sheet->setCellValue('S1', 'provinsi');

        // Menulis data ke dalam sel-sel
        $row = 2;
        foreach ($all_data as $data) {
            $sheet->setCellValue('A' . $row, $data['nama']);
            $sheet->setCellValue('B' . $row, $data['nis']);
            $sheet->setCellValue('C' . $row, $data['nisn']);
            $sheet->setCellValue('D' . $row, $data['agama']);
            $sheet->setCellValue('E' . $row, $data['no_telp']);
            $sheet->setCellValue('F' . $row, ['Perempuan', 'Laki Laki'][$data['gender']]);
            $sheet->setCellValue('G' . $row, ['Angkat', 'Kandung'][$data['status_anak']]);
            $sheet->setCellValue('H' . $row, ['Tidak Aktif', 'Aktif'][$data['status_data']]);
            $sheet->setCellValue('I' . $row, $data['nama_ayah']);
            $sheet->setCellValue('J' . $row, $data['nama_ibu']);
            $sheet->setCellValue('K' . $row, $data['tempat']);
            $sheet->setCellValue('L' . $row, $data['hari']);
            $sheet->setCellValue('M' . $row, $data['bulan']);
            $sheet->setCellValue('N' . $row, $data['tahun']);
            $sheet->setCellValue('O' . $row, $data['jalan']);
            $sheet->setCellValue('P' . $row, $data['kecamatan']);
            $sheet->setCellValue('Q' . $row, $data['kelurahan']);
            $sheet->setCellValue('R' . $row, $data['kota']);
            $sheet->setCellValue('S' . $row, $data['provinsi']);
            $row++;
        }

        // Mengatur header response
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="data.xlsx"');
        header('Cache-Control: max-age=0');

        // Menggunakan writer untuk menulis objek Spreadsheet ke dalam file Excel
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
    public function import_excel()
    {
        
    }
    public function index()
    {
        // Mengambil data siswa
        $data_siswa = $this->Siswa->findAll();
        // Memanggil view
        return blade_view('admin/dashboard', [
            'dashboard' => true,
            'data_siswa' => $data_siswa,
        ]);
    }
    public function create()
    {
        // Memanggil view
        return blade_view('admin/create', [
            'create' => true,
            'keyCsrfToken' => csrf_token(),
            'valueCsrfToken' => csrf_hash(),
        ]);
    }
    public function create_data()
    {
        // Mengambil semua data post
        $all_data = $this->request->getPost();

        // Membuat aturan untuk validasi data
        $validation_rules = [
            'nama'        => 'required|alpha_spaces',
            'nis'         => 'required',
            'nisn'        => 'required',
            'agama'       => 'required',
            'no_telp'     => 'required',
            'gender'      => 'required',
            'status_anak' => 'required',
            'status_data' => 'required',
            'nama_ayah'   => 'required',
            'nama_ibu'    => 'required',
            'tempat_lahir'=> 'required',
            'hari'        => 'required',
            'bulan'       => 'required',
            'tahun'       => 'required',
            'jalan'       => 'required',
            'kecamatan'   => 'required',
            'kelurahan'   => 'required',
            'kota'        => 'required',
            'provinsi'    => 'required',
        ];
        $validation =  \Config\Services::validation();
        $validation->setRules($validation_rules);

        // Hentikan program jika error
        if (!$validation->withRequest($this->request)->run()) {
            
            // Mendapatkan pesan error
            $errors = $validation->getErrors();

            // Berikan respons JSON
            $response = [
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $errors
            ];
        
            // Mengirim respons dalam format JSON
            return $this->response->setJSON($response);

        }

        // Insert data
        $this->Siswa->doInsertData($all_data);
        $this->Alamat->doInsertData($all_data);
        $this->DataKelahiran->doInsertData($all_data);

        // Berikan respons JSON
        $response = [
            'success' => true,
            'message' => 'Validasi Berhasil'
        ];
    
        // Mengirim respons dalam format JSON
        return $this->response->setJSON($response);
    }
    public function update($data_nis = "", $recover_data = '')
    {
        // Memeriksa ketersediaan data nis
        if (!empty($data_nis)) {

            // Melakukan recover data jika memenuhi syarat
            if (!empty($recover_data))
                $this->Siswa->doRecoverData($data_nis);

            // Mendapatkan data dengan nis yang diberikan
            $data_siswa = $this->Siswa->getSpecificData($data_nis);
            $data_alamat = $this->Alamat->getSpecificData($data_nis);
            $data_kelahiran = $this->DataKelahiran->getSpecificData($data_nis);
            $akumulasi_data = array_merge($data_siswa, $data_alamat, $data_kelahiran);

            return blade_view('admin/update', [
                'update' => true,
                'nis' => $data_nis,
                'data' => $akumulasi_data,
            ]);
        }

        // Mengembalikan view tanpa data nis
        return blade_view('admin/update', [
            'update' => true,
        ]);
    }
    public function update_data($all_data = [])
    {
        // Mengambil semua data post
        if (empty($all_data))
            $all_data = $this->request->getPost();
    
            // Membuat aturan untuk validasi data
            $validation_rules = [
                'nama'        => 'required|alpha_spaces',
                'nis'         => 'required',
                'nisn'        => 'required',
                'agama'       => 'required',
                'no_telp'     => 'required',
                'gender'      => 'required',
                'status_anak' => 'required',
                'status_data' => 'required',
                'nama_ayah'   => 'required',
                'nama_ibu'    => 'required',
                'tempat_lahir'=> 'required',
                'hari'        => 'required',
                'bulan'       => 'required',
                'tahun'       => 'required',
                'jalan'       => 'required',
                'kecamatan'   => 'required',
                'kelurahan'   => 'required',
                'kota'        => 'required',
                'provinsi'    => 'required',
            ];
            $validation =  \Config\Services::validation();
            $validation->setRules($validation_rules);
    
            // Hentikan program jika error
            if (!$validation->withRequest($this->request)->run()) {
                
                // Mendapatkan pesan error
                $errors = $validation->getErrors();
    
                // Berikan respons JSON
                $response = [
                    'success' => false,
                    'message' => 'Validasi gagal',
                    'errors' => $errors
                ];
            
                // Mengirim respons dalam format JSON
                return $this->response->setJSON($response);
    
            }

        // Insert data
        $this->Siswa->doUpdateData($all_data['old_nis'], $all_data);
        $this->Alamat->doUpdateData($all_data['old_nis'], $all_data);
        $this->DataKelahiran->doUpdateData($all_data['old_nis'], $all_data);

        // Mendapatkan pesan error
        $errors = $validation->getErrors();

        // Berikan respons JSON
        $response = [
            'success' => true,
            'message' => 'Update Data Berhasil',
        ];
    
        // Mengirim respons dalam format JSON
        return $this->response->setJSON($response);

    }
    public function soft_delete()
    {
        // Memeriksa jenis request yang diberikan
        if($this->request->isAJAX()) {
            // Mengambil semua data post
            $data_nis = $this->request->getPost('nis');

            $this->Siswa->doSoftDelete($data_nis);

            // Berikan respons JSON
            $response = [
                'status' => 'success',
                'message' => 'Data berhasil dimasukan ke tempat sampah'
            ];
        
            // Mengirim respons dalam format JSON
            return $this->response->setJSON($response);
        } else {
            exit('Permintaan tidak dapat diperoses');
        }
    }
    public function recover_data()
    {
        // Memeriksa jenis request yang diberikan
        if($this->request->isAJAX()) {
            // Mengambil semua data post
            $data_nis = $this->request->getPost('nis');

            $this->Siswa->doRecoverData($data_nis);

            // Berikan respons JSON
            $response = [
                'status' => 'success',
                'message' => 'Data berhasil dimasukan ke tempat sampah'
            ];
        
            // Mengirim respons dalam format JSON
            return $this->response->setJSON($response);
        } else {
            exit('Permintaan tidak dapat diperoses');
        }
    }
    public function detail($data_nis)
    {

        // Membuat array yang berisi 12 nama bulan
        $bulan = [null, 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        // Status data buangan
        $data_trash = false;

        // Mendapatkan data berdasarkan nis yang diberikan
        $data_siswa = $this->Siswa->getSpecificData($data_nis);
        $data_alamat = $this->Alamat->getSpecificData($data_nis);
        $data_kelahiran = $this->DataKelahiran->getSpecificData($data_nis);

        // Memeriksa data buangan
        if (!empty($data_siswa['deleted_at']))
            $data_trash = true;

        // Mengmbalikan view
        return blade_view('admin/detail', [
            'dashboard' => true,
            'data_siswa' => $data_siswa,
            'data_alamat' => $data_alamat,
            'data_kelahiran' => $data_kelahiran,
            'bulan' => $bulan,
            'data_trash' => $data_trash,
        ]);
    }
    public function get_data_ajax()
    {
        if($this->request->isAJAX()) {

            $data_siswa = $this->Siswa->findAll();
            echo json_encode($data_siswa);

        } else {
            exit('Permintaan tidak dapat diperoses');
        }
    }
    public function trash()
    {
        return blade_view('admin/trash', [
            'trash' => true,
        ]);
    }
    public function get_deleted_data_ajax()
    {
        if($this->request->isAJAX()) {

            // Mengambil data yang terisi pada column deleted_at
            $deleted_data = $this->Siswa->getDeletedData();
            echo json_encode($deleted_data);

        } else {
            exit('Permintaan tidak dapat diperoses');
        }
    }
}
