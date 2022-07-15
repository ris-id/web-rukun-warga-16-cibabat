@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <a href="{{ route('infoPenting.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman utama
                info penting</a>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('infoPenting.edit', ['infoPenting' => $infoPenting->id]) }}"
                    class="btn btn-outline-success mr-4"><span class="fa fa-pencil"></span> Edit
                    Data</a>
                <form method="POST" action="{{ route('infoPenting.destroy', $infoPenting->id) }}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-outline-danger show_confirm " data-toggle="tooltip"
                        title='Delete'>Hapus Data</button>
                </form>
            </div>

        </div>
        <div class="card p-4">
            <h1>{{ $infoPenting->judul_info }}</h1>
            <div class="content mt-3">
                <p>{!! $infoPenting->deskripsi !!}</p>
            </div>
        </div>
    </div>
@endsection
