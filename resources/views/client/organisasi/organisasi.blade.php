@extends('layouts.client.app')

@section('content')
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('{{asset('dist/img/client/bg9.jpg')}}')">
    <span class="mask bg-gradient-dark opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
          <h1 class="text-white pt-3 mt-n5">Struktur Organisasi</h1>
          <br>
          <h4 class="text-white pt-3 mt-n5">Rukun Warga 16</h4>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
    <section class="pt-7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="card p-5">
                            <a class="d-block blur-shadow-image d-flex mt-3 mx-auto">
                                <img src="../dist/img/client/struktur-organisasi.png" style="width: 700px;" alt="">
                            </a>
                    </div>
                </div>
                <!-- <div class="col-lg-9 mt-6">
                    <div class="row justify-content-start mt-5 mx-5"></div>
                </div> -->
                <h4 class="mt-6">Susunan Struktur Organisasi Rukun Warga 16</h4>
                <div class="col-lg-9 mt-2"></div>
                    <div class="row justify-content-start mt-5 mx-5"></div>
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-3xl text-gradient text-info mb-3">manager</i>
                                <h6>Ketua RW</h6>
                                <p>Nama Ketua</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-3xl text-gradient text-info mb-3">people</i>
                                <h6>Wakil Ketua RW</h6>
                                <p>Nama Wakil Ketua</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-3xl text-gradient text-info mb-3">people</i>
                                <h6>Sekretaris</h6>
                                <p>Nama Sekretaris</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-3xl text-gradient text-info mb-3">people</i>
                                <h6>Bendahara</h6>
                                <p>Nama Bendahara</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-3xl text-gradient text-info mb-3">people</i>
                                <h6>Seksi Keamanan</h6>
                                <p>Nama Seksi Keamanan</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-3xl text-gradient text-info mb-3">people</i>
                                <h6>Seksi Pelayanan Masyarakat</h6>
                                <p>Nama Seksi Pelayanan Masyarakat</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-3xl text-gradient text-info mb-3">people</i>
                                <h6>Seksi Pemuda dan Olahraga</h6>
                                <p>Nama Seksi Pemuda dan Olahraga</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-3xl text-gradient text-info mb-3">people</i>
                                <h6>Seksi Kesehatan Masyarakat</h6>
                                <p>Nama Seksi Kesehatan Masyarakat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection