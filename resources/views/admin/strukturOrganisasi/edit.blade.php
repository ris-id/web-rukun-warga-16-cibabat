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

        <form action="{{ route('strukturOrganisasi.update', $strukturOrganisasi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Foto</strong>
                        <input type="file" name="foto" class="form-control" placeholder="Foto">
                        <img src="/image/struktu-organisasi/{{ $strukturOrganisasi->foto }}" width="300px">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Ketua RW</strong>
                        <input type="text" name="ketua_rw" value="{{ $strukturOrganisasi->ketua_rw }}"
                            class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Wakil Ketua</strong>
                        <input type="text" name="wakil_ketua" value="{{ $strukturOrganisasi->wakil_ketua }}"
                            class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Sekretaris</strong>
                        <input type="text" name="sekretaris" value="{{ $strukturOrganisasi->sekretaris }}"
                            class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Bendahara</strong>
                        <input type="text" name="bendahara" class="form-control" value="{{ $strukturOrganisasi->bendahara }}">
                    </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keamanan</strong>
                        <input type="text" name="keamanan" class="form-control" value="{{ $strukturOrganisasi->keamanan }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pelayanan Masyarakat</strong>
                        <input type="text" name="pelayanan_masyarakat" class="form-control" value="{{ $strukturOrganisasi->pelayanan_masyarakat }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pemuda Olahraga</strong>
                        <input type="text" name="pemuda_olahraga" class="form-control" value="{{ $strukturOrganisasi->pemuda_olahraga }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kesehatan Masyarakat</strong>
                        <input type="text" name="kesehatan_masyarakat" class="form-control" value="{{ $strukturOrganisasi->kesehatan_masyarakat }}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </div>

        </form>
    </div>
@endsection
