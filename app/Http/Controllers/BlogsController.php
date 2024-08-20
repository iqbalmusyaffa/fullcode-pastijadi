<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Kategori;
use App\Models\User;
class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Initialize the query for Blog
        $query = Blog::with(['user', 'categories']);

        // Apply category filter
        if ($request->has('category') && $request->category != '') {
            $query->where('categories_id', $request->category);
        }

        // Apply author filter
        if ($request->has('author') && $request->author != '') {
            $query->where('user_id', $request->author);
        }

        // Execute the query and get the filtered blogs
        $blogs = $query->get();

        // Fetch all categories and authors for the filter dropdowns
        $categories = Kategori::all();
        $authors = User::all();

        // Pass filtered blogs and other data to the view
        return view('pages.blogfe.index', [
            'blogs' => $blogs,
            'categories' => $categories,
            'authors' => $authors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
