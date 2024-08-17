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
                        <button class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addService"><i
                                class="bi bi-plus-square"></i> Tambah Service</button>
                        <!-- Default Table -->
                        <table class="table table-borderless datatable">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Service</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Kategori Service</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @forelse ($services as $i => $service)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>{{ $service->nama_services }}</td>
                                        <td>{{ $service->deskripsi }}</td>
                                        <td>{{ $service->category->nama_kategori }}</td> <!-- Assuming a relation is defined -->
                                        <td>{{ number_format($service->price, 2) }}</td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('services.delete', $service->id) }}" method="POST">
                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editService{{ $service->id }}"><i class="bi bi-pencil-square"></i></button>
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#showService{{ $service->id }}"><i class="bi bi-eye-fill"></i></button>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Data Services belum tersedia.</td>
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
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
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
                            <form class="row g-3" method="POST" action="{{ route('services.update', $service->id) }}">
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
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $service->deskripsi) }}</textarea>
                                    @error('deskripsi')
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
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nama_services" class="form-label">Nama Service</label>
                                    <input type="text" class="form-control" id="nama_services" value="{{ $service->nama_services }}" readonly disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="price" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="price" value="{{ number_format($service->price, 2) }}" readonly disabled>
                                </div>
                                <div class="col-md-12">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" rows="3" readonly disabled>{{ $service->deskripsi }}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="service_categories_id" class="form-label">Kategori Service</label>
                                    <input type="text" class="form-control" id="service_categories_id" value="{{ $service->category->nama_kategori }}" readonly disabled>
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
