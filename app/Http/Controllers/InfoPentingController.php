<?php

namespace App\Http\Controllers;

use App\Models\InfoPenting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InfoPentingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infoPenting = InfoPenting::orderBy('created_at', 'asc')->get();
        return view('admin.infoPenting.index', compact('infoPenting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.infoPenting.create');
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
            'judul_info' => 'required|string|max:55',
            'deskripsi' => 'required',
        ]);

        $input = $request->all();

        InfoPenting::create($input);

        Alert::success('Success', 'Info Penting Berhasi diumumkan');

        return redirect()->route('infoPenting.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfoPenting  $infoPenting
     * @return \Illuminate\Http\Response
     */
    public function show(InfoPenting $infoPenting)
    {
        return view('admin.infoPenting.detail', compact('infoPenting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfoPenting  $infoPenting
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, InfoPenting $infoPenting)
    {
        return view ('admin.infoPenting.edit', compact('infoPenting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfoPenting  $infoPenting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfoPenting $infoPenting)
    {
        $request->validate([
            'judul_info' => 'required|string|max:55',
            'deskripsi' => 'required'
        ]);

        $input = $request->all();

        $infoPenting->update($input);

        Alert::success('Success', 'Info Berhasil diupdate');
        return redirect()->route('infoPenting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfoPenting  $infoPenting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  InfoPenting::find($id);
        $data::where("id", $id)->delete();

        Alert::success('Success', 'Info Berhasil dihapus');
        return redirect()->route('infoPenting.index');
    }
}
