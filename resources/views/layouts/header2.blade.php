<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Internal Styles -->
    <style>
        body {
            height: 200vh; /* Increased height for scrolling effect */
            margin: 0; /* Remove default margin */
            font-family: Arial, sans-serif; /* Set default font */
        }

        .custom-navbar {
            transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
            z-index: 1000; /* Ensure navbar is above other content */
            padding: 1.5rem 1rem; /* Increased padding for larger size */
            font-size: 1.2rem; /* Increased font size */
        }

        .navbar-brand {
            font-size: 1.5rem; /* Larger brand text */
        }

        .navbar-transparent {
            background: rgba(20, 44, 48, 0.5); /* Semi-transparent background */
        }

        .navbar-solid {
            background: linear-gradient(135deg, #142C30 0%, #2A575E 100%); /* Solid background */
        }

        .nav-link:hover {
            color: #FFD700; /* Change text color to gold on hover */
        }

        .form-control {
            width: 250px; /* Set width for search input */
        }

        .navbar-nav .nav-item {
            margin-right: 15px; /* Space between nav items */
        }

        /* Additional spacing for fixed navbar */
        .spacer {
            height: 80px; /* Adjust according to increased navbar height */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg custom-navbar navbar-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Navbar Scroll</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto">
                    <!-- Home Link -->
                    <li class="nav-item">
                        <a class="nav-link ps-2 d-flex align-items-center text-white" id="dropdownMenuPages" href="{{ route('home') }}">
                            <span class="material-icons opacity-6 me-2">home</span>
                            Home
                        </a>
                    </li>

                    <!-- About Link -->
                    <li class="nav-item">
                        <a class="nav-link ps-2 d-flex align-items-center text-white" id="dropdownMenuBlocks" href="{{ route('about.index') }}">
                            <span class="material-icons opacity-6 me-2">info</span>
                            About
                        </a>
                    </li>

                    <!-- Blog Link -->
                    <li class="nav-item">
                        <a class="nav-link ps-2 d-flex align-items-center text-white" id="dropdownMenuDocs" href="{{ route('blogfe.index') }}">
                            <span class="material-icons opacity-6 me-2">rss_feed</span>
                            Blog
                        </a>
                    </li>

                    <!-- Services Link -->
                    <li class="nav-item">
                        <a class="nav-link ps-2 d-flex align-items-center text-white" id="dropdownMenuServices" href="{{ route('servicesfe.index') }}">
                            <span class="material-icons opacity-6 me-2">build</span>
                            Services
                        </a>
                    </li>

                    <!-- Contact Link -->
                    <li class="nav-item">
                        <a class="nav-link ps-2 d-flex align-items-center text-white" id="dropdownMenuContact" href="{{ route('contact.index') }}">
                            <span class="material-icons opacity-6 me-2">contacts</span>
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Spacer for fixed navbar -->
    <div class="spacer"></div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onscroll = function() {
            const navbar = document.querySelector('.custom-navbar');
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                navbar.classList.remove('navbar-solid');
                navbar.classList.add('navbar-transparent');
            } else {
                navbar.classList.remove('navbar-transparent');
                navbar.classList.add('navbar-solid');
            }
        };
    </script>
</body>

</html>
