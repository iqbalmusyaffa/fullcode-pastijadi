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
                        <a class="nav-link text-white fw-bold" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-warning fw-bold" href="#">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="width: 504px; height: 39px; left: 104px; top: 100px; position: absolute">
        <div style="width: 367.84px; left: 136.16px; top: 0px; position: absolute; color: #EF6937; font-size: 32px; font-family: Inter; font-weight: 600; word-wrap: break-word">Blog Pastijadi</div>
        <div style="width: 44px; height: 0px; left: 0px; top: 25px; position: absolute; border-radius: 20px; border: 3px #21454B solid"></div>
        <div style="width: 49px; height: 0px; left: 52px; top: 25px; position: absolute; border: 3px #F28E16 solid"></div>
    </div><br><br><br><br><br><br><br>
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

    <section class="container my-5">
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
    </section>

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