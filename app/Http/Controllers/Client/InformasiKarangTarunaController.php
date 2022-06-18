<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class InformasiKarangTarunaController extends Controller
{
    public function karangtaruna()
    {
        $kegiatan = Kegiatan::all()->sortByDesc('id')->take(4);
        return view('client.karangtaruna.karangtaruna', compact('kegiatan'));
    }
}
