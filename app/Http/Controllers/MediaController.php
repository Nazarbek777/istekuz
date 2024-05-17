<?php

namespace App\Http\Controllers;

use App\Models\Catolog;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
   
    public function index()
    {
        $media = Media::all();
        return view('admin.media.index', compact('media'));
    }

    public function create()
    {
        $catalogs = Catolog::all();
        return view('admin.media.create', compact('catalogs'));
    }

    public function store(Request $request)
    {
        
        

        // Faylni olish
        if ($request->hasFile('url')) {
            $file = $request->file('url');
            $filename = time() . '_' . $file->getClientOriginalName(); // Fayl nomini o'zgartirish
            $path = $file->storeAs('public/media', $filename); // Faylni "storage/app/public/images" papkasiga saqlash
        } else {
            $path = ' '; // Fayl yuklanmagan bo'lsa, null qo'ying
        }
    
        $media = new Media();
        $media->name = $request->name;
        $media->url = $path;
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
        $catalogs = Catolog::all();
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
            if ($media->image) {
                Storage::delete($media->image);
            }

            // Yangi faylni saqlash
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName(); // Fayl nomini o'zgartirish
            $path = $file->storeAs('public/images', $filename); // Faylni "storage/app/public/images" papkasiga saqlash
        } else {
            $path = $media->image; // Fayl yuklanmagan bo'lsa, eski faylni saqlab qolish
        }
    
        $media->name = $request->name;
        $media->catalog_id = $request->catalog_id;
        $media->save();

        return redirect()->route('media.index');
    }

    public function destroy(Media $media)
    {
        dd($media);
         // Fayl nomi
         $imagePath = $media->url;

         // Rasmni o'chirish
         if ($imagePath) {
             Storage::delete($imagePath); // Faylni o'chirish
         }
 
        $media->delete();
        return redirect()->route('media.index');
    }

}
