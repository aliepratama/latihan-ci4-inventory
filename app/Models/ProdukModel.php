<?php
    namespace App\Models;

    use CodeIgniter\Model;

    define('NUMERIC_MESSAGE', 'Mohon untuk menggunakan format angka.');
    define('REGULAR_INTEGER', ['key' => 'required|integer',
                                'messages' => function (string $fieldName) {
                                    return [
                                        'required' => "$fieldName wajib diisi.",
                                        'integer' => NUMERIC_MESSAGE,
                                    ];
                                }]);

    class ProdukModel extends Model
    {
        protected $table = 'produk';
        protected $useAutoIncrement = true;
        protected $allowedFields = ['no_sku', 'nama_barang', 'harga',
                                    'stok', 'masa_garansi', 'merek_id',
                                    'ukuran_id', 'warna_id', 'bahan_id',
                                    'variasi_id'];
        protected $useSoftDeletes = true;
        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = 'updated_at';
        protected $deletedField = 'deleted_at';
        protected $dateFormat = 'datetime';
        protected $validationRules = [
            'no_sku' => 'required|integer|max_length[11]|min_length[11]',
            'nama_barang' => 'required|alpha_numeric|min_length[3]|max_length[50]',
            'harga' => 'decimal',
            'stok' => 'integer|max_length[11]',
            'masa_garansi' => 'integer|max_length[5]',
            'merek_id' => REGULAR_INTEGER['key'],
            'ukuran_id' => REGULAR_INTEGER['key'],
            'warna_id' => REGULAR_INTEGER['key'],
            'bahan_id' => REGULAR_INTEGER['key'],
            'variasi_id' => REGULAR_INTEGER['key'],
        ];
        protected $validationMessages = [
            'no_sku' => [
                'required' => 'No SKU wajib diisi.',
                'min_length' => 'No SKU terlalu pendek. Karakter wajib 11.',
                'max_length' => 'No SKU terlalu panjang. Karakter wajib 11.',
                'integer' => NUMERIC_MESSAGE,
            ],
            'nama_barang' => [
                'required' => 'Nama barang wajib diisi.',
                'min_length' => 'Nama barang terlalu pendek. Minimal karakter 3.',
                'max_length' => 'Nama barang terlalu panjang. Maksimal karakter 50.',
                'alpha_numeric' => 'Mohon untuk tidak menggunakan karakter asing.',
            ],
            'harga' => [
                'decimal' => NUMERIC_MESSAGE,
            ],
            'stok' => [
                'integer' => NUMERIC_MESSAGE,
                'max_length' => 'Stok terlalu banyak. Maksimal 11 digit.',
            ],
            'masa_garansi' => [
                'integer' => NUMERIC_MESSAGE,
                'max_length' => 'Stok terlalu banyak. Maksimal 5 digit.',
            ],
            'merek_id' => REGULAR_INTEGER['messages']('Merek'),
            'ukuran_id' => REGULAR_INTEGER['messages']('Ukuran'),
            'warna_id' => REGULAR_INTEGER['messages']('Warna'),
            'bahan_id' => REGULAR_INTEGER['messages']('Bahan'),
            'variasi_id' => REGULAR_INTEGER['messages']('Variasi'),
        ];
    }
