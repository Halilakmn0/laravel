<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Activity;

class Exercise extends Model
{
    protected $fillable = [
        'name',
        'type',
        'unit',
        'calor'
    ];

    use HasFactory;

    protected $guarded = ['id'];
    function activities()
    {
        return $this->hasMany(Activity::class);
    }
}