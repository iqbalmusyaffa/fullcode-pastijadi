<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Pastijadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .bg-gradient-custom {
            background: linear-gradient(135deg, #142C30 0%, #2A575E 100%);
        }

        .bg-gradient-header {
            background: linear-gradient(155deg, #142C30 0%, #4EA1AD 100%);
        }

        .bg-gradient-green {
            background: linear-gradient(135deg, #142C30 0%, #2A575E 100%);
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
        /* Button Customization */
.btn-custom {
    width: 100%;
    max-width: 200px;
    background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%);
    border-radius: 16px;
    color: white;
    font-size: 16px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    text-align: center;
    text-decoration: none;
}

/* Responsive Card Adjustments */
.card-title {
    font-size: 1.2rem;
    margin-bottom: 0.75rem;
}

.badge {
    font-size: 11px;
}

.card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

    </style>
</head>

<body>
      @include('layouts.header2')
      <br>
      <div class="container-fluid services-section text-center py-5 mt-6">
        <div class="row">
            <div class="col-12">
                <h2 class="services-title" style="font-size: 2.5rem; font-family: Inter, sans-serif; font-weight: 600;">Our Blog</h2>
                <div class="line-container d-flex justify-content-center mt-3">
                    <div class="line line-blue me-2" style="width: 5%; height: 5px;"></div>
                    <div class="line line-orange" style="width: 5%; height: 5px;"></div>
                </div>
            </div>
        </div>
    </div>
    <main class="container my-5">
    </main>
    <form action="{{ route('home') }}" method="GET" class="container mb-3">
        <!-- Category Filter -->
        <div class="row mb-2 justify-content-center align-items-center">
            <div class="col-12 col-md-3">
                <select name="category" class="form-select">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div><br>
            <div class="col-12 col-md-2 text-center">
                <button type="submit" class="btn"
                    style="width:100%; max-width:200px; background: linear-gradient(100deg, #FDC02C 0%, #ED5C38 100%);
                           border-radius: 16px; color: white; font-size: 16px; font-family: Montserrat, sans-serif;
                           font-weight: 700; text-decoration: none; text-align: center;">
                    Filter
                </button>
            </div>
        </div>
    </form>
    <section class="container my-5">
        <h3 class="mb-4">Related Blogs</h3>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <!-- Blog Image -->
                        <img src="{{ Storage::url('images/' . $blog->image) }}" class="card-img-top" alt="Blog image">

                        <div class="card-body">
                            <!-- Blog Title -->
                            <h5 class="card-title">
                                {{ \Illuminate\Support\Str::words($blog->title, 50, '...') }}
                            </h5>

                            <!-- Category Badge -->
                            <span class="badge bg-light text-dark border border-dark"
                                  style="font-size: 11px; font-family: 'DM Sans', sans-serif; font-weight: 700;">
                                {{ $blog->categories->nama_kategori }}
                            </span>

                            <!-- Author and Date Info -->
                            <div class="d-flex align-items-center mt-3">
                                <img src="{{ $blog->user->profile ? asset('/storage/users/' . $blog->user->profile) : 'https://via.placeholder.com/57x57' }}"
                                     class="rounded-circle me-3" alt="{{ $blog->user->name }}" width="57" height="57">
                                <div>
                                    <p class="mb-0 fw-bold">{{ $blog->user->name }}</p>
                                    <small class="text-muted">
                                        {{ $blog->published_at->format('M d, Y') }} • {{ $blog->read_time }} min read
                                    </small>
                                </div>
                            </div>

                            <!-- Read More Button -->
                            <div class="text-center mt-3">
                                <a href="{{ route('blogfe.show', $blog->id) }}" class="btn btn-custom">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @include('layouts.footer2')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
