<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksiModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_obat',
        'total_pembelian',
        'jumlah_isi_perbox',
        'satuan',
        'batch',
    ];

    protected $table = 'transaksi_vendor';
}
