<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataKelahiran extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tempat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'hari' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'bulan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tahun' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('data_kelahiran');
    }

    public function down()
    {
        //
    }
}
