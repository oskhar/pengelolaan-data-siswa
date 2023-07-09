<?php

namespace App\Controllers;
use App\Models\Siswa;

class Dashboard extends BaseController
{
    protected $Siswa;
    protected $Alamat;
    protected $DataKelahiran;

    public function __construct()
    {
        $this->Siswa = new Siswa();
        $this->Alamat;
        $this->DataKelahiran;
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
    public function update()
    {
        return blade_view('admin/update', [
            'update' => true,
        ]);
    }
    public function detail()
    {
        return blade_view('admin/detail', [
            'dashboard' => true,
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
