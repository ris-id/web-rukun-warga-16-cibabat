@extends('layouts.client.app')

@section('content')
<header>
    <div class="page-header min-vh-90" style="background-image: url('{{asset('dist/img/client/stephan.jpg')}}'); max-width: 100%;" loading="lazy">
        <span class="mask bg-gradient-dark opacity-5"> </span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                    <h1 class="text-white mb-1">Informasi Karang Taruna</h1>
                    <h5 class="text-white mb-4">Kelurahan Cibabat</h5>
                    <p class="text-white opacity-8 lead pe-5 me-5">Ini adalah halaman informasi-informasi Karang Taruna</p>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <section class="pt-3">
        <div class="mx-4">
            <h3>Informasi Kegiatan Karang Taruna - Cibabat</h3>
            <hr>
        </div>
        <!-- <div class="container">
            <div class="pt-4">
                <div class="row py-4">
                    <div class="col-lg my-auto py-3">
                        <h3>Tentang Kami</h3>
                        <p class="pe-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat est facilis
                            eligendi! Omnis repellendus sapiente at aperiam earum deleniti error fuga accusantium voluptate
                            esse. Magnam sit earum fugit veritatis molestiae.</p>
                        <a href="javascript:;" class="text-primary icon-move-right">Baca Selengkapnya
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                    <div class="col-lg my-auto py-4">
                        <img class="img-fluid" src="{{asset('dist/img/client/bg.jpg')}}" alt="Kegiatan">
                    </div>
                </div>

                <div class="row py-4">
                    <div class="col-lg-5 my-auto py-4">
                        <img class="img-fluid" src="{{asset('dist/img/client/bg.jpg')}}" alt="Kegiatan">
                    </div>
                    <div class="col-lg-7 my-auto py-3">
                        <h3>Tentang Kami</h3>
                        <p class="pe-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat est facilis
                            eligendi! Omnis repellendus sapiente at aperiam earum deleniti error fuga accusantium voluptate
                            esse. Magnam sit earum fugit veritatis molestiae.</p>
                        <a href="javascript:;" class="text-primary icon-move-right">Baca Selengkapnya
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="pt-4">
                @foreach($katar as $item)
                    @if($loop->iteration % 2 == 0)
                        <div class="row py-4">
                            <div class="col-lg-5 my-auto py-4">
                                <img class="img-fluid" src="/image/karang-taruna/{{ $item->foto }}" alt="KarangTaruna">
                            </div>
                            <div class="col-lg-7 my-auto py-3">
                                <!-- <h3>{{ $item->judul_kegiatan }}</h3> -->
                                <p class="pe-5 short-text">{{ $item->konten }}</p>
                                <a href="{{ url('/karangtaruna/' . $item->id) }}" class="text-primary icon-move-right">Baca Selengkapnya
                                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                                </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row py-4">
                            <div class="col-lg my-auto py-3">
                                <!-- <h3>{{ $item->judul_kegiatan }}</h3> -->
                                <p class="pe-5 short-text">{{ $item->konten }}</p>
                                <a href="{{ url('/karangtaruna/' . $item->id) }}" class="text-primary icon-move-right">Baca Selengkapnya
                                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                                </a>
                            </div>
                            <div class="col-lg my-auto py-4">
                                <img class="img-fluid" src="/image/karang-taruna/{{ $item->foto }}" alt="KarangTaruna">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
