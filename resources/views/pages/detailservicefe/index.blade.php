<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $service->name }} - Service Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assetsnavbar/css/nucleo-svg.css') }}" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
    </style>
</head>
<body>

<!-- Navbar -->
@include('layouts.header2')
<br><br><br>
<div class="container mt-6">
    <!-- Section Title -->
    <h1 class="text-orange mb-4 text-center">Services</h1>

    <!-- Service Image -->
    <div class="row mb-4">
        <div class="col-12">
            <img src="{{ asset('storage/images/' . $service->image) }}" class="img-fluid rounded" alt="{{ $service->name }}">
        </div>
    </div>

    <!-- Service Information -->
    <div class="p-4">
        <!-- Service Name -->
        <h2 class="text-dark mb-4 text-center">{{ $service->nama_services }}</h2>

        <!-- Service Description -->
        <p class="lead mb-4 text-justify">{{ $service->deskripsi }}</p>
        <p class="lead mb-4 text-justify">{!! $service->deskripsifull !!}</p>

        <!-- Price Information -->
        <p class="text-muted">
            <h4 class="mb-3">Price: Rp. {{ number_format($service->price, 0, ',', '.') }}</h4>
        </p>
        <p class="text-muted text-justify">Biaya dihitung dengan mempertimbangkan jumlah halaman yang akan dimuat dan durasi.</p>

        <!-- Call to Action Button -->
        <div class="text-center">
            <a href="https://wa.me/6285777986615?text=Halo%20Admin.%20Saya%20tertarik%20untuk%20menggunakan%20layanan%20{{ urlencode($service->nama_services) }}%20yang%20ditawarkan.%20Bisa%20berikan%20saya%20informasi%20lebih%20lanjut%20%3F%20Terima%20kasih." class="btn btn-gradient-orange btn-lg">
                Start Project
            </a>
        </div>

    </div>
</div>
<!-- Service Information -->
@extends('layouts.footer2')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
