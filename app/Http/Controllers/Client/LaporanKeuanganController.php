<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaporanKeuangan;

class LaporanKeuanganController extends Controller
{
    public function index()
    {
        $lapkeu = LaporanKeuangan::latest()->paginate(4);
        return view('client.laporankeuangan.index', compact('lapkeu'));
    }

    public function show($id)
    {
        $lapkeu = LaporanKeuangan::find($id);
        return view('client.laporankeuangan.show', compact('lapkeu'));
    }
}
