<?php

namespace App\Controllers;
use Jenssegers\Blade\Blade;

class Dashboard extends BaseController
{
    public function index()
    {
        return blade_view('dashboard', ['tes' => 'isi data']);
    }
}
