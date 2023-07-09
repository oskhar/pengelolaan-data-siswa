<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AlamatSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            'jalan' => 'Jl Mangga ubi ujung',
            'kecamatan' => 'cengkareng',
            'kelurahan' => 'April',
            'kota' => 'Jakarta Barat',
            'provinsi' => 'DKI Jakarta',
            'nis_siswa' => '081092',
        ];

        // Simple Queries
        $this->db->query('INSERT INTO alamat (jalan, kecamatan, kelurahan, kota, provinsi, nis_siswa) VALUES(:jalan:, :kecamatan:, :kelurahan:, :kota:, :provinsi:, :nis_siswa:)', $data);

        // Using Query Builder
        $this->db->table('alamat')->insert($data);
    }
}
