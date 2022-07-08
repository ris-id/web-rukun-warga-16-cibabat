<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelayanan;

class PagePelayananController extends Controller
{
    //
    public function index()
    {
        $pelayanan = Pelayanan::all()->sortByDesc('id');
        return view('client.pelayanan.index', compact('pelayanan'));
    }

    public function show(pelayanan $pelayanan)
    {
        return view('client.pelayanan.show', [
            'pelayanan' => $pelayanan
        ]);
    }
}
