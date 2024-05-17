<?php

namespace App\Http\Controllers;

use App\Models\Catolog;
use App\Models\Media;
use App\Models\Page;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function about(){
        $pages = Page::all();
        $campany = Page::where('slug', 'campany')->first();
        $about_service = Page::where('slug', 'about-service')->first();
        $teams = Page::where('slug', 'team')->get();
        // dd($about_service);
        return view('front.about', compact('campany', 'about_service', 'teams'));
    }

}