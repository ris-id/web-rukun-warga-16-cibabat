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
            <h1 class="mb-5">Kegiatan kami</h1>
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
    </section>




  <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
  <div class="container py-6">
  <div class="row">
    <div class="col-lg-6 my-auto">
      <h3 class="mt-5 mt-lg-0">Read More About Us</h3>
      <p class="pe-5">Pain is what we go through as we become older. We get insulted by others, lose trust for those others. We get back stabbed by friends. It becomes harder for us to give others a hand.</p>
      <a href="javascript:;" class="text-primary icon-move-right">More about us
        <i class="fas fa-arrow-right text-sm ms-1"></i>
      </a>
    </div>
    <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0">
      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
          <i class="fas fa-ship opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">It becomes harder for us to give others a hand. <br> We get our heart broken by people we love.</p>
        </div>
      </div>

      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
          <i class="fas fa-handshake opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">As we live, our hearts turn colder. <br>Cause pain is what we go through as we become older.</p>
        </div>
      </div>
      <div class="p-3 info-horizontal">
        <div class="icon icon-shape  bg-gradient-primary shadow-primary text-center">
          <i class="fas fa-hourglass opacity-10"></i>
        </div>
        <div class="description ps-3">
          <p class="mb-0">When we lose family over time. <br> What else could rust the heart more over time? Blackgold.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card text-center">
      <div class="overflow-hidden position-relative border-radius-lg bg-cover p-3" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/window-desk.jpg')">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="card-body position-relative z-index-1 d-flex flex-column mt-5">
          <p class="text-white font-weight-bolder">User #hashtag in a photo on social media and get $10 for each purchase you make.</p>
          <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-4" href="javascript:;">
            Read More
            <i class="material-icons text-sm ms-1 position-relative" aria-hidden="true">arrow_forward</i>
          </a>
        </div>
      </div>
    </div>

</div>

<!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->

  
@endsection