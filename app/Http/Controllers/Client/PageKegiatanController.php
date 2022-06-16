<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;

class PageKegiatanController extends Controller
{
    public function index()
    {
        return view('client.kegiatan.index', [
            'kegiatans' => Kegiatan::all()
        ]);
    }

    public function show(Kegiatan $kegiatan)
    {
        return view('client.kegiatan.show', [
            'kegiatan' => $kegiatan
        ]);
    }
}
