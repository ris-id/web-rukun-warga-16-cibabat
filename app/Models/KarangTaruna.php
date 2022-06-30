<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KarangTaruna extends Model
{
    use HasFactory;
    protected $table = 'tb_karang_taruna';

    protected $fillable = [
        'foto', 'konten', 'judul'
    ];
}
