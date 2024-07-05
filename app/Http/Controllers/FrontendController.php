<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Logo;
use App\Models\News;
use App\Models\Product;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $logos = Logo::all();
        $teams = Team::all();
        $news = News::all();
        $categories = Category::with('products')->get();
        return view('front.index', compact('logos','teams', 'news','categories'));
    }

    public function mission()
    {
        $logos = Logo::all();
        return view('front.mission', compact('logos'));
    }
    public function faq()
    {
        $logos = Logo::all();
        return view('front.faq', compact('logos'));
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
        $categories = Category::with('products')->get();
        $news = News::paginate(2);
        return view('front.blog', compact('news','categories'));
    }
//    public function    categoryId($category)
//    {
//        $category = Category::find($category);
//        return view('')
//    }
    public function singleBlog($blog){
        $news = News::find($blog);
        return view('front.singleBlog', compact('news'));
    }
    public function singleProduct($product){
        $products = Product::take(4)->get();
        $product = Product::find($product);
        $categories = Category::all();
        $lang = \Illuminate\Support\Facades\App::getLocale();
        return view('front.singleProduct', compact('product','products','categories','lang'));
    }

    public function product()
    {
        $news = News::take(4)->get();
        $categories = Category::with('products')->get();
        $products = Product::all();
        return view('front.product',   compact('products','categories','news'));
    }



    public function history(){
        return view('front.history');
    }

    public function partner(){
        return view('front.partner');
    }

    public function team(){
        $teams = Team::all();
        return view('front.team', compact('teams'));
    }
    public function singleTeam($team){
        $teams = Team::find($team);
        return view('front.singleTeam',compact('teams'));
    }
}
