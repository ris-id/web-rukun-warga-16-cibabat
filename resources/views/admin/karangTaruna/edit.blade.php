@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <a href="{{ route('karangTaruna.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman utama
                Karang Taruna</a>
        </div>
        <h1>Masukan Data Karang Taruna</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card p-4">
            <form action="{{ route('karangTaruna.update', $karangTaruna->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
    
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Foto</strong>
                            <input type="file" name="gambar" class="form-control" placeholder="Gambar">
                            <br>
                            <img src="/image/karang-taruna/{{ $karangTaruna->foto }}" width="300px">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Konten</strong>
                            <textarea name="konten" class="form-control  tinymce-editor">{!! $karangTaruna->konten !!}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </div>
    
            </form>
        </div>
    </div>
@endsection
