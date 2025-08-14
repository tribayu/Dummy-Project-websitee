<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('produks')->insert([
            [
                'nama' => 'Sepatu Sneakers',
                'deskripsi' => 'Sepatu sneakers nyaman untuk sehari-hari.',
                'harga' => 350000,
                'stok' => 15,
            ],
            [
                'nama' => 'Tas Kulit',
                'deskripsi' => 'Tas kulit elegan untuk ke kantor.',
                'harga' => 550000,
                'stok' => 5,
            ],
            [
                'nama' => 'Jam Tangan Sport',
                'deskripsi' => 'Jam tangan anti air cocok untuk olahraga.',
                'harga' => 750000,
                'stok' => 20,
            ],
            [
                'nama' => 'Celana Jeans',
                'deskripsi' => 'Celana jeans slim fit bahan stretch.',
                'harga' => 300000,
                'stok' => 0,
            ],
        ]);
    }
}
