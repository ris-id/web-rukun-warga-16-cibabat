@extends('layouts.client.app')

@section('content')
<header>
    <div class="page-header min-vh-90" style="background-image: url('{{asset('dist/img/client/village.jpg')}}'); max-width: 100%;" loading="lazy">
        <span class="mask bg-gradient-dark opacity-5"> </span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                    <h1 class="text-white mb-1">Informasi Penting</h1>
                    <h5 class="text-white mb-4">Kelurahan Cibabat</h5>
                    <p class="text-white opacity-8 lead pe-5 me-5">Ini adalah halaman informasi-informasi penting</p>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <section class="pt-3">
        <div class="row">
            <div class="col col-lg">
                <h5>Informasi Terbaru</h5>
            </div>
            <div class="row mb-2 mx-auto">
                @foreach($kegiatan as $kegiatan)
                    <div class="col col-md-3">
                        <a href="{{ url('/kegiatan/' . $kegiatan->id) }}">
                            <div class="card card-background card-background-mask-dark align-items-start">
                                <div class="full-background cursor-pointer" style="background-image: url('/image/kegiatan/{{ $kegiatan->foto_kegiatan }}')"></div>
                                <div class="card-body">
                                    <p class="text-lg text-white mb-0">{{ $kegiatan->judul_kegiatan }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="container">
            <div class="row py-4">
                
            @foreach($data as $data)
                <!-- <div class="col-lg my-auto py-3">
                    <h3></h3>
                    <p class="pe-5"></p>
                </div> -->
    
                <div class="card bg-gradient-default mt-5">
                    <div class="card-body px-5">
                        <h3 class="text-dark text-gradient">{{ $data->judul_info }}</h3>
                        <div id="desc" class="text-dark ms-3 short-text">{!! $data->deskripsi !!}</div>
                        <a href="{{ url('/infopenting/' . $data->id) }}" class="text-primary icon-move-right">Baca Selengkapnya
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                @endforeach
            </div>
            <hr>
        </div>
        <div class="container">

            @if (count($data) > 0)
                <div class="row py-4">    
                    @foreach($data as $data)
                        <div class="card bg-gradient-default mt-5">
                            <div class="card-body px-5">
                                <h3 class="text-dark text-gradient">{{ $data->judul_info }}</h3>
                                <p class="text-dark ms-3 short-text">{{ $data->deskripsi }}</p>
                                <a href="{{ url('/infopenting/' . $data->id) }}" class="text-primary icon-move-right">Baca Selengkapnya
                                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row py-4">
                    <div class="card bg-gradient-default mt-5">
                        <div class="card-body px-5">
                            <h3 class="text-dark text-gradient">Informasi Penting</h3>
                            <p class="text-dark ms-3 short-text">Disini adalah tempat untuk melihat informasi-informasi penting dari Rukun Warga 16</p>
                            <a href="" class="text-primary icon-move-right">Baca Selengkapnya
                                <i class="fas fa-arrow-right text-sm ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endIf
        </div>
    </section>
</div>
@endsection
