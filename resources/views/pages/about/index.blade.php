<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASTIJADI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://kit.fontawesome.com/a076d05399.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assetaos/dist/aos.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assetaos/dist/aos.js') }}"> --}}
    <script src="{{ asset('assetaos/dist/aos.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init();
        });
    </script>
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
            background: linear-gradient(135deg, #142C30 0%, #2A575E 100%);
        }

        .bg-gradient-header {
            background: linear-gradient(155deg, #142C30 0%, #4EA1AD 100%);
        }

        .bg-gradient-green {
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
    @include('layouts.header2')
    <br>
    <main>
        <main>
            <section class="py-5">
                <div class="container">
                    <h1 class="text-center mb-5 mt-6">About PASTIJADI</h1>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="bg-gradient-custom rounded-4 p-4" data-aos="fade-right" data-aos-duration="1000">
                                <div class="container d-flex justify-content-center align-items-center" >
                                    <img src="{{ asset('assetsFe/img/frame/logopastijadi1.png') }}" alt="About Image"
                                        class="img-fluid rounded-3" style="width: 332px; height: 432px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="text-justify">PT. Persada Saintek Transformasi Industri Jasa Digital, disingkat PT.
                                PASTIJADI, didirikan pada tahun 2024 dengan visi besar untuk
                                menjadi pelopor dalam transformasi digital industri jasa. Sebagai
                                perusahaan yang baru berdiri, kami hadir dengan dedikasi tinggi untuk
                                menjawab tantangan teknologi modern melalui solusi inovatif dan
                                terdepan.</p>
                            <p class="text-justify">PT. PASTIJADI berkomitmen untuk memberikan keunggulan melalui
                                layanan teknologi informasi yang dirancang secara khusus untuk
                                meningkatkan efisiensi operasional, produktivitas, dan keberlanjutan
                                bisnis di era digital yang terus berkembang. Dengan pendekatan yang
                                adaptif dan berfokus pada kebutuhan pelanggan, kami berupaya
                                menjadi mitra terpercaya dalam mendukung transformasi digital
                                perusahaan Anda, memastikan bahwa setiap langkah menuju masa
                                depan teknologi dilakukan dengan presisi dan integritas.</p>
                                <p class="text-justify">
                                    Didukung oleh tim ahli yang memiliki visi dan inovasi berkelanjutan,
                                    PT. PASTIJADI tidak hanya menciptakan solusi, tetapi juga
                                    membentuk standar baru dalam industri teknologi informasi. Bersama
                                    kami, kemajuan bisnis di era digital menjadi lebih mudah, lebih cepat,
                                    dan lebih terjamin.
                                </p>
                        </div>
                    </div>

                </div>
            </section>
            <div class="container-fluid services-section text-center py-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="services-title"
                            style="font-size: 2.5rem; font-family: Inter, sans-serif; font-weight: 600;">Our Visi Mision
                        </h2>
                        <div class="line-container d-flex justify-content-center mt-3">
                            <div class="line line-blue me-2" style="width: 5%; height: 5px;"></div>
                            <div class="line line-orange" style="width: 5%; height: 5px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <main style="padding: 50px 0;">
            <section style="width: 80%; margin: 0 auto; text-align: center;">
                <!-- Vision Section -->
                <div class="bg-gradient-custom py-3 rounded-4 p-4">
                    <div class="row justify-content-center" data-aos="zoom-out-up" data-aos-duration="1000">
                        <div class="col-md-10">
                            <div class="text-center mb-5">
                                <h2 class="display-4"><span style="color: #F28E16">Our</span> <span
                                        class="text-white">Vision</span></h2>
                                <p class="lead text-white" style="text-align: center">Menjadikan setiap individu dan
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
                                    <div class="card h-100" data-aos="zoom-out-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <h3 class="card-title  text-end" style="color: #F28E16">1</h3>
                                            <p class="card-text" style="text-align: left">Mengembangkan dan menyediakan solusi teknologi informasi yang inovatif
                                                dan sesuai dengan kebutuhan zaman, agar dapat diakses oleh setiap individu
                                                dan bisnis di berbagai level.
                                                </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100" data-aos="zoom-out-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <h3 class="card-title  text-end" style="color: #F28E16">2</h3>
                                            <p class="card-text" style="text-align: left">MMenyederhanakan akses terhadap teknologi canggih untuk memastikan bahwa
                                                setiap pengguna, dari pemula hingga ahli, dapat memanfaatkan potensi penuh
                                                dari data dan teknologi digital.
                                                </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100" data-aos="zoom-out-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <h3 class="card-title  text-end" style="color: #F28E16">3</h3>
                                            <p class="card-text" style="text-align: left">Memberikan pendidikan dan pelatihan tentang teknologi digital dan
                                                pengelolaan data yang pintar, untuk meningkatkan literasi digital dan
                                                kemampuan analitik di semua sektor.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100" data-aos="zoom-out-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <h3 class="card-title  text-end" style="color: #F28E16">4</h3>
                                            <p class="card-text" style="text-align: left">Mendorong inovasi dan kolaborasi antar industri untuk menciptakan solusi
                                                yang berkelanjutan dan ramah lingkungan, memperkuat ekosistem digital yang
                                                inklusif.
                                                </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4" data-aos="zoom-out-up" data-aos-duration="1000">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h3 class="card-title  text-end" style="color: #F28E16">5</h3>
                                            <p class="card-text" style="text-align: left">Mengutamakan keamanan dan privasi data pengguna, membangun
                                                kepercayaan dan menciptakan lingkungan digital yang aman untuk semua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100" data-aos="zoom-out-up" data-aos-duration="1000">
                                        <div class="card-body">
                                            <h3 class="card-title text-end" style="color: #F28E16">6</h3>
                                            <p class="card-text" style="text-align: left">Beradaptasi dan berevolusi secara berkelanjutan untuk menghadapi tantangan
                                                dan memanfaatkan peluang baru dalam era digital, memastikan bahwa
                                                individu dan bisnis dapat tetap relevan dan kompetitif.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- How We Work Section -->
                <div class="container-fluid services-section text-center py-5">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="services-title"
                                style="font-size: 2.5rem; font-family: Inter, sans-serif; font-weight: 600;">How we
                                work!</h2>
                            <div class="line-container d-flex justify-content-center mt-3">
                                <div class="line line-blue me-2" style="width: 5%; height: 5px;"></div>
                                <div class="line line-orange" style="width: 5%; height: 5px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-custom py-3 rounded-4 p-4" style="margin-top: 40px" data-aos="fade-up" data-aos-duration="1000">
                    <div class="bg-gradient-custom rounded-4 p-4"
                        style="background: linear-gradient(135deg, #152D31 0%, #20444A 46%, #2A575E 100%);">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card bg-transparent border-0" data-aos="zoom-out-up" data-aos-duration="1000">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col-3 bg-white mr-3 p-3 rounded"
                                                style="height: 80px; width: 80px">
                                                <h2 class="text-center text-warning mb-0">1</h2>
                                            </div>
                                            <h3 style="color: #F28E16; margin-left: 10px">Pendekatan Berfokus pada Klien</h3>
                                        </div>
                                        <h4 style=" color: #F28E16; text-align: left">Pemahaman Mendalam tentang
                                            Kebutuhan Klien</h4>
                                        <p class="text-white" style="text-align: left">Setiap proyek dimulai dengan
                                            sesi discovery yang intensif
                                            untuk memahami secara mendalam tujuan, kebutuhan, dan tantangan spesifik
                                            klien. Ini memungkinkan kami untuk merancang solusi yang sepenuhnya
                                            disesuaikan dengan kebutuhan mereka.</p>
                                            <h4 style=" color: #F28E16; text-align: left">Komunikasi Terbuka dan Berkelanjutan</h4>
                                            <p class="text-white" style="text-align: left">Kami menjaga jalur komunikasi yang terbuka dan transparan dengan klien kami sepanjang siklus proyek,
                                                memastikan bahwa mereka selalu terinformasi dan terlibat dalam proses pengambilan keputusan.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4" data-aos="zoom-out-up" data-aos-duration="1000">
                                <div class="card bg-transparent border-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col-3 bg-white mr-3 p-3 rounded"
                                                style="height: 80px; width: 80px">
                                                <h2 class="text-center text-warning mb-0">2</h2>
                                            </div>
                                            <h3 style=" color: #F28E16; margin-left: 10px">Kolaborasi dan Tim Kerja</h3>
                                        </div>
                                        <h4 style=" color: #F28E16; text-align: left">Tim Multidisiplin</h4>
                                        <p class="text-white" style="text-align: left">Kami mengandalkan keahlian tim multidisiplin kami,
                                            yang terdiri dari pengembang, desainer, analis data, dan spesialis keamanan,
                                            untuk menyediakan solusi holistik yang mencakup semua aspek teknologi dan desain.</p>
                                            <h4 style=" color: #F28E16; text-align: left">Kerja Sama Tim</h4>
                                            <p class="text-white" style="text-align: left">Kolaborasi erat antara tim kami dan klien merupakan kunci dari pendekatan kami. Melalui workshop, sesi brainstorming,
                                                dan review bersama, kami memastikan bahwa setiap solusi yang kami kembangkan sepenuhnya sejalan dengan visi dan ekspektasi klien.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4" data-aos="zoom-out-up" data-aos-duration="1000">
                                <div class="card bg-transparent border-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col-3 bg-white mr-3 p-3 rounded"
                                                style="height: 80px; width: 80px">
                                                <h2 class="text-center text-warning mb-0">3</h2>
                                            </div>
                                            <h3 style=" color: #F28E16; margin-left: 10px">Metodologi Agile dan Adaptif</h3>
                                        </div>
                                        <h4 style=" color: #F28E16; text-align: left">Agile Development</h4>
                                        <p class="text-white" style="text-align: left">Kami menerapkan metodologi Agile dalam pengembangan produk dan proyek kami, yang memungkinkan
                                            fleksibilitas tinggi dan iterasi cepat berdasarkan feedback untuk memastikan hasil akhir yang optimal.</p>
                                            <h4 style=" color: #F28E16; text-align: left">Responsif terhadap Perubahan</h4>
                                            <p class="text-white" style="text-align: left">Dunia teknologi berubah dengan cepat, dan kami selalu siap untuk menyesuaikan strategi dan rencana proyek kami untuk memenuhi kebutuhan yang berkembang atau tantangan yang tidak terduga, memastikan bahwa kami selalu menyediakan solusi yang paling relevan dan efektif.</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4" data-aos="zoom-out-up" data-aos-duration="1000">
                                <div class="card bg-transparent border-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="col-3 bg-white mr-3 p-3 rounded"
                                                style="height: 80px; width: 80px">
                                                <h2 class="text-center text-warning mb-0">4</h2>
                                            </div>
                                            <h3 style=" color: #F28E16; margin-left: 10px">Komitmen Terhadap Keunggulan dan Inovasi</h3>
                                        </div>
                                        <h4 style=" color: #F28E16; text-align: left">Standar Kualitas Tinggi</h4>
                                        <p class="text-white" style="text-align: left">Kami menerapkan standar kualitas yang ketat di setiap aspek pekerjaan kami, dari kode yang kami tulis hingga interaksi pengguna yang kami desain, untuk memastikan kepuasan klien dan kepatuhan terhadap best practices industri.</p>
                                        <h4 style=" color: #F28E16; text-align: left">Pengembangan Berkelanjutan</h4>
                                        <p class="text-white" style="text-align: left">Komitmen kami terhadap inovasi berarti kami secara proaktif mengeksplorasi dan mengintegrasikan teknologi terbaru dan praktek terbaik dalam solusi yang kami tawarkan, memastikan bahwa klien kami selalu mendapatkan keuntungan dari solusi paling canggih.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
        </main>
        <main>
            <div class="container-fluid services-section text-center py-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="services-title"
                            style="font-size: 2.5rem; font-family: Inter, sans-serif; font-weight: 600;">Structure Organisation</h2>
                        <div class="line-container d-flex justify-content-center mt-3">
                            <div class="line line-blue me-2" style="width: 5%; height: 5px;"></div>
                            <div class="line line-orange" style="width: 5%; height: 5px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-5" data-aos="zoom-out-up" data-aos-duration="1000">
                <div class="row" style="margin-top: 40px">
                    <div class="col-md-12 mb-4">
                        <div class="card team-card rounded-0"> <!-- Removed round corners -->
                            <div class="card-body "> <!-- Removed padding for full-width image -->
                                <img src="{{ asset('assets/img/1.png') }}" alt="William Anderson" class="img-fluid"
                                    style="width: 50%; height: auto; border-radius: 0;"> <!-- Full-width image -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Font Awesome Icons -->
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        </main>
        <!-- Footer -->
        @extends('layouts.footer2')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
