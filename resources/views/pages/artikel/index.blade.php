@include('layouts.header')
@include('layouts.sidebar')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>{{ $title }}</h1>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $title }}</h5>
                        <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addArticle">
                            <i class="bi bi-plus-square"></i> Tambah Artikel
                        </button>

                        <!-- Default Table -->
                        <table class="table table-borderless datatable">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @forelse ($articles as $i => $article)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->categories->nama_kategori }}</td>
                                        <td><img src="{{ asset('storage/images/' . $article->image) }}" alt="{{ $article->title }}" width="100"></td>
                                        <td>{{ \Illuminate\Support\Str::limit($article->description, 50) }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editArticle{{ $article->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#showArticle{{ $article->id }}">
                                                <i class="bi bi-eye-fill"></i>
                                            </button>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('artikel.destroy', $article->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="bi bi-trash3"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Data Artikel belum tersedia.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal Add Article --}}
    <div class="modal fade" id="addArticle" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('artikel.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="categories_id" class="form-label">Kategori</label>
                            <select class="form-select" id="categories_id" name="categories_id" required>
                                <option selected>Pilih Kategori...</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                                @endforeach
                            </select>
                            @error('categories_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
{{-- Modal Edit Article --}}
@foreach ($articles as $article)
    <div class="modal fade" id="editArticle{{ $article->id }}" tabindex="-1" aria-labelledby="editArticleLabel{{ $article->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editArticleLabel{{ $article->id }}">Edit Artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('artikel.update', $article->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $article->title) }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="categories_id" class="form-label">Kategori</label>
                            <select class="form-select" id="categories_id" name="categories_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $article->categories_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                            @error('categories_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar (Opsional)</label>
                            @if ($article->image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/images/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid" style="max-height: 200px; object-fit: cover;">
                                </div>
                            @endif
                            <input type="file" class="form-control" id="image" name="image">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $article->description) }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach


    {{-- Modal Show Article --}}
    @foreach ($articles as $article)
        <div class="modal fade" id="showArticle{{ $article->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Artikel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5><strong>Judul:</strong>{{ $article->title }}</h5>
                        <p><strong>Kategori:</strong> {{ $article->categories->nama_kategori }}</p>
                        <p><strong>Deskripsi:</strong> {{ $article->description }}</p>
                        <p><strong>Gambar:</strong></p>
                        <img src="{{ asset('storage/images/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid" style="width: 150px; height: auto;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</main>

@include('layouts.footer')
