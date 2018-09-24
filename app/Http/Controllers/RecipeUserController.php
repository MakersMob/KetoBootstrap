<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\Recipe;
use Auth;

class RecipeUserController extends Controller
{
	public function index()
	{
		return view('user.recipe.index');
	}

    public function store(Request $request)
    {
    	$user = Auth::user();
    	$recipe = Recipe::find($request->recipe);

    	$user->recipes()->attach($request->recipe, ['category' => strtolower($request->category), 'slug' => urlencode(strtolower($request->category))]);

    	return redirect('recipe/'.$recipe->slug);
    }
}
