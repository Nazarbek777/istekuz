<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamStoreRequest;
use App\Http\Requests\TeamUpdateRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{

    public function index()
    {
        $teams = Team::paginate(10);
        return view('admin.team.index', compact('teams'));
    }


    public function create()
    {
        return view('admin.team.create');
    }


    public function store(TeamStoreRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('team_photo', $name);
        }

        Team::create([
            'full_name' => $validated['full_name'],
            'job' => $validated['job'],
            'skill' => $validated['skill'],
            'image' => $path ?? null,
            'experience' => $validated['experience'],
            'facebook_link' => $validated['facebook_link'],
            'instagram_link' => $validated['instagram_link'],
            'telegram_link' => $validated['telegram_link'],
            'youTube_link' => $validated['youTube_link'],
            'description_uz' => $validated['description_uz'],
            'description_ru' =>  $validated['description_ru'],
            'description_en' => $validated['description_en'],

        ]);

        return redirect()->route('team.index')->with('success', "Jamoa A'zosi muvaffaqiyatli qo'shildi");
    }


    public function show(Team $team)
    {
        return view('admin.team.show', compact('team'));
    }


    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }


    public function update(TeamUpdateRequest $request, Team $team)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($team->image) {
                Storage::delete($team->image);
            }
            $name = time() . '_' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('product_photo', $name);
        }
        $team->update([
            'full_name' => $validated['full_name'],
            'job' => $validated['job'],
            'skill' => $validated['skill'],
            'image' => $path ?? $team->image,
            'experience' => $validated['experience'],
            'facebook_link' => $validated['facebook_link'],
            'instagram_link' => $validated['instagram_link'],
            'telegram_link' => $validated['telegram_link'],
            'youTube_link' => $validated['youTube_link'],
            'description_uz' => $validated['description_uz'],
            'description_ru' =>  $validated['description_ru'],
            'description_en' => $validated['description_en'],
        ]);

        return redirect()->route('team.index')->with('success', 'Mahsulot muvaffaqiyatli tahrirlandi');
    }

    
    public function destroy(Team $team)
    {
        if($team->image){
            Storage::delete($team->image);
        }

        $team->delete();

        return redirect()->back();
    }
}
