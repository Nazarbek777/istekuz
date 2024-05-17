<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('created_at', 'desc')->get();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            'title_uz' => 'nullable|string|max:255',
            'title_ru' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'text_uz' => 'nullable|string',
            'text_ru' => 'nullable|string',
            'text_en' => 'nullable|string',
            'slug' => 'required|string|',
            'image' => 'nullable|file|max:2048',
        ]);

        // Faylni olish
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName(); // Fayl nomini o'zgartirish
            $path = $file->storeAs('public/images', $filename); // Faylni "storage/app/public/images" papkasiga saqlash
        } else {
            $path = null; // Fayl yuklanmagan bo'lsa, null qo'ying
        }

        $page = Page::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'text_uz' => $request->text_uz,
            'text_ru' => $request->text_ru,
            'text_en' => $request->text_en,
            'slug' => $request->slug,
            'image' => $path, // Fayl nomi bazaga saqlanadi
        ]);

        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
    }

    public function show(Page $page)
    {
        return view('admin.pages.show', compact('page'));
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title_uz' => 'nullable|string|max:255',
            'title_ru' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'text_uz' => 'nullable|string',
            'text_ru' => 'nullable|string',
            'text_en' => 'nullable|string',
            'slug' => 'required|string' . $page->id,
            'image' => 'nullable|file|max:2048',
        ]);

        // Faylni olish
        if ($request->hasFile('image')) {
            // Eski faylni o'chirish
            if ($page->image) {
                Storage::delete($page->image);
            }

            // Yangi faylni saqlash
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName(); // Fayl nomini o'zgartirish
            $path = $file->storeAs('public/images', $filename); // Faylni "storage/app/public/images" papkasiga saqlash
        } else {
            $path = $page->image; // Fayl yuklanmagan bo'lsa, eski faylni saqlab qolish
        }

        // Ma'lumotlarni yangilash
        $page->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'text_uz' => $request->text_uz,
            'text_ru' => $request->text_ru,
            'text_en' => $request->text_en,
            'slug' => $request->slug,
            'image' => $path, // Fayl nomi bazaga saqlanadi
        ]);

        return redirect()->route('pages.index')->with('success', 'Page updated successfully.');
    }

    public function destroy(Page $page)
    {

        // Fayl nomi
        $imagePath = $page->image;

        // Rasmni o'chirish
        if ($imagePath) {
            Storage::delete($imagePath); // Faylni o'chirish
        }

        $page->delete();

        return redirect()->route('pages.index')->with('success', 'Page deleted successfully.');
    }
}
