<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faq</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
    @include('layouts.header2')
    <div class="container-fluid services-section text-center py-5 mt-6">
        <div class="row">
            <div class="col-12">
                <h2 class="services-title" style="font-size: 2.5rem; font-family: Inter, sans-serif; font-weight: 600;">Our Services</h2>
                <div class="line-container d-flex justify-content-center mt-3">
                    <div class="line line-blue me-2" style="width: 5%; height: 5px;"></div>
                    <div class="line line-orange" style="width: 5%; height: 5px;"></div>
                </div>
            </div>
        </div>
    </div>
    @extends('layouts.footer2')
</body>
</html>
