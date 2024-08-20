 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Detail</title>
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
        <a class="navbar-brand" href="{{ route('home') }}">
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

<main class="container my-5">
    <article>
        <img src="{{ Storage::url('images/' . $blog->image) }}"
        class="img-fluid mb-4"
        alt="{{ $blog->title }}"
        style="width: 973px; height: 380.37px; object-fit: cover;">
        <h2 class="display-6 fw-bold mb-3">{{ $blog->title }}</h2>
        <p class="lead">
            <strong>Written by {{ $blog->user->name }}</strong>
            <span class="text-muted ms-3">{{ $blog->published_at->format('l, F j') }}</span>
        </p>
        <span class="badge bg-light text-dark border border-dark" style="font-size: 11px; font-family: 'DM Sans', sans-serif; font-weight: 700;">
            {{ $blog->categories->nama_kategori }}
        </span>
        <div class="article-content">
            <p>{{ $blog->description }}</p>
        </div>
    </article>
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
