<?php

namespace App\Models;

use CodeIgniter\Model;

class Alamat extends Model
{
    // ...
    protected $table = 'alamat';
    protected $dateFormat = 'datetime';

    public function getData()
    {
        $result = $this->orderBy('nis')
            ->findAll();
        return $result;
    }
    public function getSpecificData($target)
    {
        $result = $this->where('nis_siswa', $target)
            ->first();
        return $result;
    }

}