@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <a href="{{ route('pkk.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman utama
                Anggota PKK</a>
        </div>
        <h1>Masukan Data Anggota</h1>
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
        <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Anggota</strong>
                        <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jabatan</strong>
                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                        <button type="submit" class="btn btn-outline-primary">Publish</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
