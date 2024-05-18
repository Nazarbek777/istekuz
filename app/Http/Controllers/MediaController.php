<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;

use App\Models\Category;
class MediaController extends Controller
{
    //
    public function index()
    {
        $media = Media::all();
        return view('admin.media.index', compact('media'));
    }



    public function create()
    {
        $catalogs = Category::all();
        return view('admin.media.create', compact('catalogs'));
    }



    public function store(Request $request)
    {
        // Faylni olish 
        if ($request->hasFile('url')) {
            $file = $request->file('url');
            $file_type = $file->getMimeType();
            $isImage = in_array($file_type, ['image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/svg+xml', 'image/webp']);
            $filename = time() . '_' . $file->getClientOriginalName();
            // Fayl nomini o'zgartirish
            $path = $file->storeAs('public/media', $filename);
            // Faylni "storage/app/public/images" papkasiga saqlash 
        } else {
            $path = ' ';
            // Fayl yuklanmagan bo'lsa, null qo'ying
        }

        $media = new Media();
        $media->name = $request->name;
        $media->url = $path;
        $media->is_image = $isImage;
        $media->catolog_id = $request->catalog_id;
        $media->save();
        return redirect()->route('media.index');
    }
    public function show(Media $media)
    {
        return view('admin.media.show', compact('media'));
    }
    public function edit(Media $media)
    {
        $catalogs = Category::all();
        return view('admin.media.edit', compact('media', 'catalogs'));
    }

    public function update(Request $request, Media $media)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required|file',
            'catalog_id' => 'required',
        ]);

        // Faylni olish
        if ($request->hasFile('url')) {
            // Eski faylni o'chirish
            if ($media->url) {
                Storage::delete($media->url);
            }

            // Yangi faylni saqlash
            $file = $request->file('url');
            $file_type = $file->getMimeType();
            $isImage = in_array($file_type, [
                'image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'image/svg+xml', 'image/webp'
            ]);

            $filename = time() . '_' . $file->getClientOriginalName(); // Fayl nomini o'zgartirish
            $path = $file->storeAs('public/images', $filename); // Faylni "storage/app/public/images" papkasiga saqlash

            $media->url = $path; // Fayl yo'lini yangilash
            $media->is_image = $isImage; // Faylning rasm ekanligini belgilash
        }

        // Qolgan ma'lumotlarni yangilash
        $media->name = $request->name;
        $media->catalog_id = $request->catalog_id;
        $media->save();

        return redirect()->route('media.index')->with('success', 'Media updated successfully.');
    }


    // update

    public function destroy(Media $media, Request $id)
{
    // Fayl nomi
    $imagePath = $media->url;

    // Faylni o'chirish
    if ($imagePath) {
        Storage::delete($imagePath); // Faylni o'chirish
    }

    // Media yozuvini o'chirish
    $media->delete();
    


    return redirect()->route('media.index')->with('success', 'Media deleted successfully.');
}

}
