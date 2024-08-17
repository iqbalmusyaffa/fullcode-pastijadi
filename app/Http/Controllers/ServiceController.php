<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\KategoriService;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch services with their categories
        $services = Service::with('category')->get();
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
            'service_categories_id' => 'required|exists:service_categories,id',
            'price' => 'required|integer',
        ],
        [
            'nama_services.required' => 'Nama Service wajib diisi',
            'deskripsi.required' => 'Deskripsi wajib diisi',
            'service_categories_id.required' => 'Kategori Service wajib diisi',
            'price.required' => 'Harga wajib diisi',
        ]);

        Service::create($request->all());
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
            'service_categories_id' => 'required|exists:service_categories,id',
            'price' => 'required|integer',
        ],
        [
            'nama_services.required' => 'Nama Service wajib diisi',
            'deskripsi.required' => 'Deskripsi wajib diisi',
            'service_categories_id.required' => 'Kategori Service wajib diisi',
            'price.required' => 'Harga wajib diisi',
        ]);

        Service::findOrFail($id)->update($request->all());
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
