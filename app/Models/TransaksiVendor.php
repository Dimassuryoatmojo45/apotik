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
        'isi_box',
        'isi_perbox',
        'isi_satuan',
        'total_obat',
        'harga_perbox', 
        'harga_per_stripe',
        'harga_per_satuan',
        'harga_total_pembelian',
        'batch'
    ];

    protected $table = 'transaksi_vendor';
}