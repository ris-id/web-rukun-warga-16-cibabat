<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Profil::all();
        return view('admin.profil.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profil.create');
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
            'deskripsi' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $input = $request->all();
        if ($image = $request->file('logo')) {
            $destionationPath = 'image/logo/';
            $logo = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionationPath, $logo);
            $input['logo'] = $logo;
        }

        Profil::create($input);
        return redirect()->route('profil.index')
            ->with('Success', 'Data profil berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        $request->validate([
            'deskripsi' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('logo')) {
            $destinationPath = 'image/logo/';
            $logo = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $logo);
            $input['logo'] = "$logo";
            unlink("image/logo/" . $profil->logo);
        } else {
            unset($input['logo']);
        }

        $profil->update($input);
        return redirect()->route('profil.index')
            ->with('success', 'profil berhasil di publish');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Profil::find($id);
        $data::where("id", $id)->delete();
        Alert::success('Success', 'Profil Berhasil di hapus');
        return redirect()->route('profil.index');

    }
}
