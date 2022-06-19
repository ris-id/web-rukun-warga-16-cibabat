<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aset;

class PageAsetController extends Controller
{
    //
    public function index()
    {
        return view('client.aset.index', [
            'asets' => Aset::all()
        ]);
    }

    public function show(aset $aset)
    {
        return view('client.aset.show', [
            'aset' => $aset
        ]);
    }
}
