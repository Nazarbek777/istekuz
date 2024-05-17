<?php

namespace App\Http\Controllers;

use App\Models\MediaCatolog;
use App\Http\Requests\StoreMediaCatologRequest;
use App\Http\Requests\UpdateMediaCatologRequest;

class MediaCatologController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMediaCatologRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaCatologRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MediaCatolog  $mediaCatolog
     * @return \Illuminate\Http\Response
     */
    public function show(MediaCatolog $mediaCatolog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MediaCatolog  $mediaCatolog
     * @return \Illuminate\Http\Response
     */
    public function edit(MediaCatolog $mediaCatolog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaCatologRequest  $request
     * @param  \App\Models\MediaCatolog  $mediaCatolog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMediaCatologRequest $request, MediaCatolog $mediaCatolog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaCatolog  $mediaCatolog
     * @return \Illuminate\Http\Response
     */
    public function destroy(MediaCatolog $mediaCatolog)
    {
        //
    }
}
