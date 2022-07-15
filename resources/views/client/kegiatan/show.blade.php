@extends('layouts.client.app')

@section('content')
<header>
    <div class="page-header min-vh-90"
        style="background-image: url('{{asset('dist/img/client/village.jpg')}}'); max-width: 100%;" loading="lazy">
        <span class="mask bg-gradient-dark opacity-5"> </span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                    <h1 class="text-white mb-1">Kegiatan</h1>
                    <h5 class="text-white mb-3">Kelurahan Cibabat</h5>
                    <p class="text-white opacity-8 lead pe-5 me-5">Ini adalah halaman informasi Kegiatan di RW16</p>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="row">
    <div class="col-lg col-md col-sm">
        <div class="card card-body blur shadow-blur mx-3 mb-5 mt-n6">
            <section class="pt-3">
                <div class="container">
                    <div class="row">
                        <h2 class="mb-1">{{ $kegiatans->judul_kegiatan }}</h2>
                        <p class="text-xs text-muted">Posted {{ $kegiatans->created_at->diffForHumans() }}</p>
                        <hr class="mb-3">
                        <div class="col-lg py-4">
                            <div class="row justify-content-start">
                                <div class="col">
                                    <div class="info">
                                        <center><img src="/image/kegiatan/{{$kegiatans->foto_kegiatan}}" alt=""
                                                class="py-4 img-fluid"></center>
                                        <p class="text-dark ms-3">{!! $kegiatans->deskripsi !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="card card-body blur shadow-blur mx-3  mt-n6">
            <section class="pt-3">
                <div class="container-fluid">
                    <div class="row">
                        <h2 class="mb-5">Komentar</h2>
                        <hr class="mb-3">
                        <div class="col-lg py-4">
                            <div class="row justify-content-start">

                                @foreach ($komentar as $data)
                                <div class="row justify-content-start">
                                    <div class="col">
                                        <div class="info">
                                            <h6 class="text-dark text-gradient">Anonim</h6>
                                            <p class="mt-n2" style="font-size: 12px;">
                                                {{$data->created_at->diffForHumans()}}</p>
                                            <p class="text-dark">{{$data->komentar}}</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                @endforeach

                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="col">
                                            <h6 class="">Tulis Komentar</h6>
                                            @if ($errors->any())
                                            <div class="alert alert-danger text-white">
                                                <strong>Komentar tidak boleh kosong.</strong> 
                                            </div>
                                            @endif
                                            <form role="form" action="{{ route('client.kegiatan.create.komentar') }}"
                                                id="contact-form" method="post" autocomplete="off">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="input-group mb-4 input-group-static">
                                                        <label>Komentar Anda</label>
                                                        <textarea name="komentar" class="form-control" id="message"
                                                            placeholder="Tulis Komentar Anda Disini"
                                                            rows="4" required='required'></textarea>
                                                        <input type="text" name="id_kegiatan" class="form-control"
                                                            hidden value="{{ $kegiatans->id }}">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div
                                                                class="form-check form-switch mb-4 d-flex align-items-center">
                                                                <input class="form-check-input" type="checkbox" required= "required"
                                                                    id="flexSwitchCheckDefault">
                                                                <label class="form-check-label ms-3 mb-0"
                                                                    for="flexSwitchCheckDefault">Saya setuju dengan <a
                                                                        href="javascript:;"
                                                                        class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"><u>Ketentuan
                                                                            Berkomentar</u></a>.</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <button type="submit"
                                                                class="btn bg-gradient-primary w-100">Kirim
                                                                Komentar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>

</div>

<div class="container py-7">
  <div class="row mt-3">
    <div class="col-sm-4 col-6 mx-auto">
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ketentuan Berkomentar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <ol>
                <li>Berkomentarlah sesuai dengan isi artikel yang ada.</li>
                <li>Dihimbau agar tidak perlu mencantumkan link, karena mengandung unsur promosi dan spam yang tinggi.</li>
                <li>Hindari berkomentar yang berunsur SARA atau kata-kata kasar yang diluar batas kewajaran.</li>

              </ol>
            <div class="modal-footer justify-content-end">
              <button type="button" class="btn bg-gradient-dark" data-bs-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection