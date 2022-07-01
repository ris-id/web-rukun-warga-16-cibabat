@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <div class="d-flex flex-row">
                <a href="{{ route('laporanKeuangan.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman
                    utama
                    laporan keuangan</a>
                <div class="ml-auto text-right">
                    <a href="{{ route('laporanKeuangan.edit', ['laporanKeuangan' => $laporanKeuangan->id]) }}"
                        class="btn btn-outline-success">
                        <span class="fa fa-pen"></span> Edit Info</a>
                </div>
            </div>
        </div>
        <div class="card p-4">
            <div class="m-auto text-center">
                <img src="/image/laporan-keuangan/{{ $laporanKeuangan->gambar }}" class="card-img-top w-50">
            </div>
            <div class="content mt-3">
                <p>{!! $laporanKeuangan->informasi !!}</p>
            </div>
        </div>
    </div>
@endsection
