<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaPKK extends Model
{
    use HasFactory;
    protected $table = 'tb_anggota_pkk';
    protected $fillable = [
        'nama_anggota', 'jabatan'
    ];
}
