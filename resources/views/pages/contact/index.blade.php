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

        .text-primary {
            color: #000000;
        }

        .font-weight-bold {
            font-weight: 700;
        }

        .font-weight-light {
            font-weight: 300;
        }

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
    </nav>

    <div class="container-fluid services-section">
        <div class="row">
            <div class="col-12">
                <div class="services-title">Contact Us</div>
                <div class="line-container">
                    <div class="line line-blue"></div>
                    <div class="line line-orange"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card bg-gradient-custom text-white rounded-4 shadow">
              <div class="card-body p-5">
                <h2 class="text-center mb-4">Hubungi Kami</h2>
                <form action="{{ route('contact.store') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Nama" required>
                  </div>
                  <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" name="company" placeholder="Perusahaan">
                  </div>
                  <div class="mb-3">
                    <select class="form-select" name="service" required>
                      <option selected disabled>Layanan yang Diminati</option>
                      <option value="Layanan 1">Layanan 1</option>
                      <option value="Layanan 2">Layanan 2</option>
                      <option value="Layanan 3">Layanan 3</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <textarea class="form-control" name="additional_info" rows="3" placeholder="Informasi Tambahan?"></textarea>
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="consentCheck" name="consent" required>
                    <label class="form-check-label" for="consentCheck">
                      Saya menyetujui Lollie's Handmade untuk menghubungi saya melalui informasi yang telah saya berikan.
                    </label>
                  </div>
                  <button type="submit" class="btn" style="margin-left:20px; width:710px; display: inline-block; background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%); border-radius: 16px; color: white; font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 700; text-decoration: none; text-align: center;">
                    Kirim
                  </button>
                </form>
              </div>
            </div>
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
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
