<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\Recipe;
use KetoBootstrap\Ingredient;

class IngredientRecipeController extends Controller
{
    public function create()
    {
    	$recipes = Recipe::orderBy('name', 'ASC')->get();
    	$ingredients = Ingredient::orderBy('name', 'ASC')->get();

    	return view('ingredientrecipe.create', compact('recipes', 'ingredients'));
    }

    public function store(Request $request)
    {
    	$recipe = Recipe::find($request->recipe);
    	$ingredient = Ingredient::find($request->ingredient);

    	$amount = $request->amount.' '.$request->measurement;

    	$recipe->ingredients()->attach($ingredient->id, ['amount' => $amount]);

    	return redirect('recipe/'.$recipe->slug);
    }
}
