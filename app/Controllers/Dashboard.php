<?php

namespace App\Controllers;
use Jenssegers\Blade\Blade;

class Dashboard extends BaseController
{
    public function index()
    {
        return blade_view('admin/dashboard', ['tes' => 'isi data']);
    }
}
