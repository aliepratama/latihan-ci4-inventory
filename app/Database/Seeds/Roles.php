<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Roles extends Seeder
{
    public function run()
    {
        $roles_data = [
            [
                'role' => 'kasir',
            ],
            [
                'role' => 'admin',
            ],
            [
                'role' => 'superadmin',
            ],
        ];

        foreach($roles_data as $role){
            $this->db->table('roles')->insert($role);
        }
    }
}
