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
