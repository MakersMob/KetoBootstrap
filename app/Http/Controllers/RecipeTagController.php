<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\Recipe;
use KetoBootstrap\Tag;

class RecipeTagController extends Controller
{
	public function create()
	{
		$recipes = Recipe::get();

		$tags = Tag::get();

		return view('recipetag.create', compact('recipes', 'tags'));
	}

    public function store(Request $request)
    {
    	$recipe = Recipe::find($request->recipe);

    	$recipe->tags()->attach($request->tags);

    	return redirect('recipe/'.$recipe->slug);
    }
}
