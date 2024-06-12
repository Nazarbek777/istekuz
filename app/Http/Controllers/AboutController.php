<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutStoreRequest;
use App\Http\Requests\AboutUpdateRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function index()
    {
        $abouts = About::paginate(10);
        return view('admin.about.index', compact('abouts'));
    }

    
    public function create()
    {
        return view('admin.about.create');
    }

    
    public function store(AboutStoreRequest $request)
    {
        $validated = $request->validated();

        About::create($validated);

        return redirect()->route('about.index')->with('success', 'Biz haqimizda bazaga saqlandi');
    }

    
    public function show(About $about)
    {
        return view('admin.about.show', compact('about'));
    }

   
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    
    public function update(AboutUpdateRequest $request, About $about)
    {
        $validated = $request->validated();

        $about->update($validated);
        return redirect()->route('about.index')->with('success', 'Biz haqimizda tahrirlandi');

    }

    
    public function destroy(About $about)
    {
        $about->delete();

        return redirect()->back();
    }
}
