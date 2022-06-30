@extends('layouts.client.app')

@section('content')
<header>
    <div class="page-header min-vh-90"
        style="background-image: url('{{ asset('dist/img/client/village.jpg') }}'); max-width: 100%;" loading="lazy">
        <span class="mask bg-gradient-dark opacity-5"> </span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                    <h1 class="text-white mb-1">Kegiatan</h1>
                    <h5 class="text-white mb-4">Kelurahan Cibabat</h5>
                    <p class="text-white opacity-8 lead pe-5 me-5">Ini adalah halaman Kegiatan</p>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="container-fluid">
<div class="row">
    <div class="col-md-8 mt-n6">
        <div class="card card-body blur shadow-blur">
            <section class="pt-3">
                <div class="container">
                    <h1 class="mb-5">Kegiatan kami</h1>
                    <hr>
                    @foreach ($kegiatans as $data)
                    <div class="row py-4">
                        <div class="col-lg my-auto py-3">
                            <h3>{{ $data->judul_kegiatan }}</h3>
                            <img src="/image/kegiatan/{{$data->foto_kegiatan}}" alt="" class="py-4 img-fluid">
                            <p class="pe-5 short-text">{!! $data->deskripsi !!}</p>
                            <a href="{{ url('/kegiatan/' . $data->id) }}" class="text-primary icon-move-right">Baca
                                Selengkapnya
                                <i class="fas fa-arrow-right text-sm ms-1"></i>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        {{$kegiatans->links()}}
                    </div>
                </div>
            </section>
        </div>
    </div>
        <div class="col-md-4 mt-n6">
            <div class="card card-body blur shadow-blur">
                <section class="pt-3">
                    <div class="container">
                        <div class="row">
                            <h2 class="mb-5">Informasi Kegiatan Terbaru</h2>
                            <hr class="mb-3">
                            <div class="col-lg ms-auto mt-lg-0 mt-4">
                                @foreach ($listKegiatan as $kegiatan)
                                <div class="col-md">
                                    <a href="{{ url('/kegiatan/' . $kegiatan->id) }}">
                                        <div
                                            class="card card-background card-background-mask-dark align-items-start mt-2">
                                            <div class="full-background cursor-pointer"
                                                style="background-image: url('https://images.unsplash.com/photo-1604213410393-89f141bb96b8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTA5fHxuYXR1cmV8ZW58MHx8MHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60')">
                                            </div>
                                            <div class="card-body mx-auto">
                                                <h5 class="text-white mb-0" style="font-size: 15px;">
                                                    {{ $kegiatan->judul_kegiatan }}
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
</div>
@endsection