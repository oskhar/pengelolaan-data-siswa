<?php

namespace App\Controllers;
use Jenssegers\Blade\Blade;

class Dashboard extends BaseController
{
    protected $Siswa;
    protected $Alamat;
    protected $DataKelahiran;

    public function __construct()
    {
        $this->Siswa;
        $this->Alamat;
        $this->DataKelahiran;
    }

    public function index()
    {
        return blade_view('admin/dashboard', ['tes' => 'isi data']);
    }
    public function create()
    {
        return blade_view('admin/create', ['tes' => 'isi data']);
    }
    public function update()
    {
        return blade_view('admin/update', ['tes' => 'isi data']);
    }
    public function delete()
    {
        return blade_view('admin/delete', ['tes' => 'isi data']);
    }
}
