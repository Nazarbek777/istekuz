<?php

namespace App\Http\Controllers;

use App\Models\Catolog;
use App\Models\Media;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public $posts;

   public function __construct()
    {
        $this->posts = Post::all();
    }

    public function blogs(){
        $posts = $this->posts;
        $blogs = Page::where('slug', 'blogs')
    ->orderBy('created_at', 'desc') // Order by creation date in descending order
    ->get();
        return view('front.blogs', compact( 'posts', 'blogs') );
    }

    public function not_found(){
        return view('front.blogs', compact( 'posts', 'blogs') );
    }

    public function contact(){
        $contact_data = Page::where('slug', 'contact')->first();
        $phone = Post::find(10);
        $contact_us = Post::find(11);
        $posts = $this->posts;
        return view('front.contact', compact('contact_data', 'posts', 'phone', 'contact_us') );
    }


    public function about(){
        $pages = Page::all();
        $brands = Page::where('slug', 'brands')->get();
        $posts = $this->posts;
        $campany = Page::where('slug', 'campany')->first();
        $about_service = Page::where('slug', 'about-service')->first();
        $why_us = Page::where('slug', 'why_us')->first();
        $teams = Page::where('slug', 'team')->get();
        $about_mini_heding = Post::find(2); 
        $for_call = Post::find(4); 
        $about_us = Post::find(3);
        $images = Media::all();

        // dd($about_mini_heding);
        // dd($about_service);
        return view('front.about', compact( 'brands', 'campany',  'images', 'posts', 'about_service', 'teams', 'about_mini_heding', 'about_us', 'why_us'));
    }

    public function data(){
        return 0;
    }

}