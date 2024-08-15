<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Speaker;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){

        // $events = Event::orderBy('created_at', 'desc')->where('is_published', 1)->limit(5)->get();
        // $speakers = Speaker::limit(4)->get();
        // return view('landingPages.index', [
        //     'events' => $events,
        //     'speakers' => $speakers,
        // ]);
        return view('landingPages.index');
    }
}
