<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participant;
use App\Models\Payment;
use App\Models\Kategori;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        
        $countUser = User::count();
        $countCategory = Kategori::count();
        $categories = Kategori::all();
        $countArticle = Blog::count();
        $categoryCounts = $categories->groupBy('nama_kategori')->map->count();
        $categoryLabels = $categoryCounts->keys()->toArray();
        $categoryValues = $categoryCounts->values()->toArray();
        return view('pages.dashboard', [
            'title' => 'Dashboard',
            'countUser' => $countUser,
            'countCategory' => $countCategory,
            'countArticle' => $countArticle,
            'categoryLabels' => $categoryLabels,
            'categoryValues' => $categoryValues,
        ]);
    }
}
