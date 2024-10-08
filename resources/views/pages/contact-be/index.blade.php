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
                        <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addBlog">
                            <i class="bi bi-plus-square"></i> Tambah Contact
                        </button>

                        <!-- Default Table -->
                        <table class="table table-borderless datatable">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Additional Info</th>
                                    <th scope="col">Consent</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @forelse ($contacts as $i => $contact)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->company }}</td>
                                        <td>{{ $contact->service }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit(strip_tags($contact->additional_info), 50) }}</td>
                                        <td>{{ $contact->consent ? 'Yes' : 'No' }}</td>
                                        <td>{{ $contact->created_at ? $contact->created_at->format('d M Y') : 'N/A' }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editContact{{ $contact->id }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#showContact{{ $contact->id }}">
                                                <i class="bi bi-eye-fill"></i>
                                            </button>
                                            <form onsubmit="return confirm('Are you sure?');" action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display:inline;">
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
                                        <td colspan="9" class="text-center">No contacts available.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <!-- End Default Table -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal Add Blog --}}
    {{-- <div class="modal fade" id="addBlog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('blog.create') }}" enctype="multipart/form-data">
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
                            <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                            <trix-editor input="description"></trix-editor>
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
    </div> --}}

    {{-- Modal Edit Blog --}}
    {{-- @foreach ($blogs as $blog)
        <div class="modal fade" id="editBlog{{ $blog->id }}" tabindex="-1" aria-labelledby="editBlogLabel{{ $blog->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editBlogLabel{{ $blog->id }}">Edit Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $blog->title) }}">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="categories_id" class="form-label">Kategori</label>
                                <select class="form-select" id="categories_id" name="categories_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $blog->categories_id == $category->id ? 'selected' : '' }}>
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
                                @if ($blog->image)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/images/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid" style="max-height: 200px; object-fit: cover;">
                                    </div>
                                @endif
                                <input type="file" class="form-control" id="image" name="image">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi</label>
                                <input id="description{{ $blog->id }}" type="hidden" name="description" value="{{ old('description', $blog->description) }}">
                                <trix-editor input="description{{ $blog->id }}"></trix-editor>
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
    @endforeach --}}

    {{-- Modal Show Blog --}}
    {{-- @foreach ($blogs as $blog)
        <div class="modal fade" id="showBlog{{ $blog->id }}" tabindex="-1" aria-labelledby="showBlogLabel{{ $blog->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="showBlogLabel{{ $blog->id }}">Detail Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4>{{ $blog->title }}</h4>
                        <p><strong>Kategori:</strong> {{ $blog->categories->nama_kategori }}</p>
                        <p><strong>Penulis:</strong> {{ $blog->user->name }}</p>
                        <p><strong>Tanggal Publikasi:</strong> {{ $blog->published_at ? $blog->published_at->format('d M Y') : 'Belum dipublikasikan' }}</p>
                        <p><strong>Waktu Baca:</strong> {{ $blog->read_time ? $blog->read_time . ' menit' : 'N/A' }}</p>
                        @if ($blog->image)
                            <div class="mb-3">
                                <img src="{{ asset('storage/images/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid" style="max-height: 300px; object-fit: cover;">
                            </div>
                        @endif
                        <p><strong>Deskripsi:</strong></p>
                        <p>{!! $blog->description !!}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}

</main>

@include('layouts.footer')
