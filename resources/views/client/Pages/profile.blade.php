@extends('layouts.client.app')

@section('content')
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('{{asset('dist/img/client/bg.jpg')}}')">
    <span class="mask bg-gradient-dark opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">Rukun Warga 16</h1>
          <p class="lead text-white mt-3">Profil RW <br/> ------- </p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

    <section class="pt-7">
        <div class="container">
            <h1 class="mb-5 d-flex justify-content-center">Tentang kami</h1>
            
            <div class="row  d-flex justify-content-center">
              <div class="col-md-5">
                @foreach ($profil as $profil)
                  <img src="/image/logo/{{$profil->logo}}" alt="" class="py-4 img-fluid">
                @endforeach
              </div>
            </div>
        </div>
    </section>

<div class="card text-center">
      <div class="overflow-hidden position-relative border-radius-lg bg-cover p-3 shadow" style="background-image: url('/image/background/card-background.webp')">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="card-body position-relative z-index-1 d-flex flex-column mt-5">
          @foreach (\App\Models\Profil::all() as $profil)
          <p class="text-white font-weight-bolder">{!! $profil -> deskripsi !!}</p>
          @endforeach
        </div>
      </div>
    </div>

</div>

<!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->

  
@endsection