@extends('layouts.client.app')

@section('content')
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background: white">
    <!-- <span class="mask bg-gradient-dark opacity-4"></span> -->
    <div class="container-fluid">
      <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
          <img src="../dist/img/client/village-01.png" class="one-third js-fullheight align-self-end order-md-last img-fluid" style="width: 600px;" alt="">
        <!-- <div class="col-lg-6 offset-lg-1 order-lg-2"> -->
              <!-- <a class="d-block blur-shadow-image d-flex mt-3"> -->
              <!-- </a> -->
        <!-- </div> -->
        <div class="col-lg-6 col-md-4  flex-column my-auto">
              <h1 class="text-dark pt-3">Informasi Penting</h1>
              <h4 class="text-dark">Rukun Warga 16</h4>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <section class="pt-3">
        <div class="row">
            <h5>Post Terbaru</h5>
            @foreach($kegiatan as $kegiatan)
                <div class="col">
                    <div class="card card-background card-background-mask-dark align-items-start mt-4">
                        <div class="full-background cursor-pointer" style="background-image: url('https://images.unsplash.com/photo-1604213410393-89f141bb96b8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTA5fHxuYXR1cmV8ZW58MHx8MHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60')"></div>
                        <div class="card-body">
                            <h5 class="text-white mb-0"><a href="{{ url('/matakuliah/kegiatan/' . $kegiatan->id) }}"></a> {{ $kegiatan->judul_kegiatan }}</h5>
                        </div>
                    </div>
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
                        <p class="text-dark ms-3">{{ $data->deskripsi }}</p>
                        <a href="javascript:;" class="text-primary icon-move-right">Baca Selengkapnya
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </section>
</div>
@endsection