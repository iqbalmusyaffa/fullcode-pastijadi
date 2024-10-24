<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <link rel="stylesheet" type="text/css" href="{{ asset('kontakus/css/kontak.css') }}">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card bg-gradient-custom text-white rounded-4 shadow">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="text-center mb-4 text-white">Hubungi Kami</h2>
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name"placeholder="Nama" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="company" placeholder="Perusahaan">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" name="service" required>
                                    <option selected disabled>Layanan yang Diminati</option>
                                    <option value="Layanan 1">Layanan 1</option>
                                    <option value="Layanan 2">Layanan 2</option>
                                    <option value="Layanan 3">Layanan 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="additional_info" rows="3" placeholder="Informasi Tambahan?"></textarea>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="consentCheck" name="consent" required>
                                <label class="form-check-label" for="consentCheck">
                                    Saya menyetujui pastijadi untuk menghubungi saya melalui informasi yang telah saya berikan.
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn"
                                    style="width: 100%; max-width: 300px; background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%);
                                    border-radius: 16px; color: white; font-size: 16px; font-family: Montserrat, sans-serif; font-weight: 700;">
                                    Kirim
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
