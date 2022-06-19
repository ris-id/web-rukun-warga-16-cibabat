@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <a href="{{ route('laporanKeuangan.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman utama Laporan Keuangan</a>
        </div>
        <h1>Masukan Data Laporan Keuangan</h1>
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
        <form action="{{ route('laporanKeuangan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Foto / Gambar</strong>
                        <input type="file" name="gambar" class="form-control" placeholder="image" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Informasi</strong>
                        <input type="text" name="informasi" class="form-control" placeholder="Informasi">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </div>

        </form>
    </div>
@endsection
