<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        DB::table('kategoris')->insert([
            ['nama_kategori' => 'Elektronik'],
            ['nama_kategori' => 'Pakaian'],
            ['nama_kategori' => 'Makanan'],
            ['nama_kategori' => 'Minuman'],
        ]);
    }
}