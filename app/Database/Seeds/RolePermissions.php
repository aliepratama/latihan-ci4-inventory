<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RolePermissions extends Seeder
{
    public function run()
    {
        $roles_data = [
            [
                'role_id' => 1,
                'permission_id' => 1,
            ],
            [
                'role_id' => 2,
                'permission_id' => 1,
            ],
            [
                'role_id' => 3,
                'permission_id' => 1,
            ],
            [
                'role_id' => 3,
                'permission_id' => 2,
            ],
        ];

        foreach($roles_data as $role){
            $this->db->table('role_permissions')->insert($role);
        }
    }
}
