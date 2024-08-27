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
    </style>
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg bg-gradient-header w-100 position-relative" style="min-height: 100px;">
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
    <div class="container-fluid services-section">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="services-title" style="margin-top:50px ; color: #EF6937; font-size: 32px; font-family: 'Inter', sans-serif; font-weight: 600;">
                    Blog Pasti Jadi
                </div>
                <div class="d-flex justify-content-center mt-2 line-container">
                    <div class="line line-blue me-2" style="width: 44px; height: 3px; background-color: #21454B;"></div>
                    <div class="line line-orange" style="width: 49px; height: 3px; background-color: #F28E16;"></div>
                </div>
            </div>
        </div>
    </div>


    <main class="container my-5">
        {{-- <article>
            <img src="https://via.placeholder.com/2000x380" class="img-fluid mb-4" alt="Article header image">
            <h2 class="display-4 fw-bold mb-3">Finibus Bonorum et Malorum</h2>
            <p class="lead">
                <strong>Written by John doe</strong>
                <span class="text-muted ms-3">Monday May 20</span>
            </p>
            <div class="article-content">
                <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>

                <h3>1914 translation by H. Rackham</h3>
                <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure
        </article> --}}
    </main>
    <form action="{{ route('blogfe.index') }}" method="GET" class="mb-3">
        <div class="row g-0">
            <!-- Category Filter -->
            <div class="col-12 col-md-4 mb-2 mb-md-0">
                <select name="category" class="form-select">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Author Filter -->
            <div class="col-12 col-md-4 mb-2 mb-md-0">
                <select name="author" class="form-select">
                    <option value="">Select Author</option>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}" {{ request('author') == $author->id ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Filter Button -->
            <div class="col-12 col-md-4 d-flex align-items-end">
                <button type="submit" class="btn" style="margin-left:20px; width:200px; display: inline-block;  background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%); border-radius: 16px; color: white; font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 700; text-decoration: none; text-align: center;">Filter</button>
            </div>
        </div>
    </form>
    <section class="container my-5">
        <h3 class="mb-4">Related Blogs</h3>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ Storage::url('images/' . $blog->image) }}" class="card-img-top" alt="Blog image">
                    <div class="card-body">
                        <h5 class="card-title">{{ \Illuminate\Support\Str::words($blog->title, 50, '...') }}</h5>
                        <span class="badge bg-light text-dark border border-dark" style="font-size: 11px; font-family: 'DM Sans', sans-serif; font-weight: 700;">
                            {{ $blog->categories->nama_kategori }}
                        </span>
                        <div class="d-flex align-items-center mt-3">
                            <img src="{{ $blog->user->profile ? asset('/storage/users/' . $blog->user->profile) : 'https://via.placeholder.com/57x57' }}" class="rounded-circle me-3" alt="{{ $blog->user->name }}" width="57" height="57">
                            <div>
                                <p class="mb-0 fw-bold">{{ $blog->user->name }}</p>
                                <small class="text-muted">{{ $blog->published_at->format('M d, Y') }} • {{ $blog->read_time }} min read</small>
                            </div>
                        </div>
                        <!-- Add a Read More button here -->
                        <a href="{{ route('blogfe.show', $blog->id) }}" class="btn mt-3"  style="margin-left:20px; width:200px; display: inline-block;  background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%); border-radius: 16px; color: white; font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 700; text-decoration: none; text-align: center;">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- <section class="container my-5">
        <h3 class="mb-4">Related Articles</h3>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/260x198" class="card-img-top" alt="Article image">
                    <div class="card-body">
                        <h5 class="card-title">Array in JavaScript - Learn JS #3</h5>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://via.placeholder.com/57x57" class="rounded-circle me-3" width="57" height="57" alt="Author avatar">
                            <div>
                                <p class="mb-0 fw-bold">Dasteen</p>
                                <small class="text-muted">Jan 10, 2022 • 3 min read</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/260x198" class="card-img-top" alt="Article image">
                    <div class="card-body">
                        <h5 class="card-title">Array in JavaScript - Learn JS #3</h5>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://via.placeholder.com/57x57" class="rounded-circle me-3" width="57" height="57" alt="Author avatar">
                            <div>
                                <p class="mb-0 fw-bold">Dasteen</p>
                                <small class="text-muted">Jan 10, 2022 • 3 min read</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/260x198" class="card-img-top" alt="Article image">
                    <div class="card-body">
                        <h5 class="card-title">Array in JavaScript - Learn JS #3</h5>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://via.placeholder.com/57x57" class="rounded-circle me-3" width="57" height="57" alt="Author avatar">
                            <div>
                                <p class="mb-0 fw-bold">Dasteen</p>
                                <small class="text-muted">Jan 10, 2022 • 3 min read</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="container my-5">
        <h3 class="mb-4">Trending</h3>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="d-flex">
                    <img src="https://via.placeholder.com/156x100" class="me-3" alt="Trending article image">
                    <div>
                        <h5 class="mb-2">Fruit juices to boost your immune</h5>
                        <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="d-flex">
                    <img src="https://via.placeholder.com/156x100" class="me-3" alt="Trending article image">
                    <div>
                        <h5 class="mb-2">Fruit juices to boost your immune</h5>
                        <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="d-flex">
                    <img src="https://via.placeholder.com/156x100" class="me-3" alt="Trending article image">
                    <div>
                        <h5 class="mb-2">Fruit juices to boost your immune</h5>
                        <p class="text-muted small">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
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
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
