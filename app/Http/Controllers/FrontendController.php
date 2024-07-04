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
        $products = Product::all();
        return view('front.product',   compact('products'));
    }
}
