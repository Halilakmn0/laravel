<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Meal;

class Food extends Model
{
    protected $fillable = [
        'name',
        'type',
        'unit',
        'calor'
    ];

    use HasFactory;

    protected $guarded = ['id'];
    function meals()
    {
        return $this->hasMany(Meal::class);
    }
}