<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $data = Kegiatan::all();
        return view('home', ['data' => $data]);
    }
    public function profile()
    {
        return view('client.pages.profile');
    }
    public function layanan()
    {
        return view('client.pages.pelayanan');
    }
}
