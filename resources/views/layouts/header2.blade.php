<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="./assets/img/favicon.png">
        <title> PT Pasti Djadi</title>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="{{ asset('assetsnavbar/css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('assetsnavbar/css/nnucleo-svg.css') }}" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('assetsnavbar/css/material-kit.css?v=3.0.4') }}" rel="stylesheet" />
        <!-- Nepcha Analytics (nepcha.com) -->
        <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
        <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
      </head>
<body>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
              <div class="container-fluid px-0">
                <a class="navbar-brand font-weight-bolder ms-sm-3" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                    <img src="{{ asset('assetsFe/img/logo.png') }}" alt="Logo" width="43" height="43">
                </a>
                <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </span>
                </button>
                <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                    <ul class="navbar-nav navbar-nav-hover ms-auto">
                        <!-- Home Link -->
                        <li class="nav-item dropdown dropdown-hover mx-2">
                            <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" href="{{ route('home') }}">
                                <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                                Home
                            </a>
                        </li>

                        <!-- About Link -->
                        <li class="nav-item dropdown dropdown-hover mx-2">
                            <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" href="{{ route('about.index') }}">
                                <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                                About
                            </a>
                        </li>

                        <!-- Blog Link -->
                        <li class="nav-item dropdown dropdown-hover mx-2">
                            <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" href="{{ route('blogfe.index') }}">
                                <i class="material-icons opacity-6 me-2 text-md">article</i>
                                Blog
                            </a>
                        </li>

                        <!-- Services Link -->
                        <li class="nav-item dropdown dropdown-hover mx-2">
                            <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuServices" href="{{ route('servicesfe.index') }}">
                                <i class="material-icons opacity-6 me-2 text-md">article</i>
                                Services
                            </a>
                        </li>

                        <!-- Contact Link -->
                        <li class="nav-item dropdown dropdown-hover mx-2">
                            <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuContact" href="{{ route('contact.index') }}">
                                <i class="material-icons opacity-6 me-2 text-md">article</i>
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>

              </div>
            </nav>
          </div>
        </div>
      </div>

            <!-- End Navbar -->
          </div>
        </div>
      </div>
</body>
</html>
