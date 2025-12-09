<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::where("id","1")->get();
        
        $customer[0]->update([
            "name" => "John"
        ]);

        dd(Customer::all());


        // foreach döngüsü

        /*
        $customers = Customer::all();

        foreach($customers as  $customer){
            echo $customer->id . " - " . $customer->name . "<br/>"
        }
        */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Customer::create([
            "name" => "Serdar",
            "surname"=> "Balkı",
            "birthYear"=>2004,
            "gender" => "Male",
            

        ]);

        Customer::create([
            "name"=> "Jane",
            "surname" => "Doe",
            "birthYear"=> 1999,
            "gender"=> "Female",
            
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
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $customer->update([
            "surname"=> "abc"
        ]);

        dd(Customer::all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
