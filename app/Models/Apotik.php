<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apotik extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_apotik',
        'alamat',
        'no_hp',
        'kode_referall',
    ];

    protected $table = 'apotik';
}