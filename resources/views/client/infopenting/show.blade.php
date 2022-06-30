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
            <div class="container">
                <div class="row align-items-center">
                    <h2>Detail Informasi Penting</h2>
                    <div class="col-lg-7">
                        <div class="row justify-content-start">
                            <div class="col">
                                <div class="info">
                                    <h3 class="text-dark text-gradient">{{ $info->judul_info }}</h3>
                                    <p class="text-dark ms-3">{{ $info->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
                        <div class="card">
                            <div class="row mx-auto my-3">
                                <div class="col col-md-7">
                                    <h5>Informasi Terbaru</h5>
                                </div>
                                <hr>
                                @foreach($kegiatan as $kegiatan)
                                    <div class="col-md-6">
                                        <a href="{{ url('/kegiatan/' . $kegiatan->id) }}">
                                            <div class="card card-background card-background-mask-dark align-items-start mt-2">
                                                <div class="full-background cursor-pointer" style="background-image: url('https://images.unsplash.com/photo-1604213410393-89f141bb96b8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTA5fHxuYXR1cmV8ZW58MHx8MHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60')"></div>
                                                <div class="card-body">
                                                    <h5 class="text-white mb-0" style="font-size: 15px;"><a class="text-white" href="{{ url('/kegiatan/' . $kegiatan->id) }}"> {{ $kegiatan->judul_kegiatan }}</a></h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row mx-auto my-3">
                                <div class="col">
                                    <h5>Info Penting Lainnya</h5>
                                </div>
                                <hr>
                                @foreach($infopenting as $info)
                                    <div class="col-md-6">
                                        <a href="{{ url('/kegiatan/' . $kegiatan->id) }}">
                                            <div class="card card-background card-background-mask-dark align-items-start mt-2">
                                                <div class="full-background cursor-pointer" style="background-image: url('https://images.unsplash.com/photo-1604213410393-89f141bb96b8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTA5fHxuYXR1cmV8ZW58MHx8MHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60')"></div>
                                                <div class="card-body">
                                                    <h5 class="text-white mb-0" style="font-size: 15px;">{{ $info->judul_info }}</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
@endsection