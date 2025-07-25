<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('harga_produk'); 
            $table->string('stok_produk');
            $table->string('gambar_produk')->nullable();
            $table->string('deskripsi_produk')->nullable();
            $table->foreignId('kategori_id')->constrained(
                table: 'kategoris',
                indexName: 'produks_kategori_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};