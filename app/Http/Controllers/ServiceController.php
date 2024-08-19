<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\KategoriService;
use Illuminate\Support\Str;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch services with their categories
        $services = Service::with('serviceCategory')->get();
        $service_categories = KategoriService::all();

        return view('pages.services.index', [
            'title' => 'Service',
            'services' => $services,
            'service_categories' => $service_categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.services.create', [
            'title' => 'Create Service'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama_services' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        'service_categories_id' => 'required|exists:service_categories,id',
        'price' => 'required|integer',
    ],
    [
        'nama_services.required' => 'Nama Service wajib diisi',
        'deskripsi.required' => 'Deskripsi wajib diisi',
        'image.required' => 'Gambar wajib diisi',
        'service_categories_id.required' => 'Kategori Service wajib diisi',
        'price.required' => 'Harga wajib diisi',
    ]);

    // Handle the image upload
    $image = $request->file('image');
    $hashedImageName = Str::random(40) . '.' . $image->getClientOriginalExtension();
    $imagePath = $image->storeAs('public/images', $hashedImageName);

    // Create the service with the image path
    Service::create([
        'nama_services' => $request->nama_services,
        'deskripsi' => $request->deskripsi,
        'image' => $hashedImageName, // Save the hashed image name
        'service_categories_id' => $request->service_categories_id,
        'price' => $request->price,
    ]);

    return redirect()->route('services')->with('success', 'Service berhasil ditambahkan');
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        return view('pages.services.edit', [
            'title' => 'Edit Service',
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'nama_services' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        'service_categories_id' => 'required|exists:service_categories,id',
        'price' => 'required|integer',
    ],
    [
        'nama_services.required' => 'Nama Service wajib diisi',
        'deskripsi.required' => 'Deskripsi wajib diisi',
        'service_categories_id.required' => 'Kategori Service wajib diisi',
        'price.required' => 'Harga wajib diisi',
    ]);

    $service = Service::findOrFail($id);

    // Handle the image upload if a new image is provided
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $hashedImageName = Str::random(40) . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('public/images', $hashedImageName);
        $service->image = $hashedImageName; // Update the image path
    }

    $service->update([
        'nama_services' => $request->nama_services,
        'deskripsi' => $request->deskripsi,
        'service_categories_id' => $request->service_categories_id,
        'price' => $request->price,
    ]);

    return redirect()->route('services')->with('success', 'Service berhasil diupdate');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::findOrFail($id)->delete();
        return redirect()->route('services')->with('success', 'Service berhasil dihapus');
    }
}
