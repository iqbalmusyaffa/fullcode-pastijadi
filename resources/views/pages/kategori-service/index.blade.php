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
                        <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addCategory"><i
                                class="bi bi-plus-square"></i> Tambah Kategori Services</button>
                        <!-- Default Table -->
                        <table class="table table-borderless datatable">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kategori Services</th>
                                    <th scope="col">Kode Kategori Services</th>
                                    <th scope="col">Deskripsi Services</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @forelse ($service_categories as $i => $service_category)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>{{ $service_category->nama_kategori }}</td>
                                        <td>{{ $service_category->kode_kategori }}</td>
                                        <td>{{ $service_category->deskripsi }}</td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kategori-service.delete', $service_category->id) }}" method="POST">
                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editCategory{{ $service_category->id }}"><i class="bi bi-pencil-square"></i></button>
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#showCategory{{ $service_category->id }}"><i class="bi bi-eye-fill"></i></button>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Data Kategori belum tersedia.</td>
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

    {{-- Modal Add Category --}}
    <div class="modal fade" id="addCategory" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kategori Services</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{ route('kategori-service.create') }}">
                            @csrf
                            <div class="col-md-6">
                                <label for="nama_kategori" class="form-label">Nama Kategori Services</label>
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori') }}">
                                @error('nama_kategori')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="kode_kategori" class="form-label">Kode Kategori Services</label>
                                <input type="text" class="form-control" id="kode_kategori" name="kode_kategori" value="{{ old('kode_kategori') }}">
                                @error('kode_kategori')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="deskripsi" class="form-label">Deskripsi Services</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center col-md-12">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Update Category --}}
    @foreach ($service_categories as $service_category)
        <div class="modal fade" id="editCategory{{ $service_category->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Kategori Services</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <form class="row g-3" method="POST" action="{{ route('kategori.update', $service_category->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="col-md-6">
                                    <label for="nama_kategori" class="form-label">Nama Kategori Services</label>
                                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori', $service_category->nama_kategori) }}">
                                    @error('nama_kategori')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="kode_kategori" class="form-label">Kode Kategori Services</label>
                                    <input type="text" class="form-control" id="kode_kategori" name="kode_kategori" value="{{ old('kode_kategori', $service_category->kode_kategori) }}">
                                    @error('kode_kategori')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="deskripsi" class="form-label">Deskripsi Services</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $service_category->deskripsi) }}</textarea>
                                    @error('deskripsi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="text-center col-md-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- Modal Show Category --}}
    @foreach ($service_categories as $service_category)
        <div class="modal fade" id="showCategory{{ $service_category->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Nama Kategori Services:</strong>
                                    <p>{{ $service_category->nama_kategori }}</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Kode Kategori Services:</strong>
                                    <p>{{ $service_category->kode_kategori }}</p>
                                </div>
                                <div class="col-md-12">
                                    <strong>Deskripsi Services:</strong>
                                    <p>{{ $service_category->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
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
