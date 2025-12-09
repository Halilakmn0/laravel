<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Meal;
use App\Models\Activity;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'birthYear',
        'gender',
        'address'
    ];
    
    use HasFactory;

    protected $guarded = ['id'];
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
    function activities()
    {
        return $this->hasMany(Activity::class);
    }
}