<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiVendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_obat',
        'vendor_id',
        'status_pembelian_id',
        'total_pembelian',
        'jumlah_isi_perbox',
        'satuan',
        'batch',
    ];

    protected $table = 'transaksi_vendor';
}