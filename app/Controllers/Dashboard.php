<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        // Menampilkan halmana dashboard
        return blade_view('admin/dashboard', [
        ]);
    }
}