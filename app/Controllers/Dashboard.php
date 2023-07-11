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
        return blade_view('admin/dashboard', [
            'dashboard' => true,
        ]);
    }
    public function create()
    {
        return blade_view('admin/create', [
            'create' => true,
        ]);
    }
    public function create_data()
    {
        // Mengambil semua data post
        $all_data = $this->request->getPost();

        // Insert data
        $this->Siswa->doInsertData($all_data);
        $this->Alamat->doInsertData($all_data);
        $this->DataKelahiran->doInsertData($all_data);

        // Berikan respons JSON
        $response = [
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan'
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

        // Insert data
        $this->Siswa->doUpdateData($all_data['old_nis'], $all_data);
        $this->Alamat->doUpdateData($all_data['old_nis'], $all_data);
        $this->DataKelahiran->doUpdateData($all_data['old_nis'], $all_data);

        // Berikan respons JSON
        $response = [
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan'
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
