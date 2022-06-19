@extends('layouts.client.app')

@section('content')
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('{{asset('dist/img/client/bg4.jpg')}}')">
    <span class="mask bg-gradient-dark opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">ASET RUKUN WARGA 16 </h1>
          <p class="lead text-white mt-3">informasi mengenai aset yang di miliki oleh RW 16  <br/> ------- </p>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

  <section class="pt-4">
    <div class="container">
      <center>
        <h1 class="mb-5"> Aset Tersedia </h1>
      </center>
    </div>
  </section>




  <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
  <div class="container py-3">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">

            <h3 class="mb-0">Nama Aset 1</h3>
            <div class="mb-1 text-muted">Jumlah : 5</div>
            <p class="card-text mb-auto">aset ini di berikan oleh kelurahan sebagai sarana untuk masyarakat RW 16</p>
            
          </div>
          <div class="col-auto d-none d-lg-block">

            <img src ="{{asset('dist/img/client/bg4.jpg')}}" class="bd-placeholder-img" width="200" height="250">
            
            
          </div>
        </div>
      </div>


      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">

            <h3 class="mb-0">Nama Aset 2</h3>
            <div class="mb-1 text-muted">Jumlah : 2</div>
            <p class="mb-auto">aset ini di berikan oleh kelurahan sebagai sarana untuk masyarakat RW 16</p>
            
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src ="{{asset('dist/img/client/bg.jpg')}}" class="bd-placeholder-img" width="200" height="250">
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">

            <h3 class="mb-0">Nama Aset 5</h3>
            <div class="mb-1 text-muted">Jumlah : 10</div>
            <p class="mb-auto">aset ini di berikan oleh kelurahan sebagai sarana untuk masyarakat RW 16</p>
            
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src ="{{asset('dist/img/client/bg3.jpg')}}" class="bd-placeholder-img" width="200" height="250">
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">

            <h3 class="mb-0">Nama Aset 4</h3>
            <div class="mb-1 text-muted">Jumlah : 1</div>
            <p class="mb-auto">aset ini di berikan oleh kelurahan sebagai sarana untuk masyarakat RW 16</p>
            
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src ="{{asset('dist/img/client/bg9.jpg')}}" class="bd-placeholder-img" width="200" height="250">
          </div>
        </div>
      </div>
      
    </div>

  </div>

</div>


</div>

<!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->


@endsection         