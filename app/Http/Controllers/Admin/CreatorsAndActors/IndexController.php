<?php

namespace App\Http\Controllers\Admin\CreatorsAndActors;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatorsAndActors\StoreRequest;
use App\Http\Requests\Admin\CreatorsAndActors\UpdateRequest;
use App\Models\Career;
use App\Models\CreatorsAndActors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $creators_and_actors = CreatorsAndActors::orderBy('id', "DESC")->paginate(10);
        $careers = Career::all();
        return view('admin.creator_and_actor.index', compact('creators_and_actors', 'careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $careers = Career::all();
        return view('admin.creator_and_actor.create', compact('careers'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/uploads', $data['image']);

        CreatorsAndActors::firstOrCreate($data);
        return redirect(route('admin.creator_and_actor.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $creator_and_actor = CreatorsAndActors::findOrFail($id);
        $careers = Career::all();

        return view('admin.creator_and_actor.show', compact('creator_and_actor', 'careers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $creator_and_actor = CreatorsAndActors::findOrFail($id);
        $careers = Career::all();

        return view('admin.creator_and_actor.edit', compact('creator_and_actor', 'careers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, CreatorsAndActors $creator_and_actor)
    {
        $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = Storage::disk('public')->put('/uploads', $request->file('image'));
        }

        $creator_and_actor->update($data);

        $careers = Career::all();
        return view('admin.creator_and_actor.show', compact('creator_and_actor', 'careers'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CreatorsAndActors::findOrFail($id)->delete();

        $creators_and_actors = CreatorsAndActors::orderBy('id', "DESC")->paginate(10);
        $careers = Career::all();
        return view('admin.creator_and_actor.index', compact('creators_and_actors', 'careers'));
    }
}
