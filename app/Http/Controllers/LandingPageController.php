<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Service;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        // Mengambil semua artikel
        $articles = Artikel::with('categories')->get();
        $services = Service::with('serviceCategory')->get();

        // Mengirim data artikel ke view
        return view('landingPages.index', [
            'articles' => $articles,
            'services' => $services,

        ]);
    }
}
