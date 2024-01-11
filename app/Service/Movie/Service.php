<?php

namespace App\Service\Movie;

use App\Models\Movie;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store(array $data)
    {
        try {

            DB::beginTransaction();

            if (isset($data['genre_ids'])) {
                $genreIds = $data['genre_ids'];
                unset($data['genre_ids']);
            }

            $data['image'] = Storage::disk('public')->put('/uploads', $data['image']);


            $movie = Movie::firstOrCreate($data);

            if (isset($genreIds)) {
                $movie->genre()->attach($genreIds);
            }

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update(array $data, $movie)
    {
        try {
            DB::beginTransaction();
            if (isset($data['genre_ids'])) {
                $genreIds = $data['genre_ids'];
                unset($data['genre_ids']);
            }

            $data['image'] = Storage::disk('public')->put('/uploads', $data['image']);

            $movie->update($data);

            if (isset($tagIds)) {
                $movie->tags()->attach($tagIds);
            }

            DB::commit();

        } catch (\Exception $exception) {
            DB::rollBack();
            abort(404);
        }

        return $movie;
    }
}
