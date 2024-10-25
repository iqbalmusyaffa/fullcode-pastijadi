<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('assetsnavbar/css/nucleo-svg.css') }}" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
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
<main class="container my-5 mt-6">
    <article>
        <!-- Image -->
        <img src="{{ Storage::url('images/' . $blog->image) }}"
             class="img-fluid mb-4"
             alt="{{ $blog->title }}"
             style="width: 100%; height: auto; object-fit: cover;">

        <!-- Title -->
        <h2 class="display-6 fw-bold mb-3">{{ $blog->title }}</h2>

        <!-- Author and Date -->
        <p class="lead">
            <strong>Written by {{ $blog->user->name }}</strong>
            <span class="text-muted ms-3">{{ $blog->published_at->format('l, F j') }}</span>
        </p>

        <!-- Category Badge -->
        <span class="badge bg-light text-dark border border-dark" style="font-size: 11px; font-family: 'DM Sans', sans-serif; font-weight: 700;">
            {{ $blog->categories->nama_kategori }}
        </span>

        <!-- Article Content -->
        <div class="article-content mt-3">
            <p>{!! $blog->description !!}</p>
        </div>
    </article>
</main>

<!-- Footer -->
@extends('layouts.footer2')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
