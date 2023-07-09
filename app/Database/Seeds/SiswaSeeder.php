<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            'nis' => '081092',
            'nisn' => '08678',
            'nama' => 'Muhamad Oskhar Mubarok',
            'gender' => true,
            'agama' => 'Islam',
            'no_telp' => '081386380481',
            'nama_ayah' => 'sup',
            'nama_ibu' => 'ran',
            'status_anak' => true,
            'status_data' => true,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // Simple Queries
        $this->db->query('INSERT INTO siswa (nis, nisn, nama, gender, agama, no_telp, nama_ayah, nama_ibu, status_anak, status_data, created_at) VALUES(:nis:, :nisn:, :nama:, :gender:, :agama:, :no_telp:, :nama_ayah:, :nama_ibu:, :status_anak:, :status_data:, :created_at:)', $data);

        // Using Query Builder
        $this->db->table('siswa')->insert($data);
    }
}