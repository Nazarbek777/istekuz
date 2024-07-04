<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsStoreRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

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
            $path = $request->file('image')->storeAs('product_photo', $name1, 'public');
        }

        if ($request->hasFile('image2')) {
            $name2 = time() . '_' . $request->file('image2')->getClientOriginalName();
            $path2 = $request->file('image2')->storeAs('product_photo', $name2, 'public');
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
                Storage::delete('public/' . $news->image);
            }
            // Store new image
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('product_photo', $name, 'public');
        }

        if ($request->hasFile('image2')) {
            // Delete old second image if exists
            if ($news->image2) {
                Storage::delete('public/' . $news->image2);
            }
            // Store new second image
            $name2 = time() . '_' . $request->file('image2')->getClientOriginalName();
            $path2 = $request->file('image2')->storeAs('product_photo', $name2, 'public');
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
        if($news->image){
            Storage::delete($news->image);
        }
        $news->delete();
        return redirect()->back();
    }
}
