<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strukturOrganisasi = StrukturOrganisasi::orderBy('created_at', 'asc')->get();
        return view('admin.strukturOrganisasi.index', compact('strukturOrganisasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.strukturOrganisasi.create');
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
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($image = $request->file('foto')) {
            $destionationPath = 'image/struktu-organisasi/';
            $strukturOrganisasiImg = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionationPath, $strukturOrganisasiImg);
            $input['foto'] = $strukturOrganisasiImg;
        }

        StrukturOrganisasi::create($input);


        return redirect()->route('strukturOrganisasi.index')
            ->with('Success', 'Data Struktur Organisasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StrukturOrganisasi  $strukturOrganisasi
     * @return \Illuminate\Http\Response
     */
    public function show(StrukturOrganisasi $strukturOrganisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StrukturOrganisasi  $strukturOrganisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(StrukturOrganisasi $strukturOrganisasi)
    {
        return view('admin.strukturOrganisasi.edit', compact('strukturOrganisasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StrukturOrganisasi  $strukturOrganisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StrukturOrganisasi $strukturOrganisasi)
    {
        $input = $request->all();

        if ($image = $request->file('foto')) {
            $destionationPath = 'image/struktu-organisasi/';
            $strukturOrganisasiImg = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionationPath, $strukturOrganisasiImg);
            $input['foto'] = $strukturOrganisasiImg;
        } else {
            unset($input['foto']);
        }

        $strukturOrganisasi->update($input);

                
        Alert::success('Success', 'Data Struktur Organisasi Berhasi diupdate');

        return redirect()->route('strukturOrganisasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StrukturOrganisasi  $strukturOrganisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  StrukturOrganisasi::find($id);
        $data::where("id", $id)->delete();
        Alert::success('Success', 'Struktur Organisasi Berhasil di hapus');
        return redirect()->route('strukturOrganisasi.index');
    }
}
