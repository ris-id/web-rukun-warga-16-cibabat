<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    public function organisasi()
    {
        $organisasi = StrukturOrganisasi::all()->sortByDesc('id')->take(1);
        return view('client.organisasi.organisasi', compact('organisasi'));
    }
}
