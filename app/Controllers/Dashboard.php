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
        return blade_view('admin/dashboard', ['dashboard' => true]);
    }
    public function create()
    {
        return blade_view('admin/create', ['create' => true]);
    }
    public function update()
    {
        return blade_view('admin/update', ['update' => true]);
    }
    public function delete()
    {
        return blade_view('admin/delete', ['delete' => true]);
    }
    public function ajaxList()
    {
        $draw = $_REQUEST['draw'];
        $length = $_REQUEST['length'];
        $start = $_REQUEST['start'];
        $search = $_REQUEST['search']['value'];

        $total = $this->Siswa->getLength();
        $output = [
            'length' => $length,
            'draw' => $draw,
            'recordsTotal' => $total,
            'recordsFiltered' => $total
        ];

        
    }
}
