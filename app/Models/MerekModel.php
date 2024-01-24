<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class MerekModel extends Model
    {
        protected $table = 'merek';
        protected $useAutoIncrement = true;
        protected $allowedFields = ['merek'];
        protected $useSoftDeletes = true;
        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';
        protected $dateFormat = 'datetime';
        protected $validationRules = [
            'merek' => 'required|max_length[50]|alpha_numeric|min_length[3]',
        ];
        protected $validationMessages = [
            'merek' => [
                'required' => 'Merek wajib diisi.',
                'min_length' => 'Merek terlalu pendek. Minimal karakter 3.',
                'max_length' => 'Merek terlalu panjang. Maksimal karakter 50.',
                'alpha_numeric' => 'Mohon untuk tidak menggunakan karakter asing.',
            ],
        ];
    }
