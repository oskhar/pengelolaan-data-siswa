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

        // Insert data
        $this->Siswa->insertDataPost($all_data);
        $this->Alamat->insertDataPost($all_data);
        $this->DataKelahiran->insertDataPost($all_data);

        // Berikan respons JSON
        $response = [
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan'
        ];
    
        // Mengirim respons dalam format JSON
        return $this->response->setJSON($response);

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
