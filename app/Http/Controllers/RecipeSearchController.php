<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\Recipe;

class RecipeSearchController extends Controller
{
    public function show(Request $request)
    {
    	$recipes = Recipe::search($request->search)->get();
    	$search = $request->search;

    	return view('search.show', compact('recipes', 'search'));
    }
}
