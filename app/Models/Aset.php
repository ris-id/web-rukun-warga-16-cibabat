<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    use HasFactory;
    protected $table = 'tb_aset';
    protected $fillable = [
        'informasi', 'foto'
    ];
}
