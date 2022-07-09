<?php

namespace App\Http\Controllers;

use App\Models\LaporanKeuangan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LaporanKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporanKeuangan = LaporanKeuangan::orderBy('created_at', 'asc')->get();
        return view('admin.laporanKeuangan.index', compact('laporanKeuangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.laporanKeuangan.create');
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
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'informasi' => 'required',
        ]);

        $input = $request->all();
        if ($image = $request->file('gambar')) {
            $destionationPath = 'image/laporan-keuangan/';
            $laporanKeuanganImg = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionationPath, $laporanKeuanganImg);
            $input['gambar'] = $laporanKeuanganImg;
        }

        LaporanKeuangan::create($input);

        Alert::success('Success', 'Data laporan keuangan berhasil ditambahkan');

        return redirect()->route('laporanKeuangan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanKeuangan  $laporanKeuangan
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanKeuangan $laporanKeuangan)
    {
        return view('admin.laporanKeuangan.show', compact('laporanKeuangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanKeuangan  $laporanKeuangan
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanKeuangan $laporanKeuangan)
    {
        return view('admin.laporanKeuangan.edit', compact('laporanKeuangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaporanKeuangan  $laporanKeuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaporanKeuangan $laporanKeuangan)
    {
        $request->validate([
            'informasi' => 'required',
        ]);
        $input = $request->all();

        if ($image = $request->file('gambar')) {
            $destionationPath = 'image/laporan-keuangan/';
            $laporanKeuanganImg = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionationPath, $laporanKeuanganImg);
            $input['gambar'] = $laporanKeuanganImg;
        } else {
            unset($input['foto']);
        }

        $laporanKeuangan->update($input);


        Alert::success('Success', 'Data laporan keuangan berhasil diperbarui');

        return redirect()->route('laporanKeuangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanKeuangan  $laporanKeuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  LaporanKeuangan::find($id);
        unlink("image/laporan-keuangan/" . $data->gambar);
        $data::where("id", $id)->delete();

        Alert::success('Success', 'Data laporan keuangan berhasil dihapus');
        return redirect()->route('laporanKeuangan.index');
    }
}
