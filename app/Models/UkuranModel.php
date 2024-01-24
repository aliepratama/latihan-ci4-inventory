<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class UkuranModel extends Model
    {
        protected $table = 'ukuran';
        protected $useAutoIncrement = true;
        protected $allowedFields = ['jenis_ukuran'];
        protected $useSoftDeletes = true;
        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';
        protected $dateFormat = 'datetime';
        protected $validationRules = [
            'jenis_ukuran' => 'required|max_length[50]|alpha_numeric|min_length[3]',
        ];
        protected $validationMessages = [
            'jenis_ukuran' => [
                'required' => 'Ukuran wajib diisi.',
                'min_length' => 'Ukuran terlalu pendek. Minimal karakter 3.',
                'max_length' => 'Ukuran terlalu panjang. Maksimal karakter 50.',
                'alpha_numeric' => 'Mohon untuk tidak menggunakan karakter asing.',
            ],
        ];
    }
