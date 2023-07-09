<?php

namespace App\Controllers;
use App\Models\Siswa;
use App\Models\Alamat;
use App\Models\DataKelahiran;

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

    public function index()
    {
        $datas = $this->Siswa->findAll();
        return blade_view('admin/dashboard', [
            'dashboard' => true,
            'datas' => $datas,
        ]);
    }
    public function create()
    {
        return blade_view('admin/create', [
            'create' => true,
        ]);
    }
    public function createData()
    {
        // Mengambil semua data post
        $all_data = $this->request->getPost();
        $test_data = json_encode($all_data);
        echo "<script>alert('$test_data')</script>";

        // Insert data siswa
        $data_siswa = [
            'nama' => $all_data['nama'],
            'nis' => $all_data['nis'],
            'nisn' => $all_data['nisn'],
            'agama' => $all_data['agama'],
            'no_telp' => $all_data['no_telp'],
            'gender' => $all_data['gender'],
            'status_anak' => $all_data['status_anak'],
            'status_data' => $all_data['status_data'],
            'nama_ayah' => $all_data['nama_ayah'],
            'nama_ibu' => $all_data['nama_ibu'],
        ];
        $this->Siswa->insert($data_siswa);
        
        // Insert data alamat
        $data_alamat = [
            'id' => 0,
            'jalan' => $all_data['jalan'],
            'kecamatan' => $all_data['kecamatan'],
            'kelurahan' => $all_data['kelurahan'],
            'kota' => $all_data['kota'],
            'provinsi' => $all_data['provinsi'],
            'nis_siswa' => $all_data['nis'],
        ];
        $this->Alamat->insert($data_alamat);

        // Insert data kelahiran
        $data_kelahiran = [
            'id' => 0,
            'tempat' => $all_data['tempat_lahir'],
            'hari' => $all_data['hari'],
            'bulan' => $all_data['bulan'],
            'tahun' => $all_data['tahun'],
            'nis_siswa' => $all_data['nis'],
        ];
        $this->DataKelahiran->insert($data_kelahiran);

    }
    public function update()
    {
        return blade_view('admin/update', [
            'update' => true,
        ]);
    }
    public function detail($data_nis)
    {
        $data_siswa = $this->Siswa->getSpecificData($data_nis);
        $data_alamat = $this->Alamat->getSpecificData($data_nis);
        $data_kelahiran = $this->DataKelahiran->getSpecificData($data_nis);

        return blade_view('admin/detail', [
            'dashboard' => true,
            'data_siswa' => $data_siswa,
            'data_alamat' => $data_alamat,
            'data_kelahiran' => $data_kelahiran,
        ]);
    }
    public function get_data_ajax()
    {
        if($this->request->isAJAX()) {

            $data = $this->Siswa->findAll();
            echo json_encode($data);

        } else {
            exit('Permintaan data tidak dapat diperoses');
        }
    }
}
