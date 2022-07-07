<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    public $table ="penjualan";
    public $timestamps = false;

    protected $fillable = [
        'nomortransaksi',
        'tanggal',
        'namaPembeli',
        'alamat',
        'pesanan',
        'kuantitas'
    ];
}
