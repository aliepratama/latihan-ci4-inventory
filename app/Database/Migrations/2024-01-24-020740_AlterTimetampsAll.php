<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class AlterTimetampsAll extends Migration
{
    protected array $fields = ['bahan', 'kategori', 'merek',
                            'permissions', 'produk', 'roles',
                            'role_permissions', 'ukuran', 'users',
                            'variasi', 'warna'];
    public function up()
    {
        $timestampFields = [
            'created_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'deleted_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
        ];
        foreach($this->fields as $field){
            $this->forge->addColumn($field, $timestampFields);
        }
    }

    public function down()
    {
        $fields = ['created_at', 'updated_at', 'deleted_at'];
        foreach($this->fields as $field){
            $this->forge->dropColumn($field, $fields);
        }
    }
}
