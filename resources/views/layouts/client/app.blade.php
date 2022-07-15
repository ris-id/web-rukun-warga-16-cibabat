<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>RW16-Cibabat</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- <script src="{{ asset('js/core/bootstrap.bundle.min.js') }}" defer></script>    -->

    <!-- Favicon -->
    <!-- <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png"> -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/95e965b29c.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- Styles -->
    <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Custom CSS - Edit in public/css/style.css -->

    <!-- Material Kit-->
    <link type="text/css" href="{{ asset('css/material-kit.min.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav
                    class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{ route('client.home') }}"
                            rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
                            @foreach (\App\Models\Profil::all() as $profil)
                            <img src="{{ asset('image/logo')}}/{{$profil->logo}}" alt="AdminLTE Logo"
                                width="20" style="opacity: .8" width>
                            @endforeach
                            &nbspRukun Warga 16 - Cibabat
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-auto">
                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" href="{{ route('client.home') }}">
                                        <i class="fa-solid fa-house opacity-6 me-1 text-sm"></i>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold">Home</p>
                                    </a>
                                </li>

                                <li class="nav-item dropdown dropdown-hover ms-lg-auto">
                                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-round opacity-6 me-2 text-md">dashboard</i>
                                        Informasi
                                        <img src="{{ asset('dist/img/client/down-arrow-dark.svg') }}"
                                            alt="down-arrow" class="arrow ms-auto ms-md-2">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                                        aria-labelledby="dropdownMenuPages">
                                        <div class="d-none d-lg-block">
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                                Info
                                            </h6>
                                            <a href="{{ route('client.kegiatan') }}"
                                                class="dropdown-item border-radius-md">
                                                <span>Kegiatan</span>
                                            </a>
                                            <a href="{{ route('client.infopenting') }}"
                                                class="dropdown-item border-radius-md">
                                                <span>Info Penting</span>
                                            </a>
                                            <a href="{{ route('client.lapkeu') }}"
                                                class="dropdown-item border-radius-md">
                                                <span>Laporan Keuangan</span>
                                            </a>
                                            <a href="{{ route('client.aset') }}" class="dropdown-item border-radius-md">
                                                <span>Aset</span>
                                            </a>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                                Organisasi
                                            </h6>
                                            <a href="{{ route('client.karangtaruna') }}"
                                                class="dropdown-item border-radius-md">
                                                <span>Karang Taruna</span>
                                            </a>
                                            <a href="{{ route('client.pkk') }}" class="dropdown-item border-radius-md">
                                                <span>PKK</span>
                                            </a>
                                        </div>

                                        <div class="d-lg-none">

                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                                Post
                                            </h6>
                                            <a href="{{ route('client.kegiatan') }}"
                                                class="dropdown-item border-radius-md">
                                                <span>Kegiatan</span>
                                            </a>
                                            <a href="{{ route('client.infopenting') }}"
                                                class="dropdown-item border-radius-md">
                                                <span>Info Penting</span>
                                            </a>
                                        
                                            <a href="{{ route('client.aset') }}" class="dropdown-item border-radius-md">
                                                <span>Aset</span>
                                            </a>

                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                                Organisasi
                                            </h6>
                                            <a href="{{ route('client.karangtaruna') }}"
                                                class="dropdown-item border-radius-md">
                                                <span>Karang Taruna</span>
                                            </a>
                                            <a href="{{ route('client.pkk') }}" class="dropdown-item border-radius-md">
                                                <span>PKK</span>
                                            </a>

                                        </div>

                                    </div>
                                </li>

                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link ps-2 nav-link-icon me-2" href="{{ route('client.profile') }}">
                                        <i class="fa-solid fa-building-columns opacity-6 me-1 text-sm"></i>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold">Profil</p>
                                    </a>
                                </li>
                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link ps-2 nav-link-icon me-2"
                                        href="{{ route('client.organisasi') }}">
                                        <i class="fa-solid fa-sitemap opacity-6 me-1 text-sm"></i>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold">Struktur Organisasi</p>
                                    </a>
                                </li>

                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link ps-2 nav-link-icon me-2"
                                        href="{{ route('client.pelayanan') }}">
                                        <i class="fa-solid fa-headset opacity-6 me-1 text-sm"></i>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold">Pelayanan</p>
                                    </a>
                                </li>
                                
                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link ps-2 nav-link-icon me-2"
                                        href="{{ route('client.kritiksaran') }}">
                                        <i class="fa-solid fa-comment opacity-6 me-1 text-sm"></i>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold">Kritik & Saran</p>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->


            </div>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="footer pt-5 mt-5">
        <div class="container">
            <div class=" row">
                <div class="col-md-3 mb-4 ms-auto">
                    <div class="row">
                        <div class="col-md-4 d-flex justify-content-center">
                            <center><a href="/">
                            @foreach(\App\Models\Profil::all() as $profil)
                            <img src="{{asset('image/logo/')}}/{{ $profil->logo }}" alt="AdminLTE Logo"
                                class="img-fluid" style="opacity: .8" width>
                            @endforeach
                                </a></center>
                        </div>
                        <div class="col-md-7 ">
                            <h6 class="font-weight-bolder text-md">Rukun Warga 16</h6>
                            <h6 class="font-weight-bolder text-sm mb-4">Kelurahan Cibabat</h6>
                        </div>
                    </div>
                    <div>
                        <ul class="d-flex flex-row ms-n3 nav py-3">
                        @foreach (\App\Models\Profil::all() as $profil)
                            @if($profil->link_facebook != null)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ $profil->link_facebook }}">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                            @endif
                            @if($profil->link_instagram != null)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ $profil->link_instagram }}">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                            @endif
                            @if($profil->link_twitter != null)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ $profil->link_twitter }}">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                            @endif
                            @if($profil->link_email != null)
                                <li class="nav-item">
                                    <a class="nav-link" href="mailto: {{ $profil->link_email }}">
                                        <i class="fa-solid fa-envelope"></i>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                        </ul>
                    </div>
                </div>



                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6>Tentang Kami</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#" target="_blank">
                                    Profil
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/templates/premium"
                                    target="_blank">
                                    Pelayanan
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                                    Struktur Organisasi
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-7 col-sm-6 col-6 mb-4">
                    <div class="">
                        <div class="row">
                            <div class="col-lg mx-auto d-flex justify-content-center flex-column">
                                <h6 class="">Kritik & Saran</h6>
                                    <a class="nav-link" href="">
                                        Kirim Kritik & Saran
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="text-center">
                        <p class="text-dark my-4 text-sm font-weight-normal">
                            Build With Respect By <strong><a href="https://github.com/ris-id" target="_blank">RIS.ID x
                                    Rukun Warga 16 Kelurahan Cibabat
                                </a></strong> | Copyright ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> 
                            {{-- | Material Kit by <a href="https://www.creative-tim.com"
                                target="_blank">Creative
                                Tim</a>. --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!--   Core JS Files   -->
    <!-- <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script> -->
    <script src="{{ asset('js/core/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/moment.min.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/k1crzih9u57tl6edqk0ky4jhq1kfy36vafhe1ybuho3dqn57/tinymce/5/tinymce.min.js">
    </script>




    <!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <!-- <script src="{{ asset('js/plugins/nouislider.min.js') }}"></script> -->

    <!--  Plugin for the Carousel, full documentation here: http://jedrzejchalubek.com/  -->
    <!-- <script src="{{ asset('js/plugins/glidejs.min.js') }}"></script> -->

    <!--	Plugin for Select, full documentation here: https://joshuajohnson.co.uk/Choices/ -->
    <script src="{{ asset('js/plugins/choices.min.js') }}" type="text/javascript"></script>


    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->

    <!-- Control Center for Material Kit parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/material-kit.min.js') }}" type="text/javascript"></script>

    <!-- <script type="text/javascript">
        const ps = new
        PerfectScrollbar('#container', {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });
    </script> -->
</body>

</html>
