<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Reservasi RUS</title>

    <!-- Fix Logo -->
    <link rel="icon" href="./img/core-img/4a4fb0ec-2b69-4c5f-8a48-8cbf7556d704_200x200.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('roberto/style.css') }}">
    

</head>

<body>



    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="index.html" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html" style="margin-left: -140px;"><img src="img/core-img/4a4fb0ec-2b69-4c5f-8a48-8cbf7556d704_200x200.png" width="60px" height="60px" alt=""></a>

                        <!-- Alamat -->
                        <p style="font-size: 11px; margin-left: -480px; margin-top: 15px;"><b style="font-size: 16px;">SMK Raden Umar Said</b><br/>Jalan Sukun Raya 9, Besito, Gebog, Kudus</p>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="/">Beranda</a></li>

                                    <li><a href="#">Paket</a>
                                        <ul class="dropdown">
                                            <li><a href="/tourvisit">- Tour Visit</a></li>
                                            <li><a href="/tournonton">- Tour Visit + Nonton</a></li>
                                            <li><a href="/seminar">- Seminar</a></li>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact">Kontak</a></li>
                                    <!-- <li><a href="./register.html">Daftar</a></li>
                                    <li><a href="./login.html">Masuk</a></li> -->
                                </ul>


                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
@yield('content')
    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="{{ asset('roberto/js/jquery.min.js') }}"></script>
    <!-- Popper -->
    <script src="{{ asset('roberto/js/popper.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('roberto/js/bootstrap.min.js') }}"></script>
    <!-- All Plugins -->
    <script src="{{ asset('roberto/js/roberto.bundle.js') }}"></script>
    <!-- Active -->
    <script src="{{ asset('roberto/js/default-assets/active.js') }}"></script>

</body>

</html>
