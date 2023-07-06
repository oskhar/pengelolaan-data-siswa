<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alamat extends Migration
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
            'jalan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'kelurahan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'kota' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('alamat');
    }

    public function down()
    {
        //
    }
}
