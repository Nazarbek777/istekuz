<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.category.index', compact('categories'));
    }

   
    public function create()
    {
        return view('admin.category.create');
    }

   
    public function store(CategoryRequest $request)
    {
        $validated = $request->validated();

        Category::create($validated);
        return redirect()->route('category.index')->with('success','category stored successfully');
    }

    
    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $validated = $request->validated();

        $category->update($validated);

        return redirect()->route('category.index')->with('success','category updated successfully');
    }

    
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back()->with('success','category deleted successfully');
    }
}
