<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PKK;

class PagePkkController extends Controller
{
    public function index()
    {
        return view('client.pkk.index', [
            'pkks' => PKK::all()
        ]);
    }

    public function show(pkk $pkk)
    {
        return view('client.pkk.show', [
            'pkk' => $pkk
        ]);
    }
}
