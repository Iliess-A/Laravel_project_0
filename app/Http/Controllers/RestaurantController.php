<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use Symfony\Contracts\Service\Attribute\Required;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('restaurant.index',['restaurants' => Restaurant::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurant/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        Restaurant::create([
            'name'=>strip_tags($request->name_restaurant),
            'adress'=>strip_tags($request->adress_restaurant),
            'zipCode'=>strip_tags($request->zipCode_restaurant),
            'town'=>strip_tags($request->town_restaurant),
            'country'=>strip_tags($request->country_restaurant),
            'description'=>strip_tags($request->description_restaurant),
            'review'=>strip_tags($request->review_restaurant),
            'updated_at'=>NOW(),
            'created_at'=>NOW()

        ]);
        return back()->with('success', 'Restaurant created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $restaurant = Restaurant::findOrFail($id);
            return view('restaurant.show', ['restaurant' => $restaurant]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            // Handle the case where the ID is not found
            return response()->view('errors.404_restaurant', [], 404); // You can customize the error view
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('restaurant.create',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // // Logic to update an existing article
        // $restaurant = Restaurant::findOrFail($id);
        // $restaurant->name = $request->title;
        // $restaurant->description = $request->content;
        // $restaurant->save();

        // return redirect()->back()->with('success', 'Article updated successfully!');

        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
