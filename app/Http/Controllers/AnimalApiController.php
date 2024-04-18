<?php

namespace App\Http\Controllers;

use App\Models\AnimalApi;
use Illuminate\Http\Request;

class AnimalApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = AnimalApi::all();
        return view('welcome', compact('animals'));

        return response()->json($animals, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(AnimalApi $animalApi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnimalApi $animalApi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnimalApi $animalApi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnimalApi $animalApi)
    {
        //
    }
}
