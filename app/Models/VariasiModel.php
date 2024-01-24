<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class VariasiModel extends Model
    {
        protected $table = 'variasi';
        protected $useAutoIncrement = true;
        protected $allowedFields = ['nama_variasi', 'kategori_id'];
        protected $useSoftDeletes = true;
        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';
        protected $dateFormat = 'datetime';
        protected $validationRules = [
            'nama_variasi'     => 'required|max_length[50]|alpha_numeric|min_length[3]',
            'kategori_id'        => 'required',
        ];
        protected $validationMessages = [
            'nama_variasi' => [
                'required' => 'Variasi wajib diisi.',
                'min_length' => 'Variasi terlalu pendek. Minimal karakter 3.',
                'max_length' => 'Variasi terlalu panjang. Maksimal karakter 50.',
                'alpha_numeric' => 'Mohon untuk tidak menggunakan karakter asing.',
            ],
            'kategori_id' => [
                'required' => 'Kategori wajib diisi.',
            ],
        ];
    }
