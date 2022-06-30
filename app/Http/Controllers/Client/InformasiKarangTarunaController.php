<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\KarangTaruna;

class InformasiKarangTarunaController extends Controller
{
    public function karangtaruna()
    {
        $katar = KarangTaruna::all()->sortByDesc('id')->take(4);
        return view('client.karangtaruna.karangtaruna', compact('katar'));
    }

    public function show($id)
    {
        $katar = KarangTaruna::find($id);
        $katarlist = KarangTaruna::all()->sortByDesc('id')->take(3);
        return view('client.karangtaruna.show', compact('katar', 'katarlist'));
    }
}
