<?php

namespace App\Models;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $fillable = [
        'qty_detail_transaksi',
        'harga_satuan_transaksi',
        'subtotal_transaksi',
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id');
    }
}