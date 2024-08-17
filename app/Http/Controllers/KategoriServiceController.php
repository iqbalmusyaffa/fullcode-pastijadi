<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
class KategoriServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service_categories = ServiceCategory::all();
        return view('pages.kategori-service.index', [
            'title' => 'Kategori Service',
            'service_categories' => $service_categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kategori-service.create', [
            'title' => 'Create Kategori Service'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'kode_kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        ServiceCategory::create($request->all());
        return redirect()->route('kategori-service')->with('success', 'Kategori Service berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service_categori= ServiceCategory::findOrFail($id);
        return view('pages.kategori-service.edit', [
            'title' => 'Edit Kategori Service',
            'service_categori' => $service_categori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'kode_kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $service_categori = ServiceCategory::findOrFail($id);
        $service_categori->update($request->all());
        return redirect()->route('kategori-service')->with('success', 'Kategori Service berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ServiceCategory::find($id)->delete();
        return redirect()->route('kategori-service')->with('success', 'Kategori berhasil dihapus');
    }
}
