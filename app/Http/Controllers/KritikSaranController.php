<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KritikSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kritikSaran = KritikSaran::orderBy('created_at', 'asc')->get();
        return view('admin.kritikSaran.index', compact('kritikSaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\Models\KritikSaran  $kritikSaran
     * @return \Illuminate\Http\Response
     */
    public function show(KritikSaran $kritikSaran)
    {
        return view('admin.kritikSaran.detail', compact('kritikSaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KritikSaran  $kritikSaran
     * @return \Illuminate\Http\Response
     */
    public function edit(KritikSaran $kritikSaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KritikSaran  $kritikSaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KritikSaran $kritikSaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KritikSaran  $kritikSaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  KritikSaran::find($id);
        $data::where("id", $id)->delete();
        Alert::success('Success', 'Kritik dan saran berhasil dihapus');
        return redirect()->route('kritikSaran.index');
    }
}
