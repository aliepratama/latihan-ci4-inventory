<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Variasi extends Migration
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
            'nama_variasi' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'kategori_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('kategori_id', 'kategori', 'id');
        $this->forge->createTable('variasi');
    }

    public function down()
    {
        $this->forge->dropTable('variasi');
    }
}
