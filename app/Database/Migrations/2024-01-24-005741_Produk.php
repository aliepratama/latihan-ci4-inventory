<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
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
            'no_sku' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'harga' => [
                'type' => 'FLOAT',
                'default' => '0.00',
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'masa_garansi' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'merek_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'ukuran_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'warna_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'bahan_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'variasi_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('merek_id', 'merek', 'id');
        $this->forge->addForeignKey('ukuran_id', 'ukuran', 'id');
        $this->forge->addForeignKey('warna_id', 'warna', 'id');
        $this->forge->addForeignKey('bahan_id', 'bahan', 'id');
        $this->forge->addForeignKey('variasi_id', 'variasi', 'id');
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
