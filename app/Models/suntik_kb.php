<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suntik_kb extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggalKb',
        'tanggalPengingat',
        'metodePengingat',
        'tanggalKbBerikutnya',
    ];
}
