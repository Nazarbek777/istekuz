<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::all();
        return view('admin.catalog.index', compact('catalogs'));
    }

    public function create()
    {
        return view('admin.catalog.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Catalog::create($request->all());
        return redirect()->route('catalog.index');
    }

    public function show(Catalog $catalog)
    {
        return view('admin.catalog.show', compact('catalog'));
    }

    public function edit(Catalog $catalog)
    {
        return view('admin.catalog.edit', compact('catalog'));
    }

    public function update(Request $request, Catalog $catalog)
    {
        $request->validate(['name' => 'required']);
        $catalog->update($request->all());
        return redirect()->route('catalog.index');
    }

    public function destroy(Catalog $catalog)
    {
        $catalog->delete();
        return redirect()->route('catalog.index');
    }
}
