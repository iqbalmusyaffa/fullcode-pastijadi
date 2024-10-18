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
    @include('layouts.header2')
    <br><br><br>
    <div class="container-fluid services-section text-center py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="services-title" style="font-size: 2.5rem; font-family: Inter, sans-serif; font-weight: 600 ;
        border-radius:">Hubungi kami</h2>
                <div class="line-container d-flex justify-content-center mt-3">
                    <div class="line line-blue me-2" style="width: 5%; height: 5px;"></div>
                    <div class="line line-orange" style="width: 5%; height: 5px;"></div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.kontak')
    @extends('Layouts.footer2')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
