<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori'];

    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class, 'kategori_id');
    }
    
}