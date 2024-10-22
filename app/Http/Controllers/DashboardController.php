<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Service;
use App\Models\KategoriService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Get the total number of users and categories for blogs
        $countUser = User::count();
        $countCategory = Kategori::count();

        // Get the total number of articles
        $countArticle = Blog::count();

        // Retrieve all blog categories
        $categories = Kategori::all();

        // Group articles by category and count them
        $categoryCounts = Blog::select('categories_id', \DB::raw('count(*) as total'))
                              ->groupBy('categories_id')
                              ->pluck('total', 'categories_id')
                              ->toArray();

        // Prepare labels and values for blog chart
        $categoryLabels = [];
        $categoryValues = [];

        foreach ($categories as $category) {
            $categoryLabels[] = $category->nama_kategori;
            $categoryValues[] = $categoryCounts[$category->id] ?? 0; // Default to 0 if no articles
        }

        // Fetch services with their categories
        $services = Service::with('serviceCategory')->get();
        $service_categories = KategoriService::all();

        // Count the number of services in each category
        $serviceCategoryCounts = Service::select('service_categories_id', \DB::raw('count(*) as total'))
                                        ->groupBy('service_categories_id')
                                        ->pluck('total', 'service_categories_id')
                                        ->toArray();

        // Prepare labels and values for service chart
        $serviceCategoryLabels = [];
        $serviceCategoryValues = [];

        foreach ($service_categories as $category) {
            $serviceCategoryLabels[] = $category->nama_kategori;
            $serviceCategoryValues[] = $serviceCategoryCounts[$category->id] ?? 0; // Default to 0 if no services
        }

        return view('pages.dashboard', [
            'title' => 'Dashboard',
            'countUser' => $countUser,
            'countCategory' => $countCategory,
            'countArticle' => $countArticle,
            'categoryLabels' => $categoryLabels,
            'categoryValues' => $categoryValues,
            'serviceCategoryLabels' => $serviceCategoryLabels,
            'serviceCategoryValues' => $serviceCategoryValues,
        ]);
    }
}
