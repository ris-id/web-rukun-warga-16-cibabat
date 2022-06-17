<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\InfoPenting;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class PageInfoPentingController extends Controller
{
    public function index()
    {
        $data = InfoPenting::all();
        $kegiatan = Kegiatan::all()->sortByDesc('id')->take(5);
        
        // $sorted = $kegiatan->sortBy('judul_kegiatan');
        return view('client.infopenting.infopenting', compact('data', 'kegiatan'));
    }
    
    public function show($id)
    {
        $info = InfoPenting::find($id);
        $listkegiatan = Kegiatan::all()->sortByDesc('id')->take(4);
        $infopenting = InfoPenting::all()->sortByDesc('id')->take(2);
        return view('client.infopenting.show', compact('info', 'listkegiatan', 'infopenting'));
    }
}
