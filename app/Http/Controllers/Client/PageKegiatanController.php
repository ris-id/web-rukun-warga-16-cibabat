<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;

class PageKegiatanController extends Controller
{
    public function index()
    {
        $listKegiatan = Kegiatan::all()->sortByDesc('id')->take(4);
        return view('client.kegiatan.index', [
            'kegiatans' => Kegiatan::all(),
            'listKegiatan' => $listKegiatan
        ]);
    }

    public function show($id)
    {
        $listKegiatan = Kegiatan::all()->sortByDesc('id')->take(4);
        return view('client.kegiatan.show', [
            'kegiatans' => Kegiatan::find($id),
            'listKegiatan' => $listKegiatan
        ]);
    }
}
