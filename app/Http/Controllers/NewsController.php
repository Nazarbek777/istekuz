<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsStoreRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\News;
use Illuminate\Http\Request;
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

        if ($request->hasFile('image')) {
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('product_photo', $name, 'public');
        }

        News::create([
            'name_uz' => $validated['name_uz'],
            'name_ru' => $validated['name_ru'],
            'name_en' => $validated['name_en'],
            'description_uz' => $validated['description_uz'],
            'description_ru' => $validated['description_ru'],
            'description_en' => $validated['description_en'],
            'image' => $path ?? null,
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

        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::delete('public/' . $news->image);
            }
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('product_photo', $name, 'public');
        }
        $news->update([
            'name_uz' => $validated['name_uz'],
            'name_ru' => $validated['name_ru'],
            'name_en' => $validated['name_en'],
            'description_uz' => $validated['description_uz'],
            'description_ru' => $validated['description_ru'],
            'description_en' => $validated['description_en'],
            'image' => $path ?? $news->image, // Keep the old image if a new one is not uploaded
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
