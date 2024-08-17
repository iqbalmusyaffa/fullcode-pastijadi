<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastijadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-gradient-orange {
            background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%);
        }
        .bg-gradient-green {
            background: linear-gradient(135deg, #142C30 0%, #2A575E 100%);
        }
        .bg-gradient-header {
            background: linear-gradient(155deg, #142C30 0%, #4EA1AD 100%);
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
        }
    </style>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg bg-gradient-header w-100 position-relative" style="min-height: 100px;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://via.placeholder.com/63x63" alt="Logo" width="63" height="63">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-warning fw-bold" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="#">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold" href="#">Service</a>
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

<div class="container-fluid p-0">
    <div class="position-relative">
        <!-- Orange Circle -->
        <div class="position-absolute rounded-circle d-none d-lg-block" style="width: 805px; height: 793px; right: -200px; top: 100px; background: #FCB82E; z-index: -1; margin-right: 200px;"></div>

        <!-- Red Circle -->
        <div class="position-absolute rounded-circle d-none d-lg-block" style="width: 663px; height: 663px; right: -100px; top: -330px; background: #EF6538; z-index: -1; margin-right: 100px;"></div>

        <!-- Main Content -->
        <div class="position-relative py-5" style="z-index: 1;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="fw-bold" style="font-size: 2.5rem; line-height: 1.2;">
                            WE PROVIDE<br/>CUSTOM APP DEVELOPMENT<br/>SERVICES<br/>
                            <span class="text-secondary fs-4 fw-normal">Digital Business Transformation Solutions</span>
                        </h1>
                        <a href="#" class="btn bg-gradient-orange text-white fw-bold mt-4 rounded-4 px-4 py-2">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="position-absolute d-none d-lg-block" style="width: 100%; height: 510px; left: 0; top: 164px; background: linear-gradient(135deg, #152D31 0%, #20444A 46%, #2A575E 100%); border-top-left-radius: 200px;"></div>
                </div>
            </div>
        </div>
        <div class="position-relative py-5" style="z-index: 1; margin-top: 150px;">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6">
                        <div class="custom-icon">
                            <div style="width: 9.47px; height: 11.64px; left: 9.97px; top: 15.58px;"></div>
                            <div style="width: 9.49px; height: 18.45px; left: 16.73px; top: 8.77px;"></div>
                            <div style="width: 9.47px; height: 9.08px; left: 23.52px; top: 18.15px;"></div>
                            <div style="width: 38.48px; height: 32.25px; left: 2.24px; top: 1.88px;"></div>
                        </div>
                        <img src="https://via.placeholder.com/180x177" alt="Company Logo" class="img-fluid mb-3" style="max-width: 180.32px; height: auto;">
                        <h1 class="text-warning fw-bold" style="font-size: 2rem; font-family: Montserrat; line-height: 1.2;">
                            Digital Business<br/>Transformation Solutions.
                        </h1>
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-white fw-bold fs-4 mb-3">Company</h2>
                        <p class="text-white fs-6 fw-bold" style="font-family: Montserrat; line-height: 1.6; text-align: justify;">
                            Berdiri sejak tahun 2018 di kota Surabaya, CV. PASTIJADI mewujudkan visi untuk menjadi pelopor dalam industri Teknologi Informasi. Dengan dedikasi yang tak tergoyahkan, kami menawarkan inovasi dan solusi terdepan yang dirancang khusus untuk memperkaya pengalaman pelanggan kami. Kami bertujuan untuk menjadi katalis perubahan, meningkatkan efisiensi dan produktivitas, serta memastikan keberlanjutan bisnis Anda di tengah transformasi digital yang pesat. Bersama CV. PASTIJADI, langkah menuju keunggulan dan kemajuan bisnis di era digital menjadi lebih mudah dan terjamin.
                        </p>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br>
        <div style="width: 504px; height: 39px; left: 104px; top: 1140px; position: absolute">
            <div style="width: 367.84px; left: 136.16px; top: 0px; position: absolute; color: #EF6937; font-size: 32px; font-family: Inter; font-weight: 600; word-wrap: break-word">Our Services</div>
            <div style="width: 44px; height: 0px; left: 0px; top: 25px; position: absolute; border-radius: 20px; border: 3px #21454B solid"></div>
            <div style="width: 49px; height: 0px; left: 52px; top: 25px; position: absolute; border: 3px #F28E16 solid"></div>
        </div>
        <div class="container-fluid">
            <div class="row mt-4">
              <div class="col-12 py-5" style="background: linear-gradient(104deg, #173136 0%, #23494F 50%, #2A575E 100%);">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 mb-4">
                      <h2 class="text-white mb-2" style="font-size: 2.5rem; font-family: Inter, sans-serif; font-weight: 600; text-align: left;">Our Services</h2>
                      <p class="text-white" style="font-size: 1.25rem; font-family: Inter, sans-serif; font-weight: 500; line-height: 1.65; text-align: left;">Operating in the field of Information Technology, offering IT services to meet diverse and dynamic market needs.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-6 mb-4">
                          <img src="https://via.placeholder.com/738x344" alt="Layanan 1" class="img-fluid rounded">
                        </div>
                        <div class="col-6 mb-4">
                          <img src="https://via.placeholder.com/713x344" alt="Layanan 2" class="img-fluid rounded">
                        </div>
                        <div class="col-6">
                          <img src="https://via.placeholder.com/738x344" alt="Layanan 3" class="img-fluid rounded">
                        </div>
                        <div class="col-6">
                          <img src="https://via.placeholder.com/713x344" alt="Layanan 4" class="img-fluid rounded">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="accordion" id="servicesAccordion">
                        <div class="accordion-item bg-transparent border-white">
                          <h2 class="accordion-header">
                            <button class="accordion-button bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                              Konsultasi IT & Transformasi Digital
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                            <div class="accordion-body text-white" style="text-align: justify;">
                              <!-- Konten untuk Konsultasi IT & Transformasi Digital -->
                            </div>
                          </div>
                        </div>

                        <div class="accordion-item bg-transparent border-white">
                          <h2 class="accordion-header">
                            <button class="accordion-button bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                              ARTIFICIAL INTELLIGENCE
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                            <div class="accordion-body text-white" style="text-align: justify;">
                              <!-- Konten untuk ARTIFICIAL INTELLIGENCE -->
                            </div>
                          </div>
                        </div>

                        <div class="accordion-item bg-transparent border-white">
                          <h2 class="accordion-header">
                            <button class="accordion-button bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                              DATA ANALYSIS
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                            <div class="accordion-body text-white" style="text-align: justify;">
                             hasil yang sangat menarik
                            </div>
                          </div>
                        </div>

                        <div class="accordion-item bg-transparent border-white">
                          <h2 class="accordion-header">
                            <button class="accordion-button bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                              DIGITAL TRANSFORMATION
                            </button>
                          </h2>
                          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                            <div class="accordion-body text-white" style="text-align: justify;">
                              <!-- Konten untuk DIGITAL TRANSFORMATION -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex align-items-start justify-content-start mt-4">
                        <a href="#" class="btn btn-lg text-white fw-bold" style="background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%); border-radius: 16px; font-family: Montserrat, sans-serif;">Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div><br><br><br><br><br><br>
<div style="width: 504px; height: 39px; right: 104px; top: 2000px; position: absolute">
    <div style="width: 367.84px; right: 0px; top: 0px; position: absolute; color: #EF6937; font-size: 32px; font-family: Inter; font-weight: 600; word-wrap: break-word;">Reasons for choosing</div>
    <div style="width: 44px; height: 0px; right: 460px; top: 25px; position: absolute; border-radius: 20px; border: 3px #21454B solid"></div>
    <div style="width: 49px; height: 0px; right: 403px; top: 25px; position: absolute; border: 3px #F28E16 solid"></div>
</div>
<div style="max-width: 100%; padding: 20px; display: flex; flex-direction: column; align-items: center; gap: 63px;">
    <div style="text-align: center; max-width: 800px;">
      <h2 style="color: #1C3A3F; font-size: 36px; font-family: Roboto, sans-serif; font-weight: 700; line-height: 1.2; margin-bottom: 20px;">Alasan Harus Memilih Pastijadi</h2>
      <p style="color: #1C3A3F; font-size: 18px; font-family: Roboto, sans-serif; font-weight: 300; line-height: 1.5;">Kami menyediakan layanan Digital Business Transformation Solutions</p>
    </div>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 34px; width: 100%;">
      <div style="width: 100%; max-width: 439px; background: white; box-shadow: 0px 10px 4px #1B393E; border-radius: 20px; overflow: hidden; margin-bottom: 20px;">
        <img style="width: 100%; height: auto; object-fit: cover;" src="https://via.placeholder.com/383x223" alt="Placeholder image" />
        <div style="padding: 20px; text-align: center;">
          <h3 style="color: black; font-size: 20px; font-family: Roboto, sans-serif; font-weight: 700; margin-bottom: 10px;">Terjamin aman dan Terpecaya</h3>
          <p style="color: black; font-size: 15px; font-family: Roboto, sans-serif; font-weight: 300; line-height: 1.5;">homespot sebagai situs properti terpercaya siap membantu menemukan hunian idaman Anda</p>
        </div>
      </div>
      <div style="width: 100%; max-width: 439px; background: white; box-shadow: 0px 10px 4px #1B393E; border-radius: 20px; overflow: hidden; margin-bottom: 20px;">
        <img style="width: 100%; height: auto; object-fit: cover;" src="https://via.placeholder.com/383x223" alt="Placeholder image" />
        <div style="padding: 20px; text-align: center;">
          <h3 style="color: black; font-size: 20px; font-family: Roboto, sans-serif; font-weight: 700; margin-bottom: 10px;">Relasi Terbaik</h3>
          <p style="color: black; font-size: 15px; font-family: Roboto, sans-serif; font-weight: 300; line-height: 1.5;">homespot adalah situs properti terbesar dan terpercaya yang telah melayani jutaan masyarakat Indonesia</p>
        </div>
      </div>
      <div style="width: 100%; max-width: 439px; background: white; box-shadow: 0px 10px 4px #1B393E; border-radius: 20px; overflow: hidden; margin-bottom: 20px;">
        <img style="width: 100%; height: auto; object-fit: cover;" src="https://via.placeholder.com/383x223" alt="Placeholder image" />
        <div style="padding: 20px; text-align: center;">
          <h3 style="color: black; font-size: 20px; font-family: Roboto, sans-serif; font-weight: 700; margin-bottom: 10px;">1jt+ Iklan Artikle</h3>
          <p style="color: black; font-size: 15px; font-family: Roboto, sans-serif; font-weight: 300; line-height: 1.5;">Dengan lebih dari 1jt properti tersedia di situs web, Rumahku dapat mencocokkan Anda dengan rumah yang diinginkan.</p>
        </div>
      </div>
    </div>
    <a href="#" style="display: inline-block; padding: 13px 35px; background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%); border-radius: 16px; color: white; font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 700; text-decoration: none; text-align: center;">Selengkapnya</a>
  </div><br><br><br><br><br><br>
  <div style="width: 504px; height: 39px; left: 104px; top: 2900px; position: absolute">
    <div style="width: 367.84px; left: 136.16px; top: 0px; position: absolute; color: #EF6937; font-size: 32px; font-family: Inter; font-weight: 600; word-wrap: break-word">Artikel Pastijadi</div>
    <div style="width: 44px; height: 0px; left: 0px; top: 25px; position: absolute; border-radius: 20px; border: 3px #21454B solid"></div>
    <div style="width: 49px; height: 0px; left: 52px; top: 25px; position: absolute; border: 3px #F28E16 solid"></div>
</div>
  <div class="container-fluid py-5" style="background: linear-gradient(105deg, #1C3B40 0%, #22474D 50%, #2A575E 100%)">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h2 class="text-white mb-3" style="font-size: 48px; font-family: Roboto, sans-serif; font-weight: 700;">Artikel Pastijadi</h2>
          <p class="text-white mb-5" style="font-size: 26px; font-family: Roboto, sans-serif; font-weight: 300;">Kami menyediakan layanan Digital Business Transformation Solutions</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="d-flex flex-wrap justify-content-center gap-4">
            <div class="card" style="width: 270px; border-radius: 13px; border: 4px solid black; overflow: hidden;">
              <img src="https://via.placeholder.com/248x223" class="card-img-top" alt="Placeholder" style="border-radius: 11px;">
              <div class="card-body">
                <h5 class="card-title" style="color: #152E32; font-size: 19.75px; font-family: 'DM Sans', sans-serif; font-weight: 700;">Kisah Nabih Nuh</h5>
                <p class="card-text text-end" style="color: #152D31; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500;">Episode 5</p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-light text-dark border border-dark" style="font-size: 11px; font-family: 'DM Sans', sans-serif; font-weight: 700;">0.25 ETH</span>
                  <span style="color: #152F33; font-size: 15px; font-family: 'DM Sans', sans-serif; font-weight: 500;">Place a bid</span>
                </div>
                <a href="#" class="btn btn-sm text-white mt-3" style="background: #152E32; border-radius: 109px; font-size: 11px; font-family: 'DM Sans', sans-serif; font-weight: 700;">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col-auto">
          <a href="#" class="btn btn-lg text-white" style="background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%); border-radius: 16px; font-family: Montserrat, sans-serif; font-weight: 700;">Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>

<!-- Footer -->
<div class="bg-gradient-green py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-3">
                <img src="https://via.placeholder.com/122x118" alt="Logo" class="img-fluid mb-3">
                <p class="text-white fs-4">Digital Business<br/>Transformation Solutions.</p>
            </div>
            <div class="col-md-3">
                <h5 class="text-white fw-bold mb-3">Headquarters</h5>
                <p class="text-white">Lippo Thamrin Lt.5 #0503<br/>Jl. M.H.Thamrin No.20, Menteng<br/>Jakarta Pusat 10350, Indonesia</p>
            </div>
            <div class="col-md-3">
                <h5 class="text-white fw-bold mb-3">Support</h5>
                <p class="text-white">Privacy Policy<br/>Term and Conditions</p>
            </div>
            <div class="col-md-3">
                <h5 class="text-white fw-bold mb-3">Connect With Us</h5>
                <div class="d-flex flex-wrap">
                    <div class="bg-white rounded-circle me-2 mb-2" style="width: 36px; height: 36px;"></div>
                    <div class="bg-white rounded-circle me-2 mb-2" style="width: 36px; height: 36px;"></div>
                    <div class="bg-white rounded-circle me-2 mb-2" style="width: 36px; height: 36px;"></div>
                    <div class="bg-white rounded-circle me-2 mb-2" style="width: 36px; height: 36px;"></div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
