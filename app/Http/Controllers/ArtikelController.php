<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Artikel::with('categories')->get(); // Fetch articles with their categories
        $categories = Kategori::all(); // Fetch all categories

        return view('pages.artikel.index', [
            'title' => 'Artikel',
            'articles' => $articles,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Kategori::all(); // Fetch categories
        return view('pages.artikel.create', [
            'title' => 'Create Artikel',
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'categories_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        // Handle the file upload
        $image = $request->file('image');
        $hashedImageName = Str::random(40) . '.' . $image->getClientOriginalExtension(); // Generate a unique file name
        $imagePath = $image->storeAs('public/images', $hashedImageName);

        // Create the article
        $article = new Artikel();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->categories_id = $request->categories_id; // Assign category
        $article->image = $hashedImageName; // Save hashed image name
        $article->save();

        return redirect()->route('artikel.index')->with('success', 'Artikel created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Artikel::findOrFail($id);
        return view('pages.artikel.show', [
            'title' => 'Show Artikel',
            'article' => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Artikel::findOrFail($id);
        $categories = Kategori::all(); // Fetch categories
        return view('pages.artikel.edit', [
            'title' => 'Edit Artikel',
            'article' => $article,
            'categories' => $categories // Pass categories to view
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'categories_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        // Find the article
        $article = Artikel::findOrFail($id);

        // Handle the file upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image
            if ($article->image) {
                Storage::delete('public/images/' . $article->image);
            }

            $image = $request->file('image');
            $hashedImageName = Str::random(40) . '.' . $image->getClientOriginalExtension(); // Generate a unique file name
            $imagePath = $image->storeAs('public/images', $hashedImageName);

            // Update with new image name
            $article->image = $hashedImageName;
        }

        // Update the article details
        $article->title = $request->title;
        $article->description = $request->description;
        $article->categories_id = $request->categories_id;
        $article->save();

        return redirect()->route('artikel.index')->with('success', 'Artikel updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Artikel::findOrFail($id);

        // Delete the image
        if ($article->image) {
            Storage::delete('public/images/' . $article->image);
        }

        $article->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel deleted successfully.');
    }
}
