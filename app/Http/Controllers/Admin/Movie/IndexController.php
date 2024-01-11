<?php

namespace App\Http\Controllers\Admin\Movie;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Movie\StoreRequest;
use App\Http\Requests\Admin\Movie\UpdateRequest;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Service\Movie\Service;

class IndexController  extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::orderBy('id', "DESC")->paginate(10);

        return view('admin.movie.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        $genres = Genre::all();

//        dd($countries);
        return view('admin.movie.create', compact('countries', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        $movies = Movie::orderBy('id', "DESC")->paginate(10);
        return redirect(route('admin.movie.index',compact('movies')));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);
        $countries = Country::all();
        $genres = $movie->genre;


        return view('admin.movie.show', compact('movie', 'countries', 'genres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::findOrFail($id);
        $countries = Country::all();
        $genres = $movie->genre;


        return view('admin.movie.edit', compact('movie', 'countries', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Movie $movie)
    {
        $data = $request->validated();

        $this->service->update($data, $movie);

        $movies = Movie::orderBy('id', "DESC")->paginate(10);
        return redirect(route('admin.movie.index',compact('movies')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Movie::findOrFail($id)->delete();

        $movies = Movie::orderBy('id', "DESC")->paginate(10);
        return view('admin.movie.index', compact('movies'));
    }
}
