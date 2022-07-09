<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Aset::orderBy('created_at', 'asc')->get();
        return view('admin.aset.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aset.create');
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
            'informasi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_aset' => 'required',
            'jumlah' => 'required|min:0'
        ]);

        $input = $request->all();
        if ($image = $request->file('foto')) {
            $destionationPath = 'image/aset/';
            $foto = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionationPath, $foto);
            $input['foto'] = $foto;
        }
        Aset::create($input);
        Alert::success('Success', 'Data aset berhasil ditambahkan');
        return redirect()->route('aset.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function show(Aset $aset)
    {
        return view('admin.aset.show', compact('aset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function edit(Aset $aset)
    {
        return view('admin.aset.edit', compact('aset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aset $aset)
    {
        $request->validate([
            'informasi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_aset' => 'required',
            'jumlah' => 'required|min:0'
        ]);
        $input = $request->all();

        if ($image = $request->file('foto')) {
            $destinationPath = 'image/aset/';
            $fotoAset = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fotoAset);
            $input['foto'] = "$fotoAset";
        } else {
            unset($input['foto']);
        }

        $aset->update($input);

        Alert::success('Success', 'Data aset berhasil diupdate');

        return redirect()->route('aset.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aset  $aset
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  Aset::find($id);
        unlink("image/aset/" . $data->foto);
        $data::where("id", $id)->delete();
        Alert::success('Success', 'Data aset berhasil dihapus');
        return redirect()->route('aset.index');
    }
}
