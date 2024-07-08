<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'nama',
        'jk',
        'agama',
        'tempat',
        'tgl',
        'alamat',
        'nm_ibu',
        'nm_ayah',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
