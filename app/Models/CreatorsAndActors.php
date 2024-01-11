<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatorsAndActors extends Model
{
    use HasFactory;

//    protected $guarded = false;


    protected $fillable = ['full_name_ru', 'full_name_en', 'career_id', 'date_of_birth', 'image', 'description'];

}
