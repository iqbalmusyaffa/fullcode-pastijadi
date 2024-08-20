<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASTIJADI - Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        .bg-image-section {
            background-image: url('assetsFe/img/frame/Frame 1000002735.png');
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            padding: 300px 0;
        }

    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-gradient-green w-100 position-relative" style="min-height: 100px;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assetsFe/img/logo.png') }}" alt="Logo" width="63" height="63">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-warning fw-bold" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="{{ route('about.index') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="{{ route('blogfe.index') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="{{ route('servicesfe.index') }}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="{{ route('contact.index') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <main>
        <section class="bg-image-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <p class="text-white">Solusi pembersihan terjangkau</p>
                        <h1 class="display-4 fw-bold mb-4 text-white">Layanan Berkualitas Tinggi dan Ramah dengan Harga Wajar</h1>
                        <p class="lead mb-4 text-white">Kami menyediakan layanan pembersihan komprehensif yang disesuaikan dengan kebutuhan Anda. Mulai dari layanan pembersihan rumah</p>
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="{{ asset('assetsFe/img/frame/image2.png') }}" alt="Service Image" class="img-fluid rounded-4 border border-5 border-white position-absolute top-0 start-0" style="z-index: 2;">
                            <img src="{{ asset('assetsFe/img/frame/image1.png') }}" alt="Service Image" class="img-fluid rounded-4 border border-warning border-5" style="position: relative; margin-left: 50%; margin-top: 15%;">
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br><br><br>

        <section class="py-5">
            <div class="container">
                <div style="width: 504px; height: 39px; left: 104px; top: 1150px; position: absolute">
                    <div style="width: 367.84px; left: 136.16px; top: 0px; position: absolute; color: #EF6937; font-size: 32px; font-family: Inter; font-weight: 600; word-wrap: break-word">Our Services</div>
                    <div style="width: 44px; height: 0px; left: 0px; top: 25px; position: absolute; border-radius: 20px; border: 3px #21454B solid"></div>
                    <div style="width: 49px; height: 0px; left: 52px; top: 25px; position: absolute; border: 3px #F28E16 solid"></div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h2 class="display-5 fw-bold">Kami selalu memberikan layanan terbaik</h2>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="fw-bold mb-3">Layanan</h3>
                        <p>Meskipun kami dapat menyesuaikan rencana pembersihan sesuai kebutuhan Anda, sebagian besar klien menjadwalkan layanan pembersihan rutin:</p>
                    </div>
                </div>
                <hr class="mb-5">
                <div class="row g-4">
                    @foreach($services as $service)
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100">
                                <img src="{{ asset('storage/images/' . $service->image) }}" class="card-img-top" alt="{{ $service->nama_services }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $service->nama_services }}</h5>
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($service->deskripsi, 100) }}</p>
                                    <a href="{{ route('servicesfe.show', $service->id) }}"class="btn btn-lg text-white fw-bold" style="background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%); border-radius: 16px; font-family: Montserrat, sans-serif;">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                    <!-- Ulangi struktur kartu ini untuk layanan lainnya -->
                </div>
                {{-- <div class="text-center mt-5">
                    <a href="#" class="btn bg-gradient-secondary text-white">Lainnya</a>
                </div> --}}
            </div>
        </section>
    </main>
<footer class="bg-gradient-green text-white py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-3">
                <img src="{{ asset('assetsFe/img/logo.png') }}" alt="Logo" class="img-fluid mb-3">
                <p class="text-white fs-4">Digital Business<br>Transformation Solutions.</p>
            </div>
            <div class="col-md-3">
                <h5 class="text-white fw-bold mb-3">Headquarters</h5>
                <p class="text-white">
                    Lippo Thamrin Lt.5 #0503<br>
                    Jl. M.H.Thamrin No.20, Menteng<br>
                    Jakarta Pusat 10350, Indonesia
                </p>
            </div>
            <div class="col-md-3">
                <h5 class="text-white fw-bold mb-3">Support</h5>
                <p class="text-white">
                    Privacy Policy<br>
                    Term and Conditions
                </p>
            </div>
            <div class="col-md-3">
                <h5 class="text-white fw-bold mb-3">Connect With Us</h5>
                <div class="d-flex flex-wrap">
                    <a href="https://www.instagram.com/yourprofile" target="_blank" class="btn btn-outline-light rounded-circle me-2 mb-2 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/yourprofile" target="_blank" class="btn btn-outline-light rounded-circle me-2 mb-2 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.youtube.com/yourchannel" target="_blank" class="btn btn-outline-light rounded-circle me-2 mb-2 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="mailto:youremail@example.com" class="btn btn-outline-light rounded-circle me-2 mb-2 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                        <i class="bi bi-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
