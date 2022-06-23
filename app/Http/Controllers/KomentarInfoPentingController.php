<?php

namespace App\Http\Controllers;

use App\Models\KomentarInfoPenting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KomentarInfoPentingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select("SELECT tb_info_penting.id, tb_info_penting.judul_info, tb_info_penting.created_at, tb_info_penting.deskripsi, (SELECT COUNT(id_info) FROM tb_komentar_info_penting WHERE id_info = tb_info_penting.id) as count_komentar FROM tb_info_penting ORDER BY tb_info_penting.created_at ASC;");
        return view('admin.komentar.infoPenting.index', compact('data'));
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
     * @param  \App\Models\KomentarInfoPenting  $komentarInfoPenting
     * @return \Illuminate\Http\Response
     */
    public function show(KomentarInfoPenting $komentarInfoPenting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KomentarInfoPenting  $komentarInfoPenting
     * @return \Illuminate\Http\Response
     */
    public function edit(KomentarInfoPenting $komentarInfoPenting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KomentarInfoPenting  $komentarInfoPenting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KomentarInfoPenting $komentarInfoPenting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KomentarInfoPenting  $komentarInfoPenting
     * @return \Illuminate\Http\Response
     */
    public function destroy(KomentarInfoPenting $komentarInfoPenting)
    {
        //
    }
}
