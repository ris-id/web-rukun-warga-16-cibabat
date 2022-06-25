@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <div class="d-flex flex-row">
                <a href="{{ route('infoPenting.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman utama info penting</a>
                <div class="ml-auto text-right">
                    <a href="{{ route('infoPenting.edit', ['infoPenting' => $infoPenting->id]) }}" class="btn btn-outline-success">
                        <span class="fa fa-pen"></span> Edit Info</a>
                </div>
            </div>
        </div>
        <div class="card p-4">
            <h1>{{ $infoPenting->judul_info }}</h1>
            <div class="content mt-3">
                <p>{{ $infoPenting->deskripsi }}</p>
            </div>
        </div>
    </div>
@endsection
