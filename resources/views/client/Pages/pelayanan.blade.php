@extends('layouts.client.app')

@section('content')
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('{{asset('dist/img/client/bg3.jpg')}}')">
    <span class="mask bg-gradient-dark opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">PELAYANAN KAMI</h1>
          <p class="lead text-white mt-3">Berisi Informasi mengenai pelayanan yang tersedia <br/> ------- </p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

  <section class="pt-4">
    <div class="container">
      <center>
        <h1 class="mb-5"> Informasi pelayanan </h1>
      </center>
    </div>
  </section>




  <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
  <div class="container py-3">
    <div class="row justify-content-center">
      <div CLASS='col-sm-4'>
        <i class="fa-solid fa-user-group fa-2x" style="color:red"></i>
        <h5 style="text-align:center">Pelayanan Ekonomi</h5>
        <p>Pemberian pelayanan yang bersifat Ekonomi , yaitu Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div CLASS='col-sm-4'>
        <i class="fa-solid fa-file-invoice fa-2x"style="color:blue"></i>
        <h5 style="text-align:center">Pelayanan Umum</h5>
        <p>Pemberian pelayanan yang bersifat umum, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div CLASS='col-sm-4'>
       <i class="fa-solid fa-building fa-2x" style="color:grey"></i>
       <h5 style="text-align:center">Pelayanan Pembangunan</h5>
       <p>Pemberian pelayanan yang bersifat pembangunan,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

  </div>

</div>


</div>

<!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->


@endsection         