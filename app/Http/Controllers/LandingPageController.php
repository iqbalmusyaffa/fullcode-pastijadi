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
        $query = Blog::with(['user', 'categories']);

    // Apply category filter
    if ($request->has('category') && $request->category != '') {
        $query->where('categories_id', $request->category);
    }

    // Apply author filter
    if ($request->has('author') && $request->author != '') {
        $query->where('user_id', $request->author);
    }
        // Mengambil semua artikel
        $blogs = $query->get();
        $categories = Kategori::all(); // Fetch all categories for the filter dropdown
        $authors = User::all();
        $blogs = Blog::with(['user', 'categories'])->get();
        $services = Service::with('serviceCategory')->get();

        // Mengirim data artikel ke view
        return view('landingPages.index', [
            'blogs' => $blogs,
            'services' => $services,
            'categories' => $categories,
            'authors' => $authors,
        ]);
    }
}
