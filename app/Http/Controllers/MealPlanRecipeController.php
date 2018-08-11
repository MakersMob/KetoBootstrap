<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\MealPlan;
use KetoBootstrap\Recipe;

class MealPlanRecipeController extends Controller
{
    public function create()
    {
        $recipes = Recipe::get();
        $plans = MealPlan::get();

        return view('mealplanrecipe.create', compact('recipes', 'plans'));
    }

    public function store(Request $request)
    {
        $mealplan = MealPlan::find($request->meal_plan);

        $mealplan->recipes()->attach($request->recipe, ['week' => $request->week, 'day' => $request->day, 'meal' => $request->meal, 'servings' => $request->servings]);

    	return redirect('meal-plan/'.$request->meal_plan);
    }
}
