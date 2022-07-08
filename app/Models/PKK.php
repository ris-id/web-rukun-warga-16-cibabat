<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PKK extends Model
{
    use HasFactory;
    protected $table = 'tb_pkk';
    protected $fillable = [
        'agenda', 'tanggal', 'foto'
    ];
}
