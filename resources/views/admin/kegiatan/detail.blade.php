@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <a href="{{ route('kegiatan.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman utama
                kegiatan</a>
            <div class="text-right">
                <a href="{{ route('kegiatan.edit', ['kegiatan' => $kegiatan->id]) }}" class="btn btn-outline-primary"><span
                        class="fa fa-pencil"></span> Edit
                    Postingan</a>
            </div>
        </div>
        <h1>{{ $kegiatan->judul_kegiatan }}</h1>
        <div class="m-auto text-center">
            <img src="/image/kegiatan/{{ $kegiatan->foto_kegiatan }}" class="w-50 img-responsive img-thumbnail">
        </div>
        <div class="content mt-3">
            <p>{!! $kegiatan->deskripsi !!}</p>
        </div>
    </div>
@endsection
