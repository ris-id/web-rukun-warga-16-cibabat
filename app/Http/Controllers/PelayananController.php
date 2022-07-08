<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pelayanan::orderBy('created_at', 'asc')->get();
        return view('admin.pelayanan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelayanan.create');
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
            'jenis_pelayanan' => 'required',
            'informasi' => 'required',
        ]);

        $input = $request->all();

        Pelayanan::create($input);

        Alert::success('Success', 'Data pelayanan berhasil ditambahkan');

        return redirect()->route('pelayanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelayanan $pelayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelayanan = Pelayanan::where('id', $id)->get();
        return view('admin.pelayanan.edit', compact('pelayanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_pelayanan' => 'required',
            'informasi' => 'required',
        ]);

        $input = $request->all();

        $data = Pelayanan::where('id', $id)->firstOrFail();
        $data->update($input);

        Alert::success('Success', 'Data pelayanan berhasil diupdate');

        return redirect()->route('pelayanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pelayanan::find($id);
        $data::where("id", $id)->delete();
        Alert::success('Success', 'Data pelayanan berhasil dihapus');
        return redirect()->route('pelayanan.index');
    }
}
