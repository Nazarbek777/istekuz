<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index (){
        $categories = Category::all();
        return view('admin.category.index')->with('categories', $categories);
    }
    
    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Kategoriya muvaffaqiyatli qo\'shildi.');


    }
}
