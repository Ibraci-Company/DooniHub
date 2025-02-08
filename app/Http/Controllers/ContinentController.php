<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use Illuminate\Http\Request;

class ContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $continents = Continent::orderBy('name')->get();

        return view('pages.continents.index', compact('continents'));
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $continent = Continent::where('slug', $slug)->firstOrFail();
        
        return view('pages.continents.show', compact('continent'));
    }
}
