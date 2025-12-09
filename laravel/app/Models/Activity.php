<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Exercise;
use App\Models\Customer;

class Activity extends Model
{
    function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
    function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}