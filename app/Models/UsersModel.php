<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class UsersModel extends Model
    {
        protected $table = 'users';
        protected $useAutoIncrement = true;
        protected $allowedFields = ['nama', 'password', 'username', 'role_id'];
        protected $useSoftDeletes = true;
        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';
        protected $dateFormat = 'datetime';
        protected $validationRules = [
            'username' => 'required|max_length[20]|alpha_numeric_space|min_length[3]|is_unique[users.username]',
            'nama' => 'required|alpha_numeric|max_length[50]|min_length[3]',
            'password' => 'required|max_length[255]|min_length[6]',
        ];
        protected $validationMessages = [
            'username' => [
                'required' => 'Username wajib diisi.',
                'is_unique' => 'Maaf. Username sudah terpakai. Mohon pilih username yang lain.',
                'min_length' => 'Username terlalu pendek. Minimal karakter 3.',
                'max_length' => 'Username terlalu panjang. Maksimal karakter 20.',
                'alpha_numeric_space' => 'Mohon untuk tidak menggunakan spasi dan karakter asing.',
            ],
            'nama' => [
                'required' => 'Nama wajib diisi.',
                'alpha_numeric_space' => 'Mohon untuk tidak menggunakan karakter asing.',
                'min_length' => 'Nama terlalu pendek. Minimal karakter 3.',
                'max_length' => 'Nama terlalu panjang. Maksimal karakter 50.',
            ],
            'password' => [
                'required' => 'Password wajib diisi.',
                'min_length' => 'Password terlalu pendek. Minimal karakter 6.',
                'max_length' => 'Password terlalu panjang. Maksimal karakter 255.',
            ],
        ];
    }
