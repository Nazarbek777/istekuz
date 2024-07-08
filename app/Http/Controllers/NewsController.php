<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsStoreRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    public function search(Request $request)
    {
        $search = $request->input('search');

        $news = News::query()
            ->orwhere('name_uz', 'LIKE', "%{$search}%")
            ->orwhere('name_ru', 'LIKE', "%{$search}%")
            ->orwhere('name_en', 'LIKE', "%{$search}%")
            ->orWhere('description_uz', 'LIKE', "%{$search}%")
            ->orWhere('description_ru', 'LIKE', "%{$search}%")
            ->orWhere('description_en', 'LIKE', "%{$search}%")
            ->get();

        $products = Product::query()
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where(function ($query) use ($search) {
                $query
                    ->orWhere('categories.name_uz', 'LIKE', "%{$search}%")
                    ->orWhere('categories.name_ru', 'LIKE', "%{$search}%")
                    ->orWhere('categories.name_en', 'LIKE', "%{$search}%")
                    ->orWhere('products.name_uz', 'LIKE', "%{$search}%")
                    ->orWhere('products.name_ru', 'LIKE', "%{$search}%")
                    ->orWhere('products.name_en', 'LIKE', "%{$search}%")
                    ->orWhere('products.price', 'LIKE', "%{$search}%")
                    ->orWhere('products.description_uz', 'LIKE', "%{$search}%")
                    ->orWhere('products.description_ru', 'LIKE', "%{$search}%")
                    ->orWhere('products.description_en', 'LIKE', "%{$search}%");
            })
            ->select('products.*')
            ->get();

        return view('admin.search', compact('news','products'));
    }

    public function index()
    {
        $news = News::paginate(10);
        return view('admin.news.index', compact('news'));
    }


    public function create()
    {
        return view('admin.news.create');
    }


    public function store(NewsStoreRequest $request)
    {
        $validated = $request->validated();

        $path = null;
        $path2 = null;

        if ($request->hasFile('image')) {
            $name1 = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('product_photo', $name1);
        }

        if ($request->hasFile('image2')) {
            $name2 = time() . '_' . $request->file('image2')->getClientOriginalName();
            $path2 = $request->file('image2')->storeAs('product_photo', $name2);
        }

        Log::info('Image1 Path: ' . $path);
        Log::info('Image2 Path: ' . $path2);

        News::create([
            'name_uz' => $validated['name_uz'],
            'name_ru' => $validated['name_ru'],
            'name_en' => $validated['name_en'],
            'description_uz' => $validated['description_uz'],
            'description_ru' => $validated['description_ru'],
            'description_en' => $validated['description_en'],
            'image' => $path,
            'image2' => $path2,
        ]);

        return redirect()->route('news.index')->with('success', 'Yangilik Bazaga Saqlandi');
    }



    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }


    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(NewsUpdateRequest $request, News $news)
    {
        $validated = $request->validated();

        $path = $news->image; // Existing image path by default
        $path2 = $news->image2; // Existing second image path by default

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($news->image) {
                Storage::delete($news->image);
            }
            // Store new image
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('product_photo', $name);
        }

        if ($request->hasFile('image2')) {
            // Delete old second image if exists
            if ($news->image2) {
                Storage::delete($news->image2);
            }
            // Store new second image
            $name2 = time() . '_' . $request->file('image2')->getClientOriginalName();
            $path2 = $request->file('image2')->storeAs('product_photo', $name2);
        }

        $news->update([
            'name_uz' => $validated['name_uz'],
            'name_ru' => $validated['name_ru'],
            'name_en' => $validated['name_en'],
            'description_uz' => $validated['description_uz'],
            'description_ru' => $validated['description_ru'],
            'description_en' => $validated['description_en'],
            'image' => $path,
            'image2' => $path2,
        ]);

        return redirect()->route('news.index')->with('success', 'Yangilik muvaffaqiyatli tahrirlandi');
    }



    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::delete($news->image);
        }
        $news->delete();
        return redirect()->back();
    }
}
