@extends('layouts.client.app')

@section('content')
    <header>
        <div class="page-header min-vh-70"
            style="background-image: url('{{ asset('dist/img/client/village.jpg') }}'); max-width: 100%;" loading="lazy">
            <span class="mask bg-gradient-dark opacity-5"> </span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                        <h1 class="text-white mb-1">Kritik & Saran</h1>
                        <h5 class="text-white mb-4">Kelurahan Cibabat</h5>
                        <p class="text-white opacity-8 lead pe-5 me-5">Ini adalah halaman untuk mengirim kritik & saran</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @include('sweetalert::alert')
    <div class="row">
        <div class="col-md-10">
            <div class="card card-body blur shadow-blur ms-12 mt-n10">
                <section class="pt-3">
                    <div class="container">
                        <h1 class="mb-5">Kritik & Saran</h1>
                        <form action="{{ route('client.kritiksaran.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="input-group input-group-dynamic mb-4">
                                            <label class="form-label">Nama</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group input-group-dynamic">
                                        <label class="form-label">Alamat Email</label>
                                        <input class="form-control" type="email" name="email">
                                    </div>
                                </div>
                                <div class="input-group mb-4 input-group-static">
                                    <label>Pesan Anda</label>
                                    <textarea class="form-control" style="height:150px" name="pesan"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn bg-gradient-primary w-100">Kirim
                                            Pesan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div>
@endsection