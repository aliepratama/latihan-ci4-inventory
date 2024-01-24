<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class WarnaModel extends Model
    {
        protected $table = 'warna';
        protected $useAutoIncrement = true;
        protected $allowedFields = ['jenis_warna'];
        protected $useSoftDeletes = true;
        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';
        protected $dateFormat = 'datetime';
        protected $validationRules = [
            'jenis_warna' => 'required|max_length[50]|alpha_numeric|min_length[3]',
        ];
        protected $validationMessages = [
            'jenis_warna' => [
                'required' => 'Warna wajib diisi.',
                'min_length' => 'Warna terlalu pendek. Minimal karakter 3.',
                'max_length' => 'Warna terlalu panjang. Maksimal karakter 50.',
                'alpha_numeric' => 'Mohon untuk tidak menggunakan karakter asing.',
            ],
        ];
    }
