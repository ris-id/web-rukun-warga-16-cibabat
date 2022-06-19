<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KritikSaran;
use RealRashid\SweetAlert\Facades\Alert;

class PageKritikSaranController extends Controller
{
    public function index()
    {
        return view('client.kritiksaran.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:55',
            'email' => 'required',
            'pesan' => 'required|string|max:255',
        ]);

        $input = $request->all();

        KritikSaran::create($input);
        
        Alert::success('Selamat', 'Kritik dan Saran berhasil dikirim');
        
        return redirect()->route('client.kritiksaran');
    }

}
