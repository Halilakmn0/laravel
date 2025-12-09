<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Exercise;
use App\Models\Customer;

class Activity extends Model
{
    protected $fillable = [
        'customer_id',
        'exercise_id',
        'repetition',
        'calor',
        'like',
        'duration'
    ];

    use HasFactory;

    protected $guarded = ['id'];
    function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
    function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}