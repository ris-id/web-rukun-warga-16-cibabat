@extends('layouts.client.app')

@section('content')
<header>
    <div class="page-header min-vh-90"
        style="background-image: url('{{ asset('dist/img/client/bg.jpg') }}'); max-width: 100%;" loading="lazy">
        <span class="mask bg-gradient-dark opacity-5"> </span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                    <h1 class="text-white mb-1">Rukun Warga 16</h1>
                    <h5 class="text-white mb-4">Kelurahan Cibabat</h5>
                    <p class="text-white opacity-8 lead pe-5 me-5">Selamat datang di website kami</p>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

    <section id="article" class="pt-7">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mb-5">Kegiatan kami</h1>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{ url('/kegiatan/') }}" class="text-primary icon-move-right">Lihat Semua Kegiatan
                        <i class="fas fa-arrow-right text-sm ms-1"></i></a>
                </div>
            </div>

            <div class="row py-4">
                @foreach ($data as $data)
                <div class="col-lg-6 my-auto py-3">
                    <h3>{{ $data->judul_kegiatan }}</h3>
                    <p class="text-xs text-muted">Posted {{ $data->created_at->diffForHumans() }}</p>
                    <img src="/image/kegiatan/{{$data->foto_kegiatan}}" alt="" class="py-4 img-fluid">
                    <div id="desc" class="pe-5 short-text">{!! $data->deskripsi !!}</div>
                    <a href="{{ url('/kegiatan/' . $data->id) }}" class="text-primary icon-move-right">Baca
                        Selengkapnya
                        <i class="fas fa-arrow-right text-sm ms-1"></i>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    <section id="article" class="pt-7">
        <div class="container">
        <div class="row">
                <div class="col">
                    <h1 class="mb-5">Kegiatan kami</h1>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{ url('/infopenting/') }}" class="text-primary icon-move-right">Lihat Semua Info Penting
                        <i class="fas fa-arrow-right text-sm ms-1"></i></a>
                </div>
            </div>
            @foreach ($infoPenting as $data)
            <div class="row py-4">
                <div class="col-lg my-auto py-3">
                    <h3>{{ $data->judul_info }}</h3>
                    <p class="text-xs text-muted">Posted {{ $data->created_at->diffForHumans() }}</p>
                    <div id="desc" class="pe-5 short-text">{!! $data->deskripsi !!}</div>
                    <a href="{{ url('/infopenting/' . $data->id) }}" class="text-primary icon-move-right">Baca
                        Selengkapnya
                        <i class="fas fa-arrow-right text-sm ms-1"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</div>
@endsection