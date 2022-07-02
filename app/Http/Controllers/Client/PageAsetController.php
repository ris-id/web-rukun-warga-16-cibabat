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
        $aset = Aset::all()->sortByDesc('id');
        return view('client.aset.index', compact('aset'));
    }

    public function show(aset $aset)
    {
        return view('client.aset.show', [
            'aset' => $aset
        ]);
    }
}
