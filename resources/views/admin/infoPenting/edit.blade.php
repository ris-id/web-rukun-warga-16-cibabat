@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <h1>Edit Info Penting</h1>
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

        <form action="{{ route('infoPenting.update', $infoPenting->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Judul Info:</strong>
                        <input type="text" name="judul_info" value="{{ $infoPenting->judul_info }}"
                            class="form-control" placeholder="judul_info">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Deskripsi:</strong>
                        <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Detail">{{ $infoPenting->deskripsi }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </div>

        </form>
    </div>
@endsection
