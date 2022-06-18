@extends('layouts.client.app')

@section('content')
<header>
    <div class="page-header min-vh-90" style="background-image: url('{{asset('dist/img/client/village.jpg')}}'); max-width: 100%;" loading="lazy">
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
            <h3>Karang Taruna - Cibabat</h3>
            <p class="short-text">Karang Taruna (Katar) RW16, Cibabat menggelar pengajian rutin, di Majelis Taklim Nurul Hayat RT2/6, belum lama ini.
                Pengajian ini dihadiri oleh tokoh masyarakat, para ketua RT lingkup RW16, dan warga RW16 Cibabat. Ketua Katar RW16 Cibabat, Fikri 
                Nugra mengatakan, pengajian ini sudah putaran kedua dilakukan.
                Sebelumnya, kata dia, berlangsung di Lapangan RT3, kemudian November ini di Majelis Taklim Nurul Hayat RT2, lalu selanjutnya berlokasi di RT5.
                “Pengajian ini akan rutin dilakukan dengan berkeliling di setiap RT yang ada di wilayah RW6 Kemirimuka dan akan dilakukan setiap awal bulannya,” ujar Fikri kepada Radar Depok.
                Pengajian, ungkapnya, selain untuk mempererat silaturahmi, juga untuk meningkatkan kualitas keimanan. Memperdalam ilmu agama dan membentuk akhlaq tul khorimah bagi umat muslim.
                Lebih lanjut, ia mengungkapkan rasa syukurnya terhadap kegiatan keagamaan, yang masih bisa berjalan dengan baik. Sekalipun para anggota Katar RW6 Kemirimuka disibukan dengan berbagai aktivitasnya.
                “Alhamdulillah, anggota Katar RW6 Kemirimuka akan rutin mengadakan kegiatan pengajian ini disetiap awal bulannya,” tandasnya.
            </p>
            <p><a href="" class="text-primary icon-move-right">Baca Selengkapnya</a></p>
        </div>
        <div class="container">
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
        </div>
        <!-- Disini nanti diganti menjadi kegiatan karang taruna -->
        <div class="container">
            <div class="pt-4">
                @foreach($kegiatan as $item)
                    @if($loop->iteration % 2 == 0)
                        <div class="row py-4">
                            <div class="col-lg-5 my-auto py-4">
                                <img class="img-fluid" src="/image/kegiatan/{{ $item->foto_kegiatan }}" alt="Kegiatan">
                            </div>
                            <div class="col-lg-7 my-auto py-3">
                                <h3>{{ $item->judul_kegiatan }}</h3>
                                <p class="pe-5 short-text">{{ $item->deskripsi }}</p>
                                <a href="javascript:;" class="text-primary icon-move-right">Baca Selengkapnya
                                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                                </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row py-4">
                            <div class="col-lg my-auto py-3">
                                <h3>{{ $item->judul_kegiatan }}</h3>
                                <p class="pe-5 short-text">{{ $item->deskripsi }}</p>
                                <a href="javascript:;" class="text-primary icon-move-right">Baca Selengkapnya
                                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                                </a>
                            </div>
                            <div class="col-lg my-auto py-4">
                                <img class="img-fluid" src="/image/kegiatan/{{ $item->foto_kegiatan }}" alt="Kegiatan">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
