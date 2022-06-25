@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <a href="{{ route('kritikSaran.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman utama
                kritik saran</a>
        </div>
        <div class="card p-4">
            <p>Dari : {{ $kritikSaran->name }}</p>
            <p>Email: {{ $kritikSaran->email }}</p>
            <div class="content mt-3">
                <p><b>Pesan</b></p>
                <p>{{ $kritikSaran->pesan }}</p>
            </div>
        </div>
    </div>
@endsection
