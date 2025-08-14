<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Support\Facades\DB;

class ProdukTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function bisa_melihat_daftar_produk_dari_seeder()
    {

        $this->seed(\Database\Seeders\ProdukSeeder::class);

        // Akses daftar produk
        $response = $this->get('/produk');

        // Pastikan respon sukses
        $response->assertStatus(200);
        $response->assertSee('Sepatu Sneakers');
        $response->assertSee('Tas Kulit');
    }

    #[Test]
    public function bisa_menambahkan_produk_baru()
    {
        $response = $this->post('/produk', [
            'nama' => 'Topi Baseball',
            'deskripsi' => 'Topi keren untuk gaya santai.',
            'harga' => 120000,
            'stok' => 12,
        ]);

        $response->assertStatus(302);


        $this->assertDatabaseHas('produks', [
            'nama' => 'Topi Baseball'
        ]);
    }

    #[Test]
    public function bisa_menghapus_produk()
    {

        $id = DB::table('produks')->insertGetId([
            'nama' => 'Produk Hapus',
            'deskripsi' => 'Akan dihapus.',
            'harga' => 100000,
            'stok' => 1,
        ]);

        // Hapus produk
        $response = $this->delete("/produk/{$id}");
        $response->assertStatus(302);

        // Pastikan produk sudah tidak ada
        $this->assertDatabaseMissing('produks', [
            'id' => $id
        ]);
    }
}
