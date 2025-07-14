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
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('qty_detail_transaksi');
            $table->string('harga_satuan_transaksi');
            $table->string('subtotal_transaksi');
            $table->foreignId('transaksi_id')->constrained(
                table: 'transaksis',
                indexName: 'posts_transaksi_id'
            );
            $table->foreignId('produk_id')->constrained(
                table: 'produks',
                indexName: 'posts_produk_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksis');
    }
};