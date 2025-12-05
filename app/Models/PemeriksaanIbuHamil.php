<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanIbuHamil extends Model
{
    /** @use HasFactory<\Database\Factories\PemeriksaanIbuHamilFactory> */
    use HasFactory;
    protected $table = 'pemeriksaan_ibu_hamil';
    protected $guarded = [];
}
