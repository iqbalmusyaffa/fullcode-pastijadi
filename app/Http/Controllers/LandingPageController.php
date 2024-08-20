<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
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
    $services = Service::with('serviceCategory')->get();

    // Pass filtered blogs and other data to the view
    return view('landingPages.index', [
        'blogs' => $blogs,
        'services' => $services,
        'categories' => $categories,
        'authors' => $authors,
    ]);
}
}
