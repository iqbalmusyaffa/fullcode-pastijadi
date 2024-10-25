<div class="bg-gradient-green py-5">
    <div class="container">
        <div class="row gy-4 text-center text-md-start">
            <!-- Logo and Slogan -->
            <div class="col-md-3 col-12">
                <img src="{{ asset('assetsFe/img/logo.png') }}" alt="Logo" class="img-fluid mb-3">
                <p class="text-white fs-4">Digital Business<br>Transformation Solutions.</p>
            </div>

            <!-- Headquarters Information -->
            <div class="col-md-3 col-12">
                <h5 class="text-white fw-bold mb-3">Headquarters</h5>
                <p class="text-white">
                    Lippo Thamrin Lt.5 #0503<br>
                    Jl. M.H.Thamrin No.20, Menteng<br>
                    Jakarta Pusat 10350, Indonesia
                </p>
            </div>

            <!-- Support Links -->
            <div class="col-md-3 col-12">
                <h5 class="text-white fw-bold mb-3">Support</h5>
                <p class="text-white">
                    <a href="#" class="text-white text-decoration-none">Privacy Policy</a><br>
                    <a href="#" class="text-white text-decoration-none">Terms and Conditions</a>
                </p>
            </div>

            <!-- Social Media Links -->
            <div class="col-md-3 col-12">
                <h5 class="text-white fw-bold mb-3">Connect With Us</h5>
                <div class="d-flex justify-content-center justify-content-md-start">
                    <a class="btn btn-social me-2" style="background-color: #3b5998;" href="#!" aria-label="Facebook">
                        <i class="fab fa-facebook-f text-white"></i>
                    </a>
                    <a class="btn btn-social me-2" style="background-color: #55acee;" href="#!" aria-label="Twitter">
                        <i class="fab fa-twitter text-white"></i>
                    </a>
                    <a class="btn btn-social me-2" style="background-color: #dd4b39;" href="#!" aria-label="Google">
                        <i class="fab fa-google text-white"></i>
                    </a>
                    <a class="btn btn-social me-2" style="background-color: #ac2bac;" href="#!" aria-label="Instagram">
                        <i class="fab fa-instagram text-white"></i>
                    </a>
                    <a class="btn btn-social me-2" style="background-color: #0082ca;" href="#!" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in text-white"></i>
                    </a>
                    <a class="btn btn-social" style="background-color: #333333;" href="#!" aria-label="GitHub">
                        <i class="fab fa-github text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sticky Footer CSS (if footer needs to stick to bottom) -->
<style>
    html, body {
        height: 100%;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    main {
        flex: 1;
    }

    .bg-gradient-green {
        background: linear-gradient(135deg, #142C30 0%, #2A575E 100%);
    }

    footer {
        color: white;
        text-align: center;
    }

    footer a {
        color: #F28E16; /* Footer link color */
        text-decoration: none;
    }

    footer a:hover {
        color: #fff; /* Footer link hover color */
    }

    .btn-floating {
        border-radius: 50%;
        display: inline-block;
        width: 40px;
        height: 40px;
        color: white;
        text-align: center;
        line-height: 40px;
    }
    .btn-social {
        width: 40px;
        height: 40px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: white;
        font-size: 1.2rem;
        transition: background-color 0.3s ease;
    }

    .btn-social:hover {
        filter: brightness(0.85); /* Slight darkening on hover */
    }

    .text-white {
        color: white !important; /* Force icons to be white */
    }

    .me-2 {
        margin-right: 8px; /* Spacing between buttons */
</style>
