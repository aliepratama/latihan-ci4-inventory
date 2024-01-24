<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ukuran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'jenis_ukuran' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ukuran');
    }

    public function down()
    {
        $this->forge->dropTable('ukuran');
    }
}
