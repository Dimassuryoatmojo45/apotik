<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiObat extends Model
{
    use HasFactory;

    protected $fillable = [
        'stock_id',
        'harga_jual_per_box',
        'harga_jual_per_stipe',
        'harga_jual_per_satuan'
    ];

    protected $table = 'obat';
}