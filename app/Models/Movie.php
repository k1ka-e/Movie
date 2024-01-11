<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = ['name', 'year', 'country_id', 'image', 'video', 'trailer', 'age', 'description'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function genre()
    {
        return $this->belongsToMany(Genre::class,'genres_movie', 'movie_id', 'genre_id');
    }
}
