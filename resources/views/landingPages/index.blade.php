<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastijadi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js" async></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<!-- Nucleo Icons -->
<link href="{{ asset('assetsnavbar/css/nucleo-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('assetsnavbar/css/nucleo-svg.css') }}" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->
<link id="pagestyle" href="{{ asset('assetsnavbar/css/material-kit.css?v=3.0.4') }}" rel="stylesheet" />
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


        {{-- <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  /> --}}
  {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        AOS.init();
    });
</script>
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assetsFe/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assetsFe/css/owlstyle.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assetscard/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assetaos/dist/aos.css') }}">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assetaos/dist/aos.js') }}"> --}}
        <script src="{{ asset('assetaos/dist/aos.js') }}"></script>

        <script src=""></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Owl Carousel JS -->
<script src="{{ asset('assetsFe/js/owl.carousel.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            center: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
    <style>
        .bg-gradient-orange {
            background: linear-gradient(100%, #FDC02C 0%, #ED5C38 100%);
        }
        .bg-gradient-green {
            background: linear-gradient(135deg, #142C30 0%, #2A575E 100%);
        }
        .bg-gradient-header {
            background: linear-gradient(155deg, #142C30 0%, #4EA1AD 100%);
        }
        .testimonial-section {
            text-align: center;
            padding: 50px 0;
            background-color: #ffffff;
        }
        .bg-gradient-custom {
            background: linear-gradient(120deg, #152D31 0%, #21454B 48%, #2A575E 100%);
        }
        .blog {
            background: linear-gradient(104deg, #173136 0%, #23494F 50%, #2A575E 100%);
            padding: 20px;
        }
        .card {
            border-radius: 13px;
            overflow: hidden;
        }
        .card-title {
            color: #152E32;
            font-size: 19.75px;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
        }
        .btn-custom {
            background: #152E32;
            border-radius: 109px;
            font-size: 11px;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
        }
.services-section {
    text-align: center;
    padding: 50px ;
    position: relative;
}
.services-title {
    font-size: 32px;
    font-weight: 600;
    color: #EF6937;
}
.line-container {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}
.line {
    height: 3px;
    border-radius: 20px;
}
.line-blue {
    background-color: #21454B;
    width: 44px;
    margin-right: 8px;
}
.line-orange {
    background-color: #F28E16;
    width: 49px;
}
.text-primary {
    color: #000000;
}

.font-weight-bold {
    font-weight: 700;
}

.font-weight-light {
    font-weight: 300;
}

@media (max-width: 576px) {
    .card-body {
        padding: 2rem 1.5rem;
    }
    button.btn {
        width: 100%;
        max-width: none;
    }
}


@media (max-width: 768px) {
    .position-absolute {
        position: static !important;
    }
    .rounded-circle {
        display: none;
    }
    .navbar {
        position: static !important;
    }
    .navbar-collapse {
        background-color: rgba(20, 44, 48, 0.9);
        padding: 1rem;
    }
    .navbar-nav {
        align-items: flex-start !important;
    }
    .nav-item {
        margin-bottom: 0.5rem;
    }
    h1, h2 {
        font-size: 1.8rem !important;
    }
    .btn {
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
    }
    .col-lg-6 {
        margin-bottom: 2rem;
    }
    /* Additional styles from previous version */
    .text-warning,
    .text-white {
        text-align: center;
    }
    .img-fluid {
        margin: 0 auto;
    }
    .py-5 {
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .position-relative {
        height: auto;
        padding-bottom: 2rem;
    }
        }
    </style>
</head>
<body>
    @include('layouts.header2')
    <div class="position-relative py-5"
    style="top: 0; background-image: url('assetsFe/img/frame/Frame 10000027399.png');
           background-size: cover;
           background-position: center;
           background-repeat: no-repeat;
           height: 100vh; min-height: 110vh;"> <!-- Increased min-height -->
   <div class="container h-100">
       <div class="row align-items-center h-100">
           <div class="col-lg-6 text-start mb-4 mb-lg-0" style="margin-top: 80px;"> <!-- Increased margin-top -->
               <h1 class="fw-bold" style="font-size: 2.5rem; line-height: 1.2;">
                   KAMI MENAWARKAN<br/>LAYANAN PENGEMBANGAN WEBSITE KUSTOM<br/>LAYANAN<br/>
                   <span class="text-secondary fs-4 fw-normal">Solusi Transformasi Bisnis Digital</span>
               </h1>
               <a href="{{ route('about.index') }}"
               class="btn text-white fw-bold mt-4 rounded-4 px-4 py-2"
               style="background: linear-gradient(45deg, #FF8C00, #FFA500);">Selengkapnya</a>

           </div>
           <div class="col-lg-6 text-center" style="margin-top: 80px;"> <!-- Increased margin-top -->
               <img src="{{ asset('assetsFe/img/frame/logo1.png') }}" alt="Logo" class="img-fluid" style="max-width: 70%; height: auto;">
           </div>
       </div>
   </div>
</div>

<div class="position-relative py-5" style="z-index: 1; background-image: url('assetsFe/img/frame/Frame 1000002736.png'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 80vh;">
    <div class="container">
        <div class="row align-items-center justify-content-between" style="margin-top: 70px;">
            <div class="col-md-6 text-center text-md-left">
                <div class="custom-icon mb-3">
                    <div style="width: 9.47px; height: 11.64px;"></div>
                    <div style="width: 9.49px; height: 18.45px;"></div>
                    <div style="width: 9.47px; height: 9.08px;"></div>
                    <div style="width: 38.48px; height: 32.25px;"></div>
                </div>

                <img src="{{ asset('assetsFe/img/frame/logopastijadi1.png') }}" alt="Company Logo" class="img-fluid" style="max-width: 180.32px; height: auto;">
                <h2 class="text-warning mb-2" style="font-size: 2rem; font-family: Inter, sans-serif; font-weight: 600;">
                    Digital Business<br/>Transformation Solutions.
                </h2>
                <br><br><br>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-white mb-2" style="font-size: 2.5rem; font-family: Inter, sans-serif; font-weight: 600;">Our Company</h2>
                <p class="text-white" style="font-size: 1.25rem; font-family: Inter, sans-serif; font-weight: 500; line-height: 1.65;">
                    Berdiri sejak tahun 2018 di kota Surabaya, CV. PASTIJADI mewujudkan visi untuk menjadi pelopor dalam industri Teknologi Informasi. Dengan dedikasi yang tak tergoyahkan, kami menawarkan inovasi dan solusi terdepan yang dirancang khusus untuk memperkaya pengalaman pelanggan kami. Kami bertujuan untuk menjadi katalis perubahan, meningkatkan efisiensi dan produktivitas, serta memastikan keberlanjutan bisnis Anda di tengah transformasi digital yang pesat. Bersama CV. PASTIJADI, langkah menuju keunggulan dan kemajuan bisnis di era digital menjadi lebih mudah dan terjamin.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid services-section text-center py-5">
    <div class="row">
        <div class="col-12">
            <h2 class="services-title" style="font-size: 2.5rem; font-family: Inter, sans-serif; font-weight: 600;">Our Services</h2>
            <div class="line-container d-flex justify-content-center mt-3">
                <div class="line line-blue me-2" style="width: 5%; height: 5px;"></div>
                <div class="line line-orange" style="width: 5%; height: 5px;"></div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="slider">
        <div class="slide active">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-4 mb-4"> <!-- Adjust col-md-4 for 3 cards in a row -->
                        <div class="card">
                            <img src="{{ asset('storage/images/' . $service->image) }}"
                                 alt="{{ $service->nama_services }}"
                                 class="card-img-top"
                                 style="max-height: 350px; object-fit: cover;" loading="lazy">
                            <div class="card-body">
                                <h5 class="card-title">{{ $service->nama_services }}</h5>
                                <p class="card-text">{{ $service->deskripsi }}</p>
                            </div>
                            <div class="mb-5 d-flex justify-content-around">
                                <h3>Rp.{{ $service->price }}</h3>
                                <button class="btn btn-primary" href="{{ route('servicesfe.index') }}">Buy Now</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
        <div class="controls">
            <button class="control-btn" id="prevBtn">&#10094;</button>
            <button class="control-btn" id="nextBtn">&#10095;</button>
        </div>
    </div>
</div>
<div class="container-fluid services-section text-center py-5">
    <div class="row">
        <div class="col-12">
            <h2 class="services-title" style="font-size: 2.5rem; font-family: Inter, sans-serif; font-weight: 600;">Reasons for choosing</h2>
            <div class="line-container d-flex justify-content-center mt-3">
                <div class="line line-blue me-2" style="width: 5%; height: 5px;"></div>
                <div class="line line-orange" style="width: 5%; height: 5px;"></div>
            </div>
        </div>
    </div>
</div>
<div style="max-width: 100%; padding: 20px; display: flex; flex-direction: column; align-items: center; gap: 63px;">
    <div style="text-align: center; max-width: 800px;">
      <h2 style="color: #1C3A3F; font-size: 36px; font-family: Roboto, sans-serif; font-weight: 700; line-height: 1.2; margin-bottom: 20px;">Alasan Harus Memilih Pastijadi</h2>
      <p style="color: #1C3A3F; font-size: 18px; font-family: Roboto, sans-serif; font-weight: 300; line-height: 1.5;">Kami menyediakan layanan Digital Business Transformation Solutions</p>
    </div>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 34px; width: 100%;">
      <div style="width: 100%; max-width: 439px; background: white; box-shadow: 0px 10px 4px #1B393E; border-radius: 20px; overflow: hidden; margin-bottom: 20px;">
        <img style="width: 100%; height: auto; object-fit: cover;" src="{{ asset('assetsFe/img/frame/asset1.png') }}" alt="Placeholder image" />
        <div style="padding: 20px; text-align: center;">
          <h3 style="color: black; font-size: 20px; font-family: Roboto, sans-serif; font-weight: 700; margin-bottom: 10px;">Terjamin aman dan Terpecaya</h3>
          <p style="color: black; font-size: 15px; font-family: Roboto, sans-serif; font-weight: 300; line-height: 1.5;">homespot sebagai situs properti terpercaya siap membantu menemukan hunian idaman Anda</p>
        </div>
      </div>
      <div style="width: 100%; max-width: 439px; background: white; box-shadow: 0px 10px 4px #1B393E; border-radius: 20px; overflow: hidden; margin-bottom: 20px;">
        <img style="width: 100%; height: auto; object-fit: cover;" src="{{ asset('assetsFe/img/frame/asset2.png') }}" alt="Placeholder image" />
        <div style="padding: 20px; text-align: center;">
          <h3 style="color: black; font-size: 20px; font-family: Roboto, sans-serif; font-weight: 700; margin-bottom: 10px;">Relasi Terbaik</h3>
          <p style="color: black; font-size: 15px; font-family: Roboto, sans-serif; font-weight: 300; line-height: 1.5;">homespot adalah situs properti terbesar dan terpercaya yang telah melayani jutaan masyarakat Indonesia</p>
        </div>
      </div>
      <div style="width: 100%; max-width: 439px; background: white; box-shadow: 0px 10px 4px #1B393E; border-radius: 20px; overflow: hidden; margin-bottom: 20px;">
        <img style="width: 100%; height: auto; object-fit: cover;" src="{{ asset('assetsFe/img/frame/asset3.png') }}" alt="Placeholder image" />
        <div style="padding: 20px; text-align: center;">
          <h3 style="color: black; font-size: 20px; font-family: Roboto, sans-serif; font-weight: 700; margin-bottom: 10px;">1jt+ Iklan Artikle</h3>
          <p style="color: black; font-size: 15px; font-family: Roboto, sans-serif; font-weight: 300; line-height: 1.5;">Dengan lebih dari 1jt properti tersedia di situs web, Rumahku dapat mencocokkan Anda dengan rumah yang diinginkan.</p>
        </div>
      </div>
    </div>

  </div>
</div><br><br><br>
<div class="container-fluid services-section text-center py-5">
    <div class="row">
        <div class="col-12">
            <h2 class="services-title" style="font-size: 2.5rem; font-family: Inter, sans-serif; font-weight: 600;">Our Client</h2>
            <div class="line-container d-flex justify-content-center mt-3">
                <div class="line line-blue me-2" style="width: 5%; height: 5px;"></div>
                <div class="line line-orange" style="width: 5%; height: 5px;"></div>
            </div>
        </div>
    </div>
</div>
<section id="slider" class="pt-5">
    <div class="container">
        <div class="slider">
            <div class="owl-carousel">
                <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <img src="{{ asset('assetsFe/img/frame/asset1.png') }}" alt="">
                    </div>
                    <h5 class="mb-0 text-center text-white"><b>HTML CSS3 Tutorials</b></h5>
                    <p class="text-center p-4">Lorem ipsum dolor sit amet...</p>
                </div>
                <div class="slider-card">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <img src="{{ asset('assetsFe/img/frame/asset1.png') }}" alt="">
                    </div>
                    <h5 class="mb-0 text-center text-white"><b>CSS3 Tutorials</b></h5>
                    <p class="text-center p-4">Lorem ipsum dolor sit amet...</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid services-section text-center py-5">
    <div class="row">
        <div class="col-12">
            <h2 class="services-title" style="font-size: 2.5rem; font-family: Inter, sans-serif; font-weight: 600;">Blog Pasti Jadi</h2>
            <div class="line-container d-flex justify-content-center mt-3">
                <div class="line line-blue me-2" style="width: 5%; height: 5px;"></div>
                <div class="line line-orange" style="width: 5%; height: 5px;"></div>
            </div>
        </div>
    </div>
</div>
<form action="{{ route('home') }}" method="GET" class="container mb-3">
    <!-- Category Filter -->
    <div class="row mb-2 justify-content-center align-items-center">
        <div class="col-12 col-md-3">
            <select name="category" class="form-select">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div><br>
        <div class="col-12 col-md-2 text-center">
            <button type="submit" class="btn"
                style="width:100%; max-width:200px; background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%);
                       border-radius: 16px; color: white; font-size: 16px; font-family: Montserrat, sans-serif;
                       font-weight: 700; text-decoration: none; text-align: center;">
                Filter
            </button>
        </div>
    </div>
</form>
<!-- Blog Posts -->

<div class="blog">
    <div class="row mt-4">
        <div class="d-flex flex-wrap justify-content-center gap-4">
            @foreach ($blogs as $blog)
            <div class="card" style="width: 270px;">
                <img src="{{ asset('storage/images/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->title }}" loading="lazy">
                <div class="card-body">
                    <h5 class="card-title">{{ \Illuminate\Support\Str::words($blog->title, 50, '...') }}</h5>
                    <!-- Category Badge -->
                    <span class="badge bg-light text-dark border border-dark" style="font-size: 11px; font-family: 'DM Sans', sans-serif; font-weight: 700;">
                        {{ $blog->categories->nama_kategori }}
                    </span>
                    <div class="d-flex align-items-center mt-4">
                        <img src="{{ $blog->user->profile ? asset('/storage/users/' . $blog->user->profile) : 'https://via.placeholder.com/57x57' }}" class="rounded-circle me-3" alt="{{ $blog->user->name }}" width="57" height="57">
                        <div>
                            <p class="mb-0 fw-bold">{{ $blog->user->name }}</p>
                            <p class="mb-0 text-muted">{{ $blog->created_at->format('M d, Y') }} ∙ {{ $blog->read_time }} min read</p>
                        </div>
                    </div>
                    <a href="{{ route('blogfe.index') }}" class="btn mt-3"  style="margin-left:20px; width:200px; display: inline-block;  background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%); border-radius: 16px; color: white; font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 700; text-decoration: none; text-align: center;">Selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
  </div>
</div>
<div id="map"></div>

</div>
<div class="container-fluid services-section text-center py-5">
    <div class="row">
        <div class="col-12">
            <h2 class="services-title" style="font-size: 2.5rem; font-family: Inter, sans-serif; font-weight: 600 ;
    border-radius:">Hubungi kami</h2>
            <div class="line-container d-flex justify-content-center mt-3">
                <div class="line line-blue me-2" style="width: 5%; height: 5px;"></div>
                <div class="line line-orange" style="width: 5%; height: 5px;"></div>
            </div>
        </div>
    </div>
</div>
@include('layouts.kontak')
</div><br><br><br><br>
<!-- Footer -->
@extends('layouts.footer2')
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            center: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        });
    });
    let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides; // Loop back to the first slide
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides; // Loop to the last slide
            showSlide(currentSlide);
        }

        document.getElementById('nextBtn').addEventListener('click', nextSlide);
        document.getElementById('prevBtn').addEventListener('click', prevSlide);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
