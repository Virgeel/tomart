<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stok;


class Pegawai extends Model
{
    use HasFactory;

    protected $primaryKey = 'pegawai_id';

    protected $fillable = [
        'nama',
        'alamat',
        'telfon',
        'foto'
    ];

   
}
