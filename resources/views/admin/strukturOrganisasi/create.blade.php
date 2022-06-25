@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <a href="{{ route('strukturOrganisasi.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman
                utama struktur Organisasi</a>
        </div>
        <h1>Masukan Data Struktur Organisasi</h1>
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
        <form action="{{ route('strukturOrganisasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card p-4">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Foto Struktur Organisasi</strong>
                            <input type="file" name="foto" class="form-control" placeholder="image" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Ketua RW</strong>
                            <input type="text" name="ketua_rw" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Wakil Ketua</strong>
                            <input type="text" name="wakil_ketua" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Sekretaris</strong>
                            <input type="text" name="sekretaris" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Bendahara</strong>
                            <input type="text" name="bendahara" class="form-control" placeholder="Name">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keamanan</strong>
                        <input type="text" name="keamanan" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pelayanan Masyarakat</strong>
                        <input type="text" name="pelayanan_masyarakat" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pemuda Olahraga</strong>
                        <input type="text" name="pemuda_olahraga" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kesehatan Masyarakat</strong>
                        <input type="text" name="kesehatan_masyarakat" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                    <button type="submit" class="btn btn-outline-primary">Publish</button>
                </div>
            </div>
    </div>

    </form>
    </div>
@endsection
