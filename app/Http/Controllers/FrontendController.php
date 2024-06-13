<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\News;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $logos = Logo::all();
        $teams = Team::all();
        $news = News::all();
        return view('front.index', compact('logos','teams', 'news'));
    }

    public function about()
    {
        $teams = Team::all();
        $logos = Logo::all();
        return view('front.about', compact('teams', 'logos'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function singleBlog($blog){
        $news = News::find($blog);
        return view('front.singleBlog', compact('news'));
    }

    public function product()
    {
        return view('front.product');
    }
}
