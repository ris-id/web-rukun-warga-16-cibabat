<?php

namespace App\Http\Controllers;

use App\Models\PKK;
use Illuminate\Http\Request;
use Image;
use RealRashid\SweetAlert\Facades\Alert;

class PKKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PKK::orderBy('created_at', 'asc')->get();
        return view('admin.pkk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pkk.create');
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
            'agenda' => 'required',
            'tanggal' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();
        if ($image = $request->file('foto')) {
            $destionationPath = 'image/pkk/';
            $pkkImg = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionationPath, $pkkImg);
            $input['foto'] = $pkkImg;
        }

        PKK::create($input);

        Alert::success('Success', 'Data PKK berhasil ditambahkan');

        return redirect()->route('pkk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(PKK $pkk)
    {
        return view('admin.pkk.show', compact('pkk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(PKK $pkk)
    {
        return view('admin.pkk.edit', compact('pkk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PKK $pkk)
    {
        $request->validate([
            'agenda' => 'required',
            'tanggal' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('foto')) {
            $destinationPath = 'image/pkk/';
            $pkkImg = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $pkkImg);
            $input['foto'] = "$pkkImg";
        } else {
            unset($input['foto']);
        }

        $pkk->update($input);

        Alert::success('Success', 'Data PKK berhasil diupdate');

        return redirect()->route('pkk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PKK  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PKK::find($id);
        unlink("image/pkk/" . $data->foto);
        $data::where("id", $id)->delete();
        Alert::success('Success', 'Data PKK berhasil dihapus');
        return redirect()->route('pkk.index');
    }
}
