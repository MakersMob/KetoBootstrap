<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\Recipe;
use KetoBootstrap\Ingredient;

class IngredientRecipeController extends Controller
{
    public function create()
    {
    	$recipes = Recipe::orderBy('id', 'DESC')->get();
    	$ingredients = Ingredient::orderBy('name', 'ASC')->get();

    	return view('ingredientrecipe.create', compact('recipes', 'ingredients'));
    }

    public function store(Request $request)
    {
    	$recipe = Recipe::find($request->recipe);
    	$ingredient = Ingredient::find($request->ingredient);

    	$recipe->ingredients()->attach($ingredient->id, ['amount' => $request->amount, 'measurement' => $request->measurement, 'item' => $request->item]);

    	return redirect('recipe/'.$recipe->slug);
    }
}
