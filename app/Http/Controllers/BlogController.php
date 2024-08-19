<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with('categories')->get(); // Fetch blogs with their categories
        $categories = Kategori::all(); // Fetch all categories

        return view('pages.blog.index', [
            'title' => 'Blog',
            'blogs' => $blogs,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Kategori::all(); // Fetch categories
        return view('pages.blog.create', [
            'title' => 'Create Blog',
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'categories_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $hashedImageName = Str::random(40) . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('public/images', $hashedImageName);

        $wordCount = str_word_count($request->description);
        $estimatedReadTime = ceil($wordCount / 200); // Calculate read time

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->categories_id = $request->categories_id;
        $blog->user_id = Auth::user()->id; // Automatically set user_id
        $blog->image = $hashedImageName;
        $blog->published_at = now(); // Automatically set published_at to current time
        $blog->read_time = $estimatedReadTime; // Automatically calculate and set read_time
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.blog.show', [
            'title' => 'Show Blog',
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Kategori::all();
        return view('pages.blog.edit', [
            'title' => 'Edit Blog',
            'blog' => $blog,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'categories_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::delete('public/images/' . $blog->image);
            }

            $image = $request->file('image');
            $hashedImageName = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('public/images', $hashedImageName);

            $blog->image = $hashedImageName;
        }

        $wordCount = str_word_count($request->description);
        $estimatedReadTime = ceil($wordCount / 200); // Calculate read time

        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->categories_id = $request->categories_id;
        $blog->user_id = Auth::user()->id; // Automatically set user_id
        $blog->published_at = $blog->published_at ?? now(); // Set published_at if not already set
        $blog->read_time = $estimatedReadTime; // Automatically calculate and set read_time
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image) {
            Storage::delete('public/images/' . $blog->image);
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully.');
    }
}
