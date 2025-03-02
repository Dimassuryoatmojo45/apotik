<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_perusahaan',
        'alamat',
        'no_hp',
        'apotik_id',
    ];

    protected $table = 'vendor';
}
