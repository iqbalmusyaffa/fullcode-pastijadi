<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pasti jadi</title>
    <meta content="Transformational Business Network Indonesia" name="description">
    <meta content="Transformational, Business Network, Indonesia, TBN" name="keywords">

    <!-- Favicons -->
    <link href="https://tbnindonesia.org/images/favicon.png" rel="icon">
    <link href="https://tbnindonesia.org/images/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    {{-- <link href="{{ asset('assetsFe/vendor/aos/aos.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assetsFe/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsFe/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assetsFe/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsFe/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsFe/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsFe/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assetsFe/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <style>
          .bg-gradient-header {
              background: linear-gradient(155deg, #142C30 0%, #4EA1AD 100%);
          }
      </style>
</head>

<body>
    <!-- ======= Header ======= -->
    {{-- <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="/home"><img src="{{ asset('assetsFe/img/hero-image.png') }}"
                        alt="Logo" class="img-fluid"></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a>
                    </li>
                    <li><a class="nav-link scrollto {{ Request::is('about') ? 'active' : '' }}"
                            href="/home#about">About</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('services') ? 'active' : '' }}"
                            href="/home#services">Services</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('team') ? 'active' : '' }}"
                            href="/home#team">Speakers</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('event*') ? 'active' : '' }}"
                            href="#event">Event</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('contact') ? 'active' : '' }}"
                            href="/home#contact">Contact</a></li>
                     @guest
                    <li><button class="login-btn">Login</button></li>
                    @endguest
                    @auth
                    <li>
                        <form action="{{ route('auth.logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item mx-3 align-items-center text-dark" style="color: #000;" type="submit">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </button>
                        </form>
                    </li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header> --}}
    <header class="bg-gradient-header py-3">
      <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('assetsFe/img/logo.png') }}" alt="Logo" width="70" height="70">
            </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="#">About</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Artikel</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Service</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Blog</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Contact</a>
                      </li>
                      <li class="nav-item">
                          <a class="btn btn-outline-warning" href="#">LOGIN</a>
                      </li>
                  </ul>
              </div>
          </nav>
      </div>
  </header>

    <!-- End Header -->

