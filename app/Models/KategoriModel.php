<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class KategoriModel extends Model
    {
        protected $table = 'kategori';
        protected $useAutoIncrement = true;
        protected $allowedFields = ['nama_kategori'];
        protected $useSoftDeletes = true;
        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';
        protected $dateFormat = 'datetime';
        protected $validationRules = [
            'nama_kategori' => 'required|max_length[50]|alpha_numeric|min_length[3]',
        ];
        protected $validationMessages = [
            'nama_kategori' => [
                'required' => 'Kategori wajib diisi.',
                'min_length' => 'Kategori terlalu pendek. Minimal karakter 3.',
                'max_length' => 'Kategori terlalu panjang. Maksimal karakter 50.',
                'alpha_numeric' => 'Mohon untuk tidak menggunakan karakter asing.',
            ],
        ];
    }
