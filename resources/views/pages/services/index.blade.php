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

    {{-- <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $title }}</h5>
                        <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addService">
                            <i class="bi bi-plus-square"></i> Tambah Service
                        </button>
                        <!-- Default Table -->
                        <table class="table table-borderless datatable">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Service</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Kategori Service</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @forelse ($services as $i => $service)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>{{ $service->nama_services }}</td>
                                        <td>{{ $service->deskripsi }}</td>
                                        <td>{{ $service->serviceCategory->nama_kategori }}</td> <!-- Assuming a relation is defined -->
                                        <td>{{ number_format($service->price, 2) }}</td>
                                        <td>
                                            <img src="{{ asset('storage/images/' . $service->image) }}" alt="{{ $service->nama_services }}" style="width: 100px; height: auto;">
                                        </td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('services.delete', $service->id) }}" method="POST">
                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editService{{ $service->id }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#showService{{ $service->id }}">
                                                    <i class="bi bi-eye-fill"></i>
                                                </button>
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
                                        <td colspan="7" class="text-center">Data Services belum tersedia.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $title }}</h5>
                        <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addService">
                            <i class="bi bi-plus-square"></i> Tambah Service
                        </button>
                        <!-- Default Table -->
                        <table class="table table-borderless datatable">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Service</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Kategori Service</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @forelse ($services as $i => $service)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>{{ $service->nama_services }}</td>
                                        <td>{{ $service->deskripsi }}</td>
                                        <td>{{ $service->serviceCategory->nama_kategori }}</td>
                                        <td>{{ number_format($service->price, 2) }}</td>
                                        <td>
                                            <img src="{{ asset('storage/images/' . $service->image) }}" alt="{{ $service->nama_services }}" style="width: 100px; height: auto;">
                                        </td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('services.delete', $service->id) }}" method="POST">
                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editService{{ $service->id }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#showService{{ $service->id }}">
                                                    <i class="bi bi-eye-fill"></i>
                                                </button>
                                                <a href="https://wa.me/6287765079444?text=Halo,%20Saya%20ingin%20menanyakan%20pricelist%20untuk%20.%20Namaservices:%20{{ urlencode($service->nama_services) }}.%20Deskripsi:%20{{ urlencode($service->deskripsi) }}.%20Harga:%20{{ number_format($service->price, 2) }}"
                                                   target="_blank" class="btn btn-success btn-sm">
                                                    <i class="bi bi-whatsapp"></i> WhatsApp
                                                </a>
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
                                        <td colspan="7" class="text-center">Data Services belum tersedia.</td>
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


    {{-- Modal Add Service --}}
    <div class="modal fade" id="addService" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{ route('services.create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label for="nama_services" class="form-label">Nama Service</label>
                                <input type="text" class="form-control" id="nama_services" name="nama_services" value="{{ old('nama_services') }}">
                                @error('nama_services')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                                @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="deskripsi" class="form-label">Deskripsi Singkat</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="deskripsifull" class="form-label">Deskripsi Full</label>
                                <input id="x" type="hidden" name="deskripsifull" value="{{ old('deskripsifull') }}">
                                <trix-editor input="x"></trix-editor>
                                @error('deskripsifull')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="service_categories_id" class="form-label">Kategori Service</label>
                                <select class="form-select" id="service_categories_id" name="service_categories_id">
                                    @foreach ($service_categories as $service_category)
                                        <option value="{{ $service_category->id }}">{{ $service_category->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('service_categories_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="image" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image">
                                @error('image')
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

    {{-- Modal Update Service --}}
    @foreach ($services as $service)
        <div class="modal fade" id="editService{{ $service->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Service</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <form class="row g-3" method="POST" action="{{ route('services.update', $service->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-md-6">
                                    <label for="nama_services" class="form-label">Nama Service</label>
                                    <input type="text" class="form-control" id="nama_services" name="nama_services" value="{{ old('nama_services', $service->nama_services) }}">
                                    @error('nama_services')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="price" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $service->price) }}">
                                    @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="deskripsi" class="form-label">Deskripsi Singkat</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $service->deskripsi) }}</textarea>
                                    @error('deskripsi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsifull" class="form-label">Deskripsi Full</label>
                                    <!-- Hidden input for storing the trix editor content -->
                                    <input id="deskripsifull-{{ $service->id }}" type="hidden" name="deskripsifull" value="{{ $service->deskripsifull }}">
                                    <!-- Trix Editor with binding to the hidden input -->
                                    <trix-editor input="deskripsifull-{{ $service->id }}"></trix-editor>
                                    @error('deskripsifull')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="service_categories_id" class="form-label">Kategori Service</label>
                                    <select class="form-select" id="service_categories_id" name="service_categories_id">
                                        @foreach ($service_categories as $service_category)
                                            <option value="{{ $service_category->id }}" {{ $service_category->id == $service->service_categories_id ? 'selected' : '' }}>{{ $service_category->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                    @error('service_categories_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="image" class="form-label">Gambar</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    <img src="{{ asset('storage/images/' . $service->image) }}" alt="{{ $service->nama_services }}" style="width: 100px; height: auto;">
                                    @error('image')
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

    {{-- Modal Show Service --}}
    @foreach ($services as $service)
        <div class="modal fade" id="showService{{ $service->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Service</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nama_services" class="form-label">Nama Service</label>
                                <p>{{ $service->nama_services }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <p>{{ $service->deskripsi }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsifull" class="form-label">Deskripsi Full</label>
                                <p>{!! $service->deskripsifull !!}</p>
                            </div>
                            <div class="mb-3">
                                <label for="service_categories_id" class="form-label">Kategori Service</label>
                                <p>{{ $service->serviceCategory->nama_kategori }}</p> <!-- Assuming a relation is defined -->
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Harga</label>
                                <p>{{ number_format($service->price, 2) }}</p>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar</label>
                                <img src="{{ asset('storage/images/' . $service->image) }}" alt="{{ $service->nama_services }}" style="width: 300px; height: auto;">
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
