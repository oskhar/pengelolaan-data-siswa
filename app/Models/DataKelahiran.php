<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKelahiran extends Model
{
    // ...
    protected $table = 'data_kelahiran';
    protected $dateFormat = 'datetime';
    protected $allowedFields = ['tempat', 'hari', 'bulan', 'tahun', 'nis_siswa'];

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
    public function doInsertDataPost($data) {
        // Insert data kelahiran
        $data_kelahiran = [
            'id' => 0,
            'tempat' => $data['tempat_lahir'],
            'hari' => $data['hari'],
            'bulan' => $data['bulan'],
            'tahun' => $data['tahun'],
            'nis_siswa' => $data['nis'],
        ];
        $this->insert($data_kelahiran);
    }

}