<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Image;
use RealRashid\SweetAlert\Facades\Alert;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kegiatan::orderBy('created_at', 'asc')->get();
        return view('admin.kegiatan.kegiatan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kegiatan.create');
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
            'judul_kegiatan' => 'required',
            'deskripsi' => 'required',
            'foto_kegiatan' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();
        if ($image = $request->file('foto_kegiatan')) {
            $destionationPath = 'image/kegiatan/';
            $kegiatanImg = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionationPath, $kegiatanImg);
            $input['foto_kegiatan'] = $kegiatanImg;
        }

        Kegiatan::create($input);

        Alert::success('Success', 'Data kegiatan berhasil ditambahkan');

        return redirect()->route('kegiatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.detail', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $request->validate([
            'judul_kegiatan' => 'required',
            'deskripsi' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('foto_kegiatan')) {
            $destinationPath = 'image/kegiatan/';
            $kegiatanImg = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $kegiatanImg);
            $input['foto_kegiatan'] = "$kegiatanImg";
        } else {
            unset($input['foto_kegiatan']);
        }

        $kegiatan->update($input);

        Alert::success('Success', 'Data kegiatan berhasil diupdate');

        return redirect()->route('kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  Kegiatan::find($id);
        unlink("image/kegiatan/" . $data->foto_kegiatan);
        $data::where("id", $id)->delete();
        Alert::success('Success', 'Data kegiatan berhasil dihapus');
        return redirect()->route('kegiatan.index');
    }
}
