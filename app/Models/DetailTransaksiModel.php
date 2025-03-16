<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksiModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_transaksi',
        'nominal'
    ];

    protected $table = 'detail_transaksi';
}