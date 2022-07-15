<?php

namespace App\Http\Controllers;

use App\Models\KarangTaruna;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KarangTarunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karangTaruna = KarangTaruna::orderBy('created_at', 'asc')->get();
        return view('admin.karangTaruna.index', compact('karangTaruna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.karangTaruna.create');
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
            'judul' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'konten' => 'required',
        ]);

        $input = $request->all();
        if ($image = $request->file('foto')) {
            $destionationPath = 'image/karang-taruna/';
            $karangtarunaImg = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionationPath, $karangtarunaImg);
            $input['foto'] = $karangtarunaImg;
        }

        KarangTaruna::create($input);

        Alert::success('Success', 'Data karang taruna berhasil ditambahkan');

        return redirect()->route('karangTaruna.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KarangTaruna  $karangTaruna
     * @return \Illuminate\Http\Response
     */
    public function show(KarangTaruna $karangTaruna)
    {
        return view('admin.karangTaruna.show', compact('karangTaruna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KarangTaruna  $karangTaruna
     * @return \Illuminate\Http\Response
     */
    public function edit(KarangTaruna $karangTaruna)
    {
        return view('admin.karangTaruna.edit', compact('karangTaruna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KarangTaruna  $karangTaruna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KarangTaruna $karangTaruna)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);
        $input = $request->all();

        if ($image = $request->file('foto')) {
            $destionationPath = 'image/karang-taruna/';
            $karangtarunaImg = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionationPath, $karangtarunaImg);
            $input['foto'] = $karangtarunaImg;
        } else {
            unset($input['foto']);
        }

        $karangTaruna->update($input);


        Alert::success('Success', 'Data karang taruna berhasil diupdate');

        return redirect()->route('karangTaruna.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AsKarangTarunaet  $karangTaruna
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  KarangTaruna::find($id);
        unlink("image/karang-taruna/" . $data->foto);
        $data::where("id", $id)->delete();

        Alert::success('Success', 'Data karang taruna berhasil dihapus');
        return redirect()->route('karangTaruna.index');
    }
}
