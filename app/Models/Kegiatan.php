<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'tb_kegiatan';
    protected $fillable = [
        'judul_kegiatan', 'deskripsi', 'foto_kegiatan'
    ];

    public function komentar()
    {
        return $this->hasMany(KomentarKegiatan::class, 'id_kegiatan');
    }
}
