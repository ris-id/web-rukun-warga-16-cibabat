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

        @foreach ($anggotaPKK as $item)
            <div class="pt-4">
                <div>
                    <a href="{{ route('anggota.index') }}"><span class="fa fa-arrow-left"></span> Kembali </a>
                </div>
                <div class="d-flex flex-row">
                    <h1>Edit Data Anggota</h1>
                </div>
            </div>
            <div class="card p-4">
                <form action="{{ route('anggota.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama Anggota</strong>
                                <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota"
                                    value="{{ $item->nama_anggota }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Jabatan</strong>
                                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan"
                                    value="{{ $item->jabatan }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                            <button type="submit" class="btn btn-outline-primary">Publish</button>
                        </div>
                    </div>
                </form>
            </div>
        @endforeach
    </div>
@endsection
