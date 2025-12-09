<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(Meal::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Meal::create([
        "customer_id" => 1,
        "food_id" => 1,
        "mealtime" => "Breakfast",
        "like" => true
        ]);

         Meal::create([
        "customer_id" => 1,
        "food_id" => 2,
        "mealtime" => "Dinner",
        "like" => false
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meal $meal)
    {
        //
    }
}
