<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $users_data = [
            [
                'nama' => 'kasir',
                'password' => '123',
                'username' => 'kasir',
                'role_id' => 1,
            ],
            [
                'nama' => 'admin',
                'password' => '123',
                'username' => 'admin',
                'role_id' => 2,
            ],
            [
                'nama' => 'superadmin',
                'password' => '123',
                'username' => 'superadmin',
                'role_id' => 3,
            ],
        ];

        foreach($users_data as $user){
            $this->db->table('users')->insert($user);
        }
    }
}
