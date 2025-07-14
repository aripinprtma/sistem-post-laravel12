<?php

namespace App\Models;

use App\Models\DetailTransaksi;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'tanggal_transaksi',
        'total_bayar_transaksi',
        'total_uang_transaksi',
        'kembalian_transaksi',
    ];

    public function detailTransaksis()
    {
        return $this->hasMany(DetailTransaksi::class, 'transaksi_id');
    }
}