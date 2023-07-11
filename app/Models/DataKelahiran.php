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
    public function getSpecificData($nis_target)
    {
        $result = $this->where('nis_siswa', $nis_target)
            ->first();
        return $result;
    }
    public function doInsertData($data)
    {
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
    public function doUpdateData($old_nis, $data)
    {
        // Update data kelahiran
        $data_kelahiran = [
            'id' => 0,
            'tempat' => $data['tempat_lahir'],
            'hari' => $data['hari'],
            'bulan' => $data['bulan'],
            'tahun' => $data['tahun'],
            'nis_siswa' => $data['nis'],
        ];
        $this->where('nis_siswa', $old_nis)
            ->set($data_kelahiran)
            ->update();
    }

}