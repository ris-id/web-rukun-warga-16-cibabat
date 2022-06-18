<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'tb_profil';
    protected $fillable = [
        'logo', 'link_instagram', 'link_instagram', 'link_facebook',
        'link_twitter', 'link_email', 'deskripsi'
    ];
}
