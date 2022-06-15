@extends('layouts.admin.dashboard')
@section('content')
    <div class="container pb-5">
        <div class="pt-5 mb-2">
            <a href="{{ route('kritikSaran.index') }}"><span class="fa fa-arrow-left"></span> Kembali ke halaman utama
                kritik saran</a>
        </div>
        <h1>{{ $kritikSaran->kritik }}</h1>
        <div class="content mt-3">
            <p>{{ $kritikSaran->saran }}</p>
        </div>
    </div>
@endsection
