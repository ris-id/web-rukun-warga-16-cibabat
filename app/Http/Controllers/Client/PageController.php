<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\InfoPenting;
use App\Models\Profil;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $data = Kegiatan::all()->sortByDesc('created_at')->take(4);
        $infoPenting = InfoPenting::all();
        return view('home', ['data' => $data, 'infoPenting' => $infoPenting]);
    }
    public function profile()
    {
        $profil = Profil::all();
        return view('client.Pages.profile', ['profil' => $profil]);
    }
    public function layanan()
    {
        return view('client.Pages.pelayanan');
    }
}
