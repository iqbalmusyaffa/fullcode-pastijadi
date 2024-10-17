<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Pastijadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .bg-gradient-custom {
            background: linear-gradient(135deg, #142C30 0%, #2A575E 100%);
        }

        .bg-gradient-header {
            background: linear-gradient(155deg, #142C30 0%, #4EA1AD 100%);
        }

        .bg-gradient-green {
            background: linear-gradient(135deg, #142C30 0%, #2A575E 100%);
        }

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
    <!-- Navbar -->
    {{-- <nav class="navbar navbar-expand-lg bg-gradient-header w-100 position-relative" style="min-height: 100px;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assetsFe/img/logo.png') }}" alt="Logo" width="63" height="63">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold" href="{{ route('home') }}">Home</a>
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
    </nav> --}}
      @include('layouts.header2')
    <div class="row">
        <div class="col-12">
            <div class="services-title" style="text-align: center ; margin-top : 40px">Our Blog</div>
            <div class="line-container">
                <div class="line line-blue"></div>
                <div class="line line-orange"></div>
            </div>
        </div>
    </div>


    <main class="container my-5">
    </main>
    <form action="{{ route('blogfe.index') }}" method="GET" class="container mb-3">
        <!-- Category Filter -->
        <div class="row mb-2 justify-content-center">
            <div class="col-12 col-md-4">
                <select name="category" class="form-select">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Author Filter -->
        <div class="row mb-2 justify-content-center">
            <div class="col-12 col-md-4">
                <select name="author" class="form-select">
                    <option value="">Select Author</option>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}" {{ request('author') == $author->id ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 text-center">
                <button type="submit" class="btn"
                    style="width:100%; max-width:200px; background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%);
                           border-radius: 16px; color: white; font-size: 16px; font-family: Montserrat, sans-serif;
                           font-weight: 700; text-decoration: none; text-align: center;">
                    Filter
                </button>
            </div>
        </div>
    </form>

    <section class="container my-5">
        <h3 class="mb-4">Related Blogs</h3>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ Storage::url('images/' . $blog->image) }}" class="card-img-top" alt="Blog image">
                        <div class="card-body">
                            <h5 class="card-title">{{ \Illuminate\Support\Str::words($blog->title, 50, '...') }}</h5>
                            <span class="badge bg-light text-dark border border-dark"
                                style="font-size: 11px; font-family: 'DM Sans', sans-serif; font-weight: 700;">
                                {{ $blog->categories->nama_kategori }}
                            </span>
                            <div class="d-flex align-items-center mt-3">
                                <img src="{{ $blog->user->profile ? asset('/storage/users/' . $blog->user->profile) : 'https://via.placeholder.com/57x57' }}"
                                    class="rounded-circle me-3" alt="{{ $blog->user->name }}" width="57"
                                    height="57">
                                <div>
                                    <p class="mb-0 fw-bold">{{ $blog->user->name }}</p>
                                    <small class="text-muted">{{ $blog->published_at->format('M d, Y') }} •
                                        {{ $blog->read_time }} min read</small>
                                </div>
                            </div>
                            <!-- Add a Read More button here -->
                            <a href="{{ route('blogfe.show', $blog->id) }}" class="btn mt-3"
                                style="margin-left:20px; width:200px; display: inline-block;  background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%); border-radius: 16px; color: white; font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 700; text-decoration: none; text-align: center;">Read
                                More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
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
                        <a href="https://www.instagram.com/yourprofile" target="_blank"
                            class="btn btn-outline-light rounded-circle me-2 mb-2 d-flex align-items-center justify-content-center"
                            style="width: 36px; height: 36px;">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/yourprofile" target="_blank"
                            class="btn btn-outline-light rounded-circle me-2 mb-2 d-flex align-items-center justify-content-center"
                            style="width: 36px; height: 36px;">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.youtube.com/yourchannel" target="_blank"
                            class="btn btn-outline-light rounded-circle me-2 mb-2 d-flex align-items-center justify-content-center"
                            style="width: 36px; height: 36px;">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="mailto:youremail@example.com"
                            class="btn btn-outline-light rounded-circle me-2 mb-2 d-flex align-items-center justify-content-center"
                            style="width: 36px; height: 36px;">
                            <i class="bi bi-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
