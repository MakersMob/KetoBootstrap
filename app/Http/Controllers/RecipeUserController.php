<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\Recipe;
use Auth;

class RecipeUserController extends Controller
{
    public function store(Request $request)
    {
    	$user = Auth::user();
    	$recipe = Recipe::find($request->recipe);

    	$user->recipes()->attach($request->recipe);

    	return redirect('recipe/'.$recipe->slug);
    }
}
