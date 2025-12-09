<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Meal;

class Food extends Model
{
    function meals()
    {
        return $this->hasMany(Meal::class);
    }
}