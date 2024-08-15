<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Kategori::all();
        return view('pages.kategori.index', [
            'title' => 'Kategori',
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kategori.create', [
            'title' => 'Create Kategori'
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

        Kategori::create($request->all());
        return redirect()->route('kategori')->with('success', 'Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Kategori::find($id);
        return view('pages.kategori.edit', [
            'title' => 'Edit Kategori',
            'kategori' => $kategori
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
            'deskripsi' => 'nullable|string',
        ]);

        Kategori::find($id)->update($request->all());
        return redirect()->route('kategori')->with('success', 'Kategori berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::find($id)->delete();
        return redirect()->route('kategori')->with('success', 'Kategori berhasil dihapus');
    }
}
