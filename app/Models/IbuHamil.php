<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbuHamil extends Model
{
    /** @use HasFactory<\Database\Factories\IbuHamilFactory> */
    use HasFactory;
    protected $table = 'ibu_hamil';
    protected $guarded = [];
}
