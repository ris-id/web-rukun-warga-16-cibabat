<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\KomentarKegiatan;
use RealRashid\SweetAlert\Facades\Alert;


class PageKegiatanController extends Controller
{
    public function index()
    {
        $listKegiatan = Kegiatan::latest()->take(4);
        return view('client.kegiatan.index', [
            'kegiatans' => Kegiatan::latest()->paginate(4),
            'listKegiatan' => $listKegiatan
        ]);
    }

    public function show($id)
    {
        $listKegiatan = Kegiatan::latest()->take(4);
        $data = KomentarKegiatan::all()->where('id_kegiatan', $id);
        return view('client.kegiatan.show', [
            'kegiatans' => Kegiatan::find($id),
            'listKegiatan' => $listKegiatan,
            'komentar' => $data
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'komentar' => 'required',
        ]);

        $komentar = new KomentarKegiatan;
        $komentar->id_kegiatan = $request->id_kegiatan;
        $komentar->komentar = $request->komentar;
        $komentar->save();

        Alert::success('Success', 'Komentar Berhasil dikirim');
        return redirect()->back();
    }

    public function showKomentar()
    {
        $data = KomentarKegiatan::with('kegiatan')->get();
        return view('admin.komentar.kegiatan.show', compact('data'));
    }
}
