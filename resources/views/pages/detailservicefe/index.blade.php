<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $service->name }} - Service Detail</title>
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
                    <a class="nav-link text-white fw-bold" href="{{ route('services.show', ['id' => $service->id]) }}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="{{ route('contact.index') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- <div class="container mt-5">
    <h1 class="text-orange mb-4">Services</h1>
    <img src="{{ asset('storage/images/' . $service->image) }}" class="img-fluid rounded mb-4" alt="{{ $service->name }}">
    <h1 class="text-dark mb-5">{{ $service->nama_services }}</h1>
    <p class="lead mb-4">{{ $service->deskripsi }}</p>
    <p class="lead mb-4"> {!! $service->deskripsifull !!}</p>
    <p class="text-muted">Price: Rp. {{ number_format($service->price, 0, ',', '.') }}</p>
    <a href="#" class="btn btn-gradient-orange btn-lg">Start Project</a>
</div> --}}
<div class="container mt-5">
    <!-- Section Title -->
    <h1 class="text-orange mb-4">Services</h1>

    <!-- Service Image -->
    <div class="row mb-4">
        <div class="col-12">
            <img src="{{ asset('storage/images/' . $service->image) }}" class="img-fluid rounded mb-4" alt="{{ $service->name }}">
        </div>
    </div>

    <!-- Service Information -->
    <div class=" p-4">
        <!-- Service Name -->
        <h1 class="text-dark mb-5">{{ $service->nama_services }}</h1>

        <!-- Service Description -->
        <p class="lead mb-4">{{ $service->deskripsi }}</p>
        <p class="lead mb-4">{!! $service->deskripsifull !!}</p>

        <!-- Price Information -->
        <p class="text-muted"><h4>Price: Rp. {{ number_format($service->price, 0, ',', '.') }}</h4></p>
        <p  class="text-muted">Biaya dihitung dengan mempertimbangkan jumlah halaman yang akan di muat dan durasi.</p>
        <!-- Call to Action Button -->
        <div class="text-end">
            <a href="https://wa.me/628155060895" class="btn btn-gradient-orange btn-lg">Start Project</a>
          </div>
    </div>
</div>


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
