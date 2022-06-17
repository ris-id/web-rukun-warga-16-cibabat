<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> <!-- Custom CSS - Edit in public/css/style.css -->

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
                            <img src="https://rukunwarga06.files.wordpress.com/2015/08/logo-dki.png" alt="AdminLTE Logo"
                                width="20" style="opacity: .8" width>&nbspRukun Warga 16 - Cibabat
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
                                        <img src="{{ asset('dist/img/client/down-arrow-dark.svg') }}" alt="down-arrow"
                                            class="arrow ms-auto ms-md-2">
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
                                            <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
                                                <span>Info Penting</span>
                                            </a>
                                            <a href="./pages/author.html" class="dropdown-item border-radius-md">
                                                <span>Pelayanan</span>
                                            </a>
                                            <a href="./pages/author.html" class="dropdown-item border-radius-md">
                                                <span>Aset</span>
                                            </a>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                                Organisasi
                                            </h6>
                                            <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
                                                <span>Karang Taruna</span>
                                            </a>
                                            <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
                                                <span>PKK</span>
                                            </a>
                                        </div>

                                        <div class="d-lg-none">
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                                Landing Pages
                                            </h6>

                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                                Post
                                            </h6>
                                            <a href="{{ route('client.kegiatan') }}"
                                                class="dropdown-item border-radius-md">
                                                <span>Kegiatan</span>
                                            </a>
                                            <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
                                                <span>Info Penting</span>
                                            </a>
                                            <a href="./pages/author.html" class="dropdown-item border-radius-md">
                                                <span>Pelayanan</span>
                                            </a>
                                            <a href="./pages/author.html" class="dropdown-item border-radius-md">
                                                <span>Aset</span>
                                            </a>

                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                                Organisasi
                                            </h6>
                                            <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
                                                <span>Karang Taruna</span>
                                            </a>
                                            <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
                                                <span>PKK</span>
                                            </a>

                                        </div>

                                    </div>
                                </li>

                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link ps-2 nav-link-icon me-2" href="{{route('client.profile')}}">
                                        <i class="fa-solid fa-building-columns opacity-6 me-1 text-sm"></i>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold">Profil</p>
                                    </a>
                                </li>
                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link ps-2 nav-link-icon me-2" href="{{ route('client.organisasi') }}">
                                        <i class="fa-solid fa-sitemap opacity-6 me-1 text-sm"></i>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold">Struktur Organisasi</p>
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
                                <img src="https://rukunwarga06.files.wordpress.com/2015/08/logo-dki.png"
                                    alt="AdminLTE Logo" width="50" style="opacity: .8" width>
                            </a></center>
                        </div>
                        <div class="col-md-7 ">
                            <h6 class="font-weight-bolder text-md">Rukun Warga 16</h6>
                            <h6 class="font-weight-bolder text-sm mb-4">Kelurahan Cibabat</h6>
                        </div>
                    </div>
                    <div>
                        <ul class="d-flex flex-row ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                                    <i class="fab fa-facebook text-lg opacity-8"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                                    <i class="fab fa-twitter text-lg opacity-8"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                                    <i class="fab fa-dribbble text-lg opacity-8"></i>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                                    <i class="fab fa-github text-lg opacity-8"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w"
                                    target="_blank">
                                    <i class="fab fa-youtube text-lg opacity-8"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>



                <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 >Tentang Kami</h6>
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

                <!-- <div class="col-md-2 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-sm">Help & Support</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#" target="_blank">
                                    Kritik & Saran
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> -->

                <!-- <div class="col-md-2 col-sm-6 col-6 mb-4">
                    
                </div> -->

                <div class="col-md-7 col-sm-6 col-6 mb-4">
                    <div class="">
                        <div class="row">
                            <div class="col-lg mx-auto d-flex justify-content-center flex-column">
                                <h6 class="">Kritik & Saran</h6>
                                <form role="form" id="contact-form" method="post" autocomplete="off">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="input-group input-group-dynamic mb-4">
                                                    <label class="form-label">Nama</label>
                                                    <input class="form-control" aria-label="First Name..." type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="input-group input-group-dynamic">
                                                <label class="form-label">Alamat Email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="input-group mb-4 input-group-static">
                                            <label>Pesan Anda</label>
                                            <textarea name="message" class="form-control" id="message"
                                                rows="4"></textarea>
                                        </div>
                                        <div class="row">
                                            <!-- <div class="col-md-12">
                                                <div class="form-check form-switch mb-4 d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" checked="">
                                                    <label class="form-check-label ms-3 mb-0"
                                                        for="flexSwitchCheckDefault">I agree to the <a
                                                            href="javascript:;" class="text-dark"><u>Terms and
                                                                Conditions</u></a>.</label>
                                                </div>
                                            </div> -->
                                            <div class="col-md-12">
                                                <button type="submit" class="btn bg-gradient-primary w-100">Kirim
                                                    Pesan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="text-center">
                        <p class="text-dark my-4 text-sm font-weight-normal">
                            Build With Respect By <strong><a href="https://github.com/ris-id" target="_blank">RIS.ID x
                                    Hana
                                </a></strong> | Copyright © <script>
                                document.write(new Date().getFullYear())
                            </script> | Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative
                                Tim</a>.
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