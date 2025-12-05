<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanBalita extends Model
{
    /** @use HasFactory<\Database\Factories\PemeriksaanBalitaFactory> */
    use HasFactory;
    protected $table = 'pemeriksaan_balita';
    protected $guarded = [];
}
