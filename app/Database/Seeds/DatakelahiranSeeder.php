<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatakelahiranSeeder extends Seeder
{
    public function run()
    {
        // 
        $data = [
            'id' => 0,
            'tempat' => 'Jakarta',
            'hari' => '09',
            'bulan' => 'April',
            'tahun' => '2003',
            'nis_siswa' => '081092',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO data_kelahiran (tempat, hari, bulan, tahun, nis_siswa) VALUES(:tempat:, :hari:, :bulan:, :tahun:, :nis_siswa:)', $data);

        // Using Query Builder
        $this->db->table('data_kelahiran')->insert($data);
    }
}
