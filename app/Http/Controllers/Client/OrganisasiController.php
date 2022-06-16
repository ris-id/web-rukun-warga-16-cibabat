<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    public function organisasi()
    {
        return view('client.organisasi.organisasi');
    }
}
