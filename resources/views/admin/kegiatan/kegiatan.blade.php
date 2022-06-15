@extends('layouts.admin.dashboard')
@section('content')
    <div class="container p-3">
        <h1>Halaman Utama Kegiatan Rukun Warga 16</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="ml-auto text-right">
            <a href="{{ route('kegiatan.create') }}" class="btn btn-primary">Tambah Kegiatan</a>
        </div>
        <div style="height: 500px;overflow-y: scroll;">
            <div class="row mt-4">
                @foreach ($data as $item)
                    <div class="col-md-4">
                        <div class="card p-4">
                            <img src="/dist/img/default-150x150.png" class="img-thumbnail w-50 h-50">
                            <a href={{ route('kegiatan.show', ['kegiatan' => $item->id]) }} class="mt-3">
                                <h5>{{ $item->judul_kegiatan }}</h5>
                            </a>
                            <p class="text-truncate">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
