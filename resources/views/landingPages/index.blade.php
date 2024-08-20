<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pastijadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        .testimonial-section {
            text-align: center;
            padding: 50px 0;
            background-color: #ffffff;
        }
        .bg-gradient-custom {
            background: linear-gradient(120deg, #152D31 0%, #21454B 48%, #2A575E 100%);
        }
        .testimonial-section h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #2c3e50;
        }
        .testimonial-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .testimonial-box {
            background-color: #365a67;
            border-radius: 15px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            color: #ffffff;
            text-align: center;
            position: relative;
        }
        .testimonial-box img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #ffffff;
            margin-bottom: 15px;
        }
        .testimonial-box h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        .testimonial-box p {
            font-size: 0.9rem;
            margin-bottom: 20px;
            color: #d1ecf1;
        }
        .testimonial-box .stars {
            color: #ffcc00;
            font-size: 1.2rem;
        }
        .blog {
            background: linear-gradient(104deg, #173136 0%, #23494F 50%, #2A575E 100%);
            padding: 20px;
        }
        .card {
            border-radius: 13px;
            overflow: hidden;
        }
        .card-title {
            color: #152E32;
            font-size: 19.75px;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
        }
        .btn-custom {
            background: #152E32;
            border-radius: 109px;
            font-size: 11px;
            font-family: 'DM Sans', sans-serif;
            font-weight: 700;
        }
        .trending-header {
            font-size: 24px;
            font-family: Poppins, sans-serif;
            font-weight: 600;
            color: white;
            margin-top: 40px;
        }
        .trending-card {
            height: 164px;
            position: relative;
        }
        .trending-img {
            width: 156.44px;
            height: 100px;
            background: #F5F6F8;
        }
        .trending-img-overlay {
            position: absolute;
            top: -86px;
            left: -23.9px;
            width: 202.07px;
            height: 233px;
        }
        .trending-content {
            position: absolute;
            top: 2px;
            left: 178.17px;
            color: white;
        }
        .trending-title {
            font-size: 17.35px;
            font-family: Poppins, sans-serif;
            font-weight: 500;
        }
        .trending-description {
            opacity: 0.5;
            font-size: 12px;
            font-family: Poppins, sans-serif;
            line-height: 20px;
            letter-spacing: 0.3px;
        }
.services-section {
    text-align: center;
    padding: 50px ;
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
    /* Additional styles from previous version */
    .text-warning,
    .text-white {
        text-align: center;
    }
    .img-fluid {
        margin: 0 auto;
    }
    .py-5 {
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .position-relative {
        height: auto;
        padding-bottom: 2rem;
    }

        }
    </style>
</head>
<body>
<!-- Header -->
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

<div class="container-fluid p-0">
    <div class="position-relative">
        <!-- Main Content -->
        <div class="position-relative py-5" style="top: 0; background-image: url('assetsFe/img/frame/Frame 1000002737.png'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 80vh;">
          <div class="container">
              <div class="row align-items-center" style="height: 100%;">
                  <div class="col-lg-6" style="margin-top: 150px;">
                      <h1 class="fw-bold" style="font-size: 2.5rem; line-height: 1.2;">
                          KAMI MENAWARKAN<br/>LAYANAN PENGEMBANGAN WEBSITE KUSTOM<br/>LAYANAN<br/>
                          <span class="text-secondary fs-4 fw-normal">Solusi Transformasi Bisnis Digital</span>
                      </h1>
                      <a href="#" class="btn bg-gradient-orange text-white fw-bold mt-4 rounded-4 px-4 py-2">Selengkapnya</a>
                  </div>
                  <div class="col-lg-6 text-center">
                      <img src="{{ asset('assetsFe/img/frame/logo1.png') }}" alt="Gambar" class="img-fluid">
                  </div>
              </div>
          </div>
      </div>

        <div class="position-relative py-5" style="z-index: 1; background-image: url('assetsFe/img/frame/Frame 1000002736.png'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 80vh;">
            <div class="container">
                <div class="row align-items-center justify-content-between" style="margin-top: 70px;">
                    <div class="col-md-6">
                        <div class="custom-icon">
                            <div style="width: 9.47px; height: 11.64px; left: 9.97px; top: 15.58px;"></div>
                            <div style="width: 9.49px; height: 18.45px; left: 16.73px; top: 8.77px;"></div>
                            <div style="width: 9.47px; height: 9.08px; left: 23.52px; top: 18.15px;"></div>
                            <div style="width: 38.48px; height: 32.25px; left: 2.24px; top: 1.88px;"></div>
                        </div>
                        <img src="{{ asset('assetsFe/img/frame/logopastijadi1.png') }}" alt="Company Logo" class="img-fluid mb-3" style="max-width: 180.32px; height: auto;">
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
        </div>
       <div class="container-fluid services-section">
    <div class="row">
        <div class="col-12">
            <div class="services-title">Our Services</div>
            <div class="line-container">
                <div class="line line-blue"></div>
                <div class="line line-orange"></div>
            </div>
        </div>
    </div>
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
                            @foreach($services as $service)
                                <div class="col-6 mb-4">
                                    <img src="{{ asset('storage/images/' . $service->image) }}" alt="{{ $service->nama_services }}" class="img-fluid rounded">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="servicesAccordion">
                            @foreach($services as $service)
                                <div class="accordion-item bg-transparent border-white">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}">
                                            {{ strtoupper($service->nama_services) }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                                        <div class="accordion-body text-white" style="text-align: justify;">
                                            {{ $service->deskripsi }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
<div class="container-fluid services-section">
    <div class="row">
        <div class="col-12">
            <div class="services-title">Reasons for choosing</div>
            <div class="line-container">
                <div class="line line-blue"></div>
                <div class="line line-orange"></div>
            </div>
        </div>
    </div>
</div>
<div style="max-width: 100%; padding: 20px; display: flex; flex-direction: column; align-items: center; gap: 63px;">
    <div style="text-align: center; max-width: 800px;">
      <h2 style="color: #1C3A3F; font-size: 36px; font-family: Roboto, sans-serif; font-weight: 700; line-height: 1.2; margin-bottom: 20px;">Alasan Harus Memilih Pastijadi</h2>
      <p style="color: #1C3A3F; font-size: 18px; font-family: Roboto, sans-serif; font-weight: 300; line-height: 1.5;">Kami menyediakan layanan Digital Business Transformation Solutions</p>
    </div>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 34px; width: 100%;">
      <div style="width: 100%; max-width: 439px; background: white; box-shadow: 0px 10px 4px #1B393E; border-radius: 20px; overflow: hidden; margin-bottom: 20px;">
        <img style="width: 100%; height: auto; object-fit: cover;" src="{{ asset('assetsFe/img/frame/asset1.png') }}" alt="Placeholder image" />
        <div style="padding: 20px; text-align: center;">
          <h3 style="color: black; font-size: 20px; font-family: Roboto, sans-serif; font-weight: 700; margin-bottom: 10px;">Terjamin aman dan Terpecaya</h3>
          <p style="color: black; font-size: 15px; font-family: Roboto, sans-serif; font-weight: 300; line-height: 1.5;">homespot sebagai situs properti terpercaya siap membantu menemukan hunian idaman Anda</p>
        </div>
      </div>
      <div style="width: 100%; max-width: 439px; background: white; box-shadow: 0px 10px 4px #1B393E; border-radius: 20px; overflow: hidden; margin-bottom: 20px;">
        <img style="width: 100%; height: auto; object-fit: cover;" src="{{ asset('assetsFe/img/frame/asset2.png') }}" alt="Placeholder image" />
        <div style="padding: 20px; text-align: center;">
          <h3 style="color: black; font-size: 20px; font-family: Roboto, sans-serif; font-weight: 700; margin-bottom: 10px;">Relasi Terbaik</h3>
          <p style="color: black; font-size: 15px; font-family: Roboto, sans-serif; font-weight: 300; line-height: 1.5;">homespot adalah situs properti terbesar dan terpercaya yang telah melayani jutaan masyarakat Indonesia</p>
        </div>
      </div>
      <div style="width: 100%; max-width: 439px; background: white; box-shadow: 0px 10px 4px #1B393E; border-radius: 20px; overflow: hidden; margin-bottom: 20px;">
        <img style="width: 100%; height: auto; object-fit: cover;" src="{{ asset('assetsFe/img/frame/asset3.png') }}" alt="Placeholder image" />
        <div style="padding: 20px; text-align: center;">
          <h3 style="color: black; font-size: 20px; font-family: Roboto, sans-serif; font-weight: 700; margin-bottom: 10px;">1jt+ Iklan Artikle</h3>
          <p style="color: black; font-size: 15px; font-family: Roboto, sans-serif; font-weight: 300; line-height: 1.5;">Dengan lebih dari 1jt properti tersedia di situs web, Rumahku dapat mencocokkan Anda dengan rumah yang diinginkan.</p>
        </div>
      </div>
    </div>
    
  </div><br><br><br><br><br><br>
  {{-- <div style="width: 504px; height: 39px; left: 104px; top: 3400px; position: absolute">
    <div style="width: 367.84px; left: 136.16px; top: 0px; position: absolute; color: #EF6937; font-size: 32px; font-family: Inter; font-weight: 600; word-wrap: break-word">Testimonial Pastijadi</div>
    <div style="width: 44px; height: 0px; left: 0px; top: 25px; position: absolute; border-radius: 20px; border: 3px #21454B solid"></div>
    <div style="width: 49px; height: 0px; left: 52px; top: 25px; position: absolute; border: 3px #F28E16 solid"></div>
</div> --}}
<div class="container-fluid services-section">
    <div class="row">
        <div class="col-12">
            <div class="services-title">Testimonial Pastijadi</div>
            <div class="line-container">
                <div class="line line-blue"></div>
                <div class="line line-orange"></div>
            </div>
        </div>
    </div>
</div>
<div class="container text-center my-5">
    <div class="mx-auto" style="max-width: 800px;">
      <h2 class="text-dark font-weight-bold mb-4">Testimonial from Satisfied Customers</h2>
      <p class="text-dark font-weight-light">Kami menyediakan layanan Digital Business Transformation Solutions</p>
    </div>
  </div>
  <div class="testimonial-container d-flex justify-content-center flex-wrap gap-4">
      <div class="testimonial-box" style="width: 500px; height: 300px;">
          <img src="{{ asset('assetsFe/img/team/team-1.jpg') }}" alt="Sarah K." style="width: 100px; height: 100px; margin: auto;">
          <h3>Sarah K.</h3>
          <p>I was looking for health information, but found the HealthTech website. This website really helps me save time without having to go to the doctor</p>
          <div class="stars" >★★★★★</div>
      </div>
      <div class="testimonial-box" style="width: 500px; height: 300px;">
          <img src="{{ asset('assetsFe/img/team/team-2.jpg') }}" alt="Michael L." style="width: 100px; height: 100px; margin: auto;">
          <h3>Michael L.</h3>
          <p>This website really helps me so that I don't easily believe the health hoaxes spread on social media</p>
          <div class="stars">★★★★☆</div>
      </div>
      <div class="testimonial-box" style="width: 500px; height: 300px;">
          <img src="{{ asset('assetsFe/img/team/team-3.jpg') }}" alt="Lauren M." style="width: 100px; height: 100px; margin: auto;">
          <h3>Lauren M.</h3>
          <p>This website has many experts with experience in their fields so we can trust it</p>
          <div class="stars">★★★★★</div>
      </div>
  </div>
</div><br><br><br>
{{-- <div style="text-align: center; max-width: 800px; margin: auto;">
  <h2 style="color: #000000; font-size: 36px; font-family: Roboto, sans-serif; font-weight: buatca; line-height: 1.2; margin-bottom: 20px;">Testimonial from Satisfied Customers</h2>
  <p style="color: #000000; font-size: 18px; font-family: Roboto, sans-serif; font-weight: 300; line-height: 1.5;">Kami menyediakan layanan Digital Business Transformation Solutions</p>
</div> --}}
<div class="container-fluid services-section">
    <div class="row">
        <div class="col-12">
            <div class="services-title">Blog Pasti Jadi</div>
            <div class="line-container">
                <div class="line line-blue"></div>
                <div class="line line-orange"></div>
            </div>
        </div>
    </div>
</div>
<form action="{{ route('home') }}" method="GET" class="mb-3">
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
        <div class="col-12 col-md-4 mb-2 mb-md-0" >
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



  <!-- Container to center and align content -->
    <!-- Filter Form -->

<!-- Blog Posts -->
<div class="blog">
    <div class="row mt-4">
        <div class="d-flex flex-wrap justify-content-center gap-4">
            @foreach ($blogs as $blog)
            <div class="card" style="width: 270px;">
                <img src="{{ asset('storage/images/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <!-- Category Badge -->
                    <span class="badge bg-light text-dark border border-dark" style="font-size: 11px; font-family: 'DM Sans', sans-serif; font-weight: 700;">
                        {{ $blog->categories->nama_kategori }}
                    </span>
                    <div class="d-flex align-items-center mt-4">
                        <img src="{{ $blog->user->profile ? asset('/storage/users/' . $blog->user->profile) : 'https://via.placeholder.com/57x57' }}" class="rounded-circle me-3" alt="{{ $blog->user->name }}" width="57" height="57">
                        <div>
                            <p class="mb-0 fw-bold">{{ $blog->user->name }}</p>
                            <p class="mb-0 text-muted">{{ $blog->created_at->format('M d, Y') }} ∙ {{ $blog->read_time }} min read</p>
                        </div>
                    </div>
                    <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-sm text-white mt-3 btn-custom">Selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>




  {{-- <div class="trending-header">Trending</div>

  <div class="row mt-4">
    <div class="d-flex flex-wrap justify-content-center gap-4">
        <div class="card" style="width: 270px;">
            <img src="https://via.placeholder.com/248x223" class="card-img-top" alt="Placeholder">
            <div class="card-body">
                <h5 class="card-title">Kisah Nabih Nuh</h5>
                <div class="d-flex align-items-center mt-4">
                    <img src="https://via.placeholder.com/57x57" class="rounded-circle mr-3" alt="Author Image">
                    <div>
                        <p class="mb-0 font-weight-bold">Dasteen</p>
                        <p class="mb-0 text-muted">Jan 10, 2022 ∙ 3 min read</p>
                    </div>
                </div>
                <a href="#" class="btn btn-sm text-white mt-3 btn-custom">Selengkapnya</a>
            </div>
        </div>
    </div>
</div> --}}
  </div>
</div>

</div><br><br><br><br><br>
<div class="container py-5">
  <div class="row justify-content-center">
      <div class="col-lg-8">
          <div class="card bg-gradient-custom text-white rounded-4 shadow">
              <div class="card-body p-5">
                  <h2 class="text-center mb-4">Hubungi Kami</h2>
                  <form>
                      <div class="mb-3">
                          <input type="text" class="form-control" placeholder="Nama">
                      </div>
                      <div class="mb-3">
                          <input type="email" class="form-control" placeholder="Email">
                      </div>
                      <div class="mb-3">
                          <input type="text" class="form-control" placeholder="Perusahaan">
                      </div>
                      <div class="mb-3">
                          <select class="form-select">
                              <option selected>Layanan yang Diminati</option>
                              <option value="1">Layanan 1</option>
                              <option value="2">Layanan 2</option>
                              <option value="3">Layanan 3</option>
                          </select>
                      </div>
                      <div class="mb-3">
                          <textarea class="form-control" rows="3" placeholder="Informasi Tambahan?"></textarea>
                      </div>
                      <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="consentCheck">
                          <label class="form-check-label" for="consentCheck">Saya menyetujui Lollie's Handmade untuk menghubungi saya melalui informasi yang telah saya berikan.</label>
                      </div>
                      <button type="submit" class="btn" style="margin-left:20px; width:710px; display: inline-block;  background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%); border-radius: 16px; color: white; font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 700; text-decoration: none; text-align: center;">Kirim</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div><br><br><br><br>
<!-- Footer -->
<div class="bg-gradient-green py-5">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
