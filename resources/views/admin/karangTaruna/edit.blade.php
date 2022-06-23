@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
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

        <form action="{{ route('karangTaruna.update', $karangTaruna->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Foto</strong>
                        <input type="file" name="gambar" class="form-control" placeholder="Gambar">
                        <img src="/image/karang-taruna/{{ $karangTaruna->foto }}" width="300px">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Konten</strong>
                        <input type="text" name="konten" value="{!! $karangTaruna->konten !!}" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </div>

        </form>
    </div>
@endsection
