<?php

namespace App\Http\Controllers;

use App\Models\AnggotaPKK;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AnggotaPKKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AnggotaPKK::orderBy('created_at', 'asc')->get();
        return view('admin.anggota-pkk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.anggota-pkk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_anggota' => 'required',
            'jabatan' => 'required',
        ]);

        $input = $request->all();

        AnggotaPKK::create($input);

        Alert::success('Success', 'Data Anggota Berhasil ditambahkan');

        return redirect()->route('anggota.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnggotaPKK  $anggotaPKK
     * @return \Illuminate\Http\Response
     */
    public function show(AnggotaPKK $anggotaPKK)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnggotaPKK  $anggotaPKK
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggotaPKK = AnggotaPKK::where('id', $id)->get();
        return view('admin.anggota-pkk.edit', compact('anggotaPKK'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnggotaPKK  $anggotaPKK
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_anggota' => 'required',
            'jabatan' => 'required',
        ]);

        $input = $request->all();

        $data = AnggotaPKK::where('id', $id)->firstOrFail();
        $data->update($input);

        Alert::success('Success', 'Data Anggota Berhasil diupdate');

        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnggotaPKK  $anggotaPKK
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = AnggotaPKK::find($id);
        $data::where("id", $id)->delete();
        Alert::success('Success', 'Data Anggota Berhasil dihapus');
        return redirect()->route('anggota.index');
    }
}
