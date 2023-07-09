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
}
