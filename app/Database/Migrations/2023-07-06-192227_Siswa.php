<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nis' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nisn' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'gender' => [
                'type' => 'BOOLEAN',
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_ibu' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'status_anak' => [
                'type' => 'BOOLEAN',
            ],
            'status_data' => [
                'type' => 'BOOLEAN',
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
            'update_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'delete_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        //
    }
}
