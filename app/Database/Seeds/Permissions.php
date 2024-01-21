<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Permissions extends Seeder
{
    public function run()
    {
        $permissions_data = [
            [
                'akses' => 'write_akun',
            ],
            [
                'akses' => 'read_akun',
            ],
        ];

        foreach($permissions_data as $permission){
            $this->db->table('permissions')->insert($permission);
        }
    }
}
