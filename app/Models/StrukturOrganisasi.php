<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasi extends Model
{
    use HasFactory;
    protected $table = 'tb_struktur_organisasi';

    protected $fillable = [
        'foto', 'ketua_rw', 'wakil_ketua', 'sekretaris', 'bendahara', 'keamanan', 'pelayanan_masyarakat', 'pemuda_olahraga', 'kesehatan_masyarakat'
    ];
}
