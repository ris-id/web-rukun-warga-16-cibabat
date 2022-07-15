@extends('layouts.client.app')

@section('content')
<header>
    <div class="page-header min-vh-90"
        style="background-image: url('{{asset('dist/img/client/village.jpg')}}'); max-width: 100%;" loading="lazy">
        <span class="mask bg-gradient-dark opacity-5"> </span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                <h1 class="text-white pt-3 mt-n5">Laporan Keuangan RUKUN WARGA 16 </h1>
                    <p class="lead text-white mt-3">informasi mengenai keuangan yang di miliki oleh RW 16 <br /> -------
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="row">
    <div class="col-lg col-md col-sm">
        <div class="card card-body blur shadow-blur mx-3 mb-5 mt-n6">
            <section class="pt-3">
                <div class="container">
                    <div class="row">
                        <h2 class="mb-1">Detail Keuangan Tanggal : {{ $lapkeu->created_at->format('j F, Y') }}</h2>
                        <hr class="mb-3">
                        <div class="col-lg py-4">
                            <div class="row justify-content-start">
                                <div class="col">
                                    <div class="info">
                                        <center><img src="/image/laporan-keuangan/{{$lapkeu->gambar}}" alt=""
                                                class="py-4 img-fluid"></center>
                                        <p class="text-dark ms-3">{!! $lapkeu->informasi !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

@endsection