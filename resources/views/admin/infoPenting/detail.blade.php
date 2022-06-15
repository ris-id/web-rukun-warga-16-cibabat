@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <a href="{{ route('infoPenting.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman utama
                info penting</a>
            <div class="text-right">
                <a href="{{ route('infoPenting.edit', ['infoPenting' => $infoPenting->id]) }}" class="btn btn-primary"><span
                        class="fa fa-pencil"></span> Edit Info</a>
            </div>
        </div>
        <h1>{{ $infoPenting->judul_info }}</h1>
        <div class="content mt-3">
            <p>{{ $infoPenting->deskripsi }}</p>
        </div>
    </div>
@endsection
