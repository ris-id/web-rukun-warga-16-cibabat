<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PKK;
use App\Models\AnggotaPKK;


class PagePkkController extends Controller
{
    public function index()
    {
        $pkk = PKK::all()->sortByDesc('id');
        $AnggotaPKK = AnggotaPKK::all()->sortByDesc('id');
        return view('client.pkk.index', compact('pkk','AnggotaPKK'));
    }

    public function show(pkk $pkk)
    {
        return view('client.pkk.show', [
            'pkk' => $pkk
        ]);
    }
}
