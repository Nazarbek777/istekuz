<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogoStoreRequest;
use App\Http\Requests\LogoUpdateRequest;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{

    public function index()
    {
        $logos = Logo::paginate(10);

        return view('admin.logo.index', compact('logos'));
    }


    public function create()
    {
        return view('admin.logo.create');
    }


    public function store(LogoStoreRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('product_photo', $name, 'public');
        }

        Logo::create([
            'image' => $path ?? null,
        ]);

        return redirect()->route('logo.index')->with('success', 'Muvaffaqiyatli saqlandi');
    }




    public function edit(Logo $logo)
    {
        return view('admin.logo.edit', compact('logo'));
    }


    public function update(LogoUpdateRequest $request, Logo $logo)
    {
        if ($request->hasFile('image')) {
            if ($logo->image) {
                Storage::delete('public/' . $logo->image);
            }
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('product_photo', $name, 'public');
        }

        $logo->update([
            'image' => $path ?? $logo->image,
        ]);

        return redirect()->route('logo.index')->with('success', "Rasm O'zgartirildi");
    }


    public function destroy(Logo $logo)
    {
        Storage::delete($logo->image);

        return redirect()->back();
    }
}
