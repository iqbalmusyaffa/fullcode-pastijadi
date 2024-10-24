<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASTIJADI - Services</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assetaos/dist/aos.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assetaos/dist/aos.js') }}"> --}}
    <script src="{{ asset('assetaos/dist/aos.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init();
        });
    </script>

    <style>
        .bg-gradient-primary {
            background: linear-gradient(218deg, #FCB92D 0%, #F69332 50%, #EF6737 100%);
        }

        .bg-gradient-secondary {
            background: linear-gradient(218deg, #152D31 0%, #204349 50%, #2A575E 100%);
        }

        .bg-gradient-green {
            background: linear-gradient(135deg, #142C30 0%, #2A575E 100%);
        }

        .text-orange {
            color: #ED6D07;
        }

        .btn-gradient-orange {
            background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%);
            color: white;
        }

        .text-gradient {
            background: linear-gradient(180deg, #FEC12C 0%, #EC5638 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Background Image Section */
        .bg-image-section {
            background-image: url('assetsFe/img/frame/Frame 1000002735.png');
            background-size: cover; /* Ensure the background image covers the section */
            background-position: center;
            background-repeat: no-repeat;
            padding: 250px 0;
        }

        /* Media query for responsiveness */
        @media (max-width: 768px) {
            .bg-image-section {
                padding: 150px 0; /* Adjust the padding for smaller screens */
            }
        }

        /* Services section styling */
        .services-section {
            text-align: center;
            padding: 50px;
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

    </style>
</head>
<body>
    @include('layouts.header2')
    <main>
        <section class="bg-image-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                        <p class="text-white">Solusi pembersihan terjangkau</p>
                        <h1 class="display-4 fw-bold mb-4 text-white">Layanan Berkualitas Tinggi dan Ramah dengan Harga Wajar</h1>
                        <p class="lead mb-4 text-white">Kami menyediakan layanan pembersihan komprehensif yang disesuaikan dengan kebutuhan Anda. Mulai dari layanan pembersihan rumah</p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="2000">
                        <div class="d-flex justify-content-center align-items-center position-relative">
                            <!-- First Image (Wider Image) -->
                            <img src="{{ asset('assetsFe/img/frame/asset3.png') }}" alt="Service Image"
                                class="img-fluid rounded-4 border-white position-relative w-100"
                                style="z-index: 2; max-width: 500px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid services-section text-center py-5 mt-6">
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
        <section class="py-5">
            <div class="container">
                <div class="row mb-5" style="margin-top: 60px">
                    <div class="col-lg-6">
                        <h2 class="display-5 fw-bold">Kami selalu memberikan layanan terbaik</h2>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="fw-bold mb-3">Layanan</h3>
                        <p>Meskipun kami dapat menyesuaikan rencana pembersihan sesuai kebutuhan Anda, sebagian besar klien menjadwalkan layanan pembersihan rutin:</p>
                    </div>
                </div>
                <hr class="mb-5">
                <div class="row g-4" >
                    @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="3000">
                        <div class="card h-100">
                            <img src="{{ asset('storage/images/' . $service->image) }}" class="card-img-top" alt="{{ $service->nama_services }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $service->nama_services }}</h5>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($service->deskripsi, 50) }}</p>
                                <a href="{{ route('servicesfe.show', $service->id) }}" class="btn btn-lg text-white fw-bold" style="background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%); border-radius: 16px; font-family: Montserrat, sans-serif;">Selengkapnya</a>
                                <a href="https://wa.me/6287765079444?text=Halo,%20Saya%20ingin%20menanyakan%20pricelist%20untuk%20.%20Namaservices:%20{{ urlencode($service->nama_services) }}.%20Deskripsi:%20{{ urlencode($service->deskripsi) }}.%20Harga:%20{{ number_format($service->price, 2) }}" class="btn btn-success btn-lg fw-bold" style="border-radius: 16px; font-family: Montserrat, sans-serif;">
                                    <i class="bi bi-whatsapp"></i> WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    @include('layouts.footer2')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
