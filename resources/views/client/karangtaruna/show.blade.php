@extends('layouts.client.app')

@section('content')
<header>
    <div class="page-header min-vh-90" style="background-image: url('{{asset('dist/img/client/stephan.jpg')}}'); max-width: 100%;" loading="lazy">
        <span class="mask bg-gradient-dark opacity-5"> </span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                </div>
            </div>
        </div>
    </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <section class="pt-3">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="mt-n8 mt-md-n9 text-center">
                        <img class="img-fluid w-50" src="/image/karang-taruna/{{ $katar->foto }}" alt="Karangtaruna">
                    </div>
                    <div class="row py-5">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h3 class="mb-0">{{ $katar->judul }}</h3>
                        </div>
                        <p class="text-lg mb-0">
                            {!! $katar->konten !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-5">Informasi karang taruna lainnya</h3>
                </div>
            </div>
            <div class="row">
                @foreach($katarlist as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                                <a class="dblock">
                                    <img src="/image/karang-taruna/{{ $item->foto }}" alt="Karangtaruna" class="img-fluid shadow border-radius-lg" loading="lazy">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <h5>
                                    <a href="" class="text-dark font-weight-bold">{{ $item->judul }}</a>
                                </h5>
                                <p class="short-text">{!! $item->konten !!}</p>
                                <a href="{{ url('/karangtaruna/' . $item->id) }}" class="text-info text-sm icon-move-right">
                                    Selengkapnya
                                    <i class="fas fa-arrow-right text-xs ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="card card-blog card-background cursor-pointer">
                        <div class="full-background" style="background-image: url('{{asset('dist/img/client/bg9.jpg')}}');"></div>
                        <div class="card-body">
                            <div class="content-left text-start my-auto py-4">
                                <h2 class="card-title text-white">Lihat kegiatan lainnya</h2>
                                <p class="card-description text-white">
                                    Anda bisa melihat kegiatan karang taruna lainnya disini
                                </p>
                                <a href="{{ url('/karangtaruna/') }}" class="text-white text-sm icon-move-right">
                                    Selengkapnya <i class="fas fa-arrow-right text-xs ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
