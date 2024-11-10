<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    public $alamat;

    protected $fillable = [
        'nama',
        'alamat',
        'noTelp',
        'dokter',
        'dosis'
    ];
}
