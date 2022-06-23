<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\KomentarKegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KomentarKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // SELECT tb_kegiatan.id, tb_kegiatan.judul_kegiatan, tb_kegiatan.created_at, tb_kegiatan.deskripsi, (SELECT COUNT(id_kegiatan) FROM tb_komentar_kegiatan WHERE id_kegiatan = tb_kegiatan.id) as count_komentar FROM tb_kegiatan ORDER BY tb_kegiatan.created_at ASC; 

        $data = DB::select("SELECT tb_kegiatan.id, tb_kegiatan.judul_kegiatan, tb_kegiatan.created_at, tb_kegiatan.deskripsi, (SELECT COUNT(id_kegiatan) FROM tb_komentar_kegiatan WHERE id_kegiatan = tb_kegiatan.id) as count_komentar FROM tb_kegiatan ORDER BY tb_kegiatan.created_at ASC;");

        return view('admin.komentar.kegiatan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KomentarKegiatan  $komentarKegiatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = KomentarKegiatan::with('kegiatan')->where('id_kegiatan', $id)->get();
        return view('admin.komentar.kegiatan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KomentarKegiatan  $komentarKegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(KomentarKegiatan $komentarKegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KomentarKegiatan  $komentarKegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KomentarKegiatan $komentarKegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KomentarKegiatan  $komentarKegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  KomentarKegiatan::find($id);
        $data::where("id", $id)->delete();
        return redirect()->route('komentar-kegiatan.index');
    }
}
