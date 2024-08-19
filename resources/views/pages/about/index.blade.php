<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASTIJADI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://kit.fontawesome.com/a076d05399.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .bg-gradient-custom {
            background: linear-gradient(135deg, #152D31 0%, #20444A 46%, #2A575E 100%);
        }
        .bg-gradient-header {
            background: linear-gradient(135deg, #333 0%, #555 100%);
        }
        .bg-gradient-green {
            background: linear-gradient(135deg, #004d00 0%, #007a00 100%);
        }
        .btn-outline-warning {
            border-color: #f57c00;
            color: #f57c00;
        }
        .btn-outline-warning:hover {
            background-color: #f57c00;
            color: #fff;
        }
        .team-card img {
            width: 100%;
            height: auto;
            border-radius: 50%;
        }
        .social-icons a {
            color: #fff;
            margin-right: 10px;
        }
        .bg-gradient-button {
            background: linear-gradient(135deg, #f57c00 0%, #f28e16 100%);
        }
        .bg-gradient-custom {
    background: linear-gradient(135deg, #152D31 0%, #20444A 46%, #2A575E 100%);
}

.bg-gradient-header {
    background: linear-gradient(155deg, #142C30 0%, #4EA1AD 100%);
}

.bg-gradient-footer {
    background: linear-gradient(135deg, #142C30 0%, #2A575E 100%);
}

.bg-gradient-button {
    background: linear-gradient(135deg, #FDC02C 0%, #ED5C38 100%);
}

.team-card {
    background-color: #343a40;
    color: white;
    border-radius: 15px;
    text-align: center;
    padding: 20px;
}

.team-card img {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
}

.carousel-item {
    display: flex;
    justify-content: center;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #f76c5e;
    border-radius: 50%;
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

    <main>
        <main>
            <section class="py-5">
                <div class="container">
                    <h1 class="text-center mb-5">About PASTIJADI</h1>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="bg-gradient-custom rounded-4 p-4">
                                <img src="{{ asset('assetsFe/img/logo.png') }}" alt="About Image" class="img-fluid rounded-3" style="width: 332px; height: 354px;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="text-justify">Berdiri sejak tahun 2018 di kota Surabaya, CV. PASTIJADI mewujudkan
                                visi untuk menjadi pelopor dalam industri Teknologi Informasi. Dengan dedikasi yang tak
                                tergoyahkan, kami menawarkan inovasi dan solusi terdepan yang dirancang khusus untuk
                                memperkaya pengalaman pelanggan kami.</p>
                            <p class="text-justify">Kami bertujuan untuk menjadi katalis perubahan, meningkatkan
                                efisiensi dan produktivitas, serta memastikan keberlanjutan bisnis Anda di tengah
                                transformasi digital yang pesat. Bersama CV. PASTIJADI, langkah menuju keunggulan dan
                                kemajuan bisnis di era digital menjadi lebih mudah dan terjamin.</p>
                            <div class="row text-center mt-4">
                                <div class="col-3">
                                    <h3>2024</h3>
                                    <p>Founded</p>
                                </div>
                                <div class="col-3">
                                    <h3>96</h3>
                                    <p>Clients</p>
                                </div>
                                <div class="col-3">
                                    <h3>140</h3>
                                    <p>Projects done</p>
                                </div>
                                <div class="col-3">
                                    <h3>61</h3>
                                    <p>5-Stars Review</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 50px;">
                        <hr
                            style="border: none; height: 2px; background-color: #f57c00; width: 100px; margin: 0 auto 20px auto;">
                        <h2 style="color: #F28E16; font-size: 32px; line-height: 1.6; text-align: center;">Our Visi Misi
                        </h2>
                    </div>
                </div>

            </section>
        </main>
        <main style="padding: 50px 0;">
            <section style="width: 80%; margin: 0 auto; text-align: center;">
                <!-- Vision Section -->
                <div class="bg-gradient-custom py-3 rounded-4 p-4">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="text-center mb-5">
                                <h2 class="display-4"><span style="color: #F28E16">Our</span> <span
                                        class="text-white">Vision</span></h2>
                                <p class="lead text-white" style="text-align: left">Menjadikan setiap individu dan
                                    bisnis meraih puncak
                                    transformasi digital dengan menyediakan solusi teknologi informasi yang inovatif,
                                    mudah diakses, dan pintar dalam memanfaatkan data, mendorongkemajuan berkelanjutan
                                    dalam era digital.</p>
                            </div>
                            <div class="text-center mb-4">
                                <h2 class="display-4"><span style="color: #F28E16;">Our</span> <span
                                        class="text-white">Mission</span></h2>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h3 class="card-title  text-end" style="color: #F28E16">1</h3>
                                            <p class="card-text" style="text-align: left">Menyederhanakan akses terhadap
                                                teknologi canggih untuk
                                                memastikan bahwa setiappengguna, dari pemula hingga ahli, dapat
                                                memanfaatkan potensi penuh dari data danteknologi digital.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h3 class="card-title  text-end" style="color: #F28E16">2</h3>
                                            <p class="card-text" style="text-align: left">Memberikan pendidikan dan
                                                pelatihan tentang teknologi
                                                digital dan pengelolaan data yangpintar, untuk meningkatkan literasi
                                                digital dan kemampuan analitik di semua sektor.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h3 class="card-title  text-end" style="color: #F28E16">3</h3>
                                            <p class="card-text" style="text-align: left">Mendorong inovasi dan
                                                kolaborasi antar industri untuk
                                                menciptakan solusi yang berkelanjutandan ramah lingkungan, memperkuat
                                                ekosistem digital yang inklusif.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h3 class="card-title  text-end" style="color: #F28E16">4</h3>
                                            <p class="card-text" style="text-align: left">Mengutamakan keamanan dan
                                                privasi data pengguna,
                                                membangun kepercayaan danmenciptakan lingkungan digital yang aman untuk
                                                semua.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h3 class="card-title  text-end" style="color: #F28E16">5</h3>
                                            <p class="card-text" style="text-align: left">Beradaptasi dan berevolusi
                                                secara berkelanjutan untuk
                                                menghadapi tantangan danmemanfaatkan peluang baru dalam era digital,
                                                memastikan bahwa individu dan bisnis dapattetap relevan dan kompetitif.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h3 class="card-title text-end" style="color: #F28E16">6</h3>
                                            <p class="card-text" style="text-align: left">Mengembangkan dan
                                                menyediakan solusi teknologi
                                                informasi yang inovatif dan sesuai dengankebutuhan zaman, agar dapat
                                                diakses oleh setiap individu dan bisnis di berbagai level.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- How We Work Section -->
                <div style="margin-top: 50px;">
                    <hr
                        style="border: none; height: 2px; background-color: #f57c00; width: 100px; margin: 0 auto 20px auto;">
                    <h2 style="color: #F28E16; font-size: 32px; margin-bottom: 20px;">How we work</h2>
                </div>
                <div class="bg-gradient-custom py-3 rounded-4 p-4">
                    <div class="bg-gradient-custom rounded-4 p-4"
                        style="background: linear-gradient(135deg, #152D31 0%, #20444A 46%, #2A575E 100%);">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card bg-transparent border-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col-3 bg-white mr-3 p-3 rounded"
                                                style="height: 60px; width: 80px">
                                                <h2 class="text-center text-warning mb-0">1</h2>
                                            </div>
                                            <h3 style="color: #F28E16; margin-left: 10px">Pendekatan Berfokus pada
                                                Klien</h3>
                                        </div>
                                        <h4 style=" color: #F28E16; text-align: left">Pemahaman Mendalam tentang
                                            Kebutuhan Klien</h4>
                                        <p class="text-white" style="text-align: left">Setiap proyek dimulai dengan
                                            sesi discovery yang intensif
                                            untuk memahami secara mendalam tujuan, kebutuhan, dan tantangan spesifik
                                            klien. Ini memungkinkan kami untuk merancang solusi yang sepenuhnya
                                            disesuaikan dengan kebutuhan mereka.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="card bg-transparent border-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col-3 bg-white mr-3 p-3 rounded"
                                                style="height: 60px; width: 80px">
                                                <h2 class="text-center text-warning mb-0">2</h2>
                                            </div>
                                            <h3 style=" color: #F28E16; margin-left: 10px">Pendekatan Berfokus pada
                                                Klien</h3>
                                        </div>
                                        <h4 style=" color: #F28E16; text-align: left">Pemahaman Mendalam tentang
                                            Kebutuhan Klien</h4>
                                        <p class="text-white" style="text-align: left">Setiap proyek dimulai dengan
                                            sesi discovery yang intensif
                                            untuk memahami secara mendalam tujuan, kebutuhan, dan tantangan spesifik
                                            klien. Ini memungkinkan kami untuk merancang solusi yang sepenuhnya
                                            disesuaikan dengan kebutuhan mereka.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="card bg-transparent border-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col-3 bg-white mr-3 p-3 rounded"
                                                style="height: 60px; width: 80px">
                                                <h2 class="text-center text-warning mb-0">3</h2>
                                            </div>
                                            <h3 style=" color: #F28E16; margin-left: 10px">Pendekatan Berfokus pada
                                                Klien</h3>
                                        </div>
                                        <h4 style=" color: #F28E16; text-align: left">Pemahaman Mendalam tentang
                                            Kebutuhan Klien</h4>
                                        <p class="text-white" style="text-align: left">Setiap proyek dimulai dengan
                                            sesi discovery yang intensif
                                            untuk memahami secara mendalam tujuan, kebutuhan, dan tantangan spesifik
                                            klien. Ini memungkinkan kami untuk merancang solusi yang sepenuhnya
                                            disesuaikan dengan kebutuhan mereka.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="card bg-transparent border-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col-3 bg-white mr-3 p-3 rounded"
                                                style="height: 60px; width: 80px">
                                                <h2 class="text-center text-warning mb-0">4</h2>
                                            </div>
                                            <h3 style=" color: #F28E16; margin-left: 10px">Pendekatan Berfokus pada
                                                Klien</h3>
                                        </div>
                                        <h4 style=" color: #F28E16; text-align: left">Pemahaman Mendalam tentang
                                            Kebutuhan Klien</h4>
                                        <p class="text-white" style="text-align: left">Setiap proyek dimulai dengan
                                            sesi discovery yang intensif
                                            untuk memahami secara mendalam tujuan, kebutuhan, dan tantangan spesifik
                                            klien. Ini memungkinkan kami untuk merancang solusi yang sepenuhnya
                                            disesuaikan dengan kebutuhan mereka.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" text-center mt-4">
                            <a href="#"
                                class="btn bg-gradient-button text-white btn-lg px-5 py-3 rounded-pill">Selengkapnya</a>
                        </div>

        </main>
        <main>
            <div class="container my-5">
                <div style="margin-top: 50px;">
                    <hr
                        style="border: none; height: 2px; background-color: #f57c00; width: 100px; margin: 0 auto 20px auto;">
                    <h2 style="color: #F28E16; font-size: 32px; margin-bottom: 20px; text-align:center ">Meet Our Amazing Team</h2>
                </div>
                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card team-card">
                                <div class="card-body">
                                    <img src="https://via.placeholder.com/150" alt="William Anderson">
                                    <h5 class="mt-3">William Anderson</h5>
                                    <p class="text-muted">CTO</p>
                                    <p>Quisquam facilis cum velit laborum corrupti.</p>
                                    <div class="social-icons">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card team-card">
                                <div class="card-body">
                                    <img src="https://via.placeholder.com/150" alt="Amanda Jepson">
                                    <h5 class="mt-3">Amanda Jepson</h5>
                                    <p class="text-muted">Accountant</p>
                                    <p>Dolorem tempora officia dicta laborum officiis.</p>
                                    <div class="social-icons">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Font Awesome Icons -->
                <script src="https://kit.fontawesome.com/a076d05399.js"></script>
            </div>
        </div>
        </main>
    <!-- Footer -->
    <div class="bg-gradient-header py-5">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
