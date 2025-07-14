<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'nama_produk',
        'harga_produk',
        'stok_produk',
        'gambar_produk',
        'deskripsi_produk',
        'kategori_id',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}