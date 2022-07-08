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
    @foreach($aset as $data)
    <div class="row mb-0">
      <div class="col-md-12">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-2 d-flex flex-column position-static">
            <h3 class="mb-0">{{ $data->nama_aset}}</h3>
            <div class="mb-1 text-muted">Jumlah : {{ $data->jumlah}}</div>
            <p class="card-text mb-auto">{{ $data->informasi}}</p>
            
          </div>
          <div class="col-auto d-none d-lg-block">

            <img src ="/image/aset/{{$data->foto}}" class="bd-placeholder-img" width="200" height="100">
            
            
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  

</div>


</div>

<!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->


@endsection        