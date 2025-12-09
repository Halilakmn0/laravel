<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Customer;
use App\Models\Food;

class Meal extends Model
{
    protected $fillable = [
    'customer_id',
    'food_id',
    'mealtime',
    'like'
    ];

    use HasFactory;

    protected $guarded = ['id'];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}