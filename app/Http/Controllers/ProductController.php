<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.product.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }


    public function store(ProductStoreRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('product_photo', $name, 'public');
        }

        Product::create([
            'category_id' => $validated['category_id'],
            'name_uz' => $validated['name_uz'],
            'name_ru' => $validated['name_ru'],
            'name_en' => $validated['name_en'],
            'price' => $validated['price'],
            'description_uz' => $validated['description_uz'],
            'description_ru' => $validated['description_ru'],
            'description_en' => $validated['description_en'],
            'image' => $path ?? null,
        ]);

        return redirect()->route('product.index')->with('success', 'Mahsulot Bazaga Saqlandi');
    }


    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }


    public function edit(Product $product)
    {
        $producta = Product::all();
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories','producta'));
    }


    public function update(ProductUpdateRequest $request, Product $product)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::delete('public/' . $product->image);
            }
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('product_photo', $name, 'public');
        }
        $product->update([
            'category_id' => $validated['category_id'],
            'name_uz' => $validated['name_uz'],
            'name_ru' => $validated['name_ru'],
            'name_en' => $validated['name_en'],
            'price' => $validated['price'],
            'description_uz' => $validated['description_uz'],
            'description_ru' => $validated['description_ru'],
            'description_en' => $validated['description_en'],
            'image' => $path ?? $product->image, // Keep the old image if a new one is not uploaded
        ]);

        return redirect()->route('product.index')->with('success', 'Mahsulot muvaffaqiyatli tahrirlandi');
    }


    public function destroy(Product $product)
    {
        if($product->image){
            Storage::delete($product->image);
        }
        $product->delete();
        return redirect()->back();
    }
}
