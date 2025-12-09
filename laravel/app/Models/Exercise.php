<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Activity;

class Exercise extends Model
{
    function activities()
    {
        return $this->hasMany(Activity::class);
    }
}