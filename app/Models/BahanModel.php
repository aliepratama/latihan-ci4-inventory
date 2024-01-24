<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class BahanModel extends Model
    {
        protected $table = 'bahan';
        protected $useAutoIncrement = true;
        protected $allowedFields = ['jenis_bahan'];
        protected $useSoftDeletes = true;
        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';
        protected $dateFormat = 'datetime';
        protected $validationRules = [
            'jenis_bahan' => 'required|max_length[50]|alpha_numeric|min_length[3]',
        ];
        protected $validationMessages = [
            'jenis_bahan' => [
                'required' => 'Bahan wajib diisi.',
                'min_length' => 'Bahan terlalu pendek. Minimal karakter 3.',
                'max_length' => 'Bahan terlalu panjang. Maksimal karakter 50.',
                'alpha_numeric' => 'Mohon untuk tidak menggunakan karakter asing.',
            ],
        ];
    }
