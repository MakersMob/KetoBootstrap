<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CalculatorController extends Controller
{
    public function index()
    {
    	return view('calculator.index');
    }

    public function store(Request $request)
    {
    	if($request->gender == 'Male') {
    		$bmr = 66 + (6.2 * $request->weight) + (12.7 * $request->height) - (6.76 * $request->age);
    	} else {
    		$bmr = 655.1 + (4.35 * $request->weight) + (4.7 * $request->height) - (4.7 * $request->age);
    	}

    	$tde = $bmr * $request->exercise;
    	
    	if($request->goal == 'deficit') {
    		$deficit = ($request->calorie_change / 100) * $tde;
    		$tde2 = $tde - $deficit;	
    	} else {
    		$surplus = ($request->calorie_change / 100) * $tde;
    		$tde2 = $tde + $surplus;
    	}

    	$carbs = ($tde2 * 0.05) / 4;
    	$protein = ($tde2 * .2) / 4;
    	$fat = $tde2 * 0.75 / 9;

    	if(Auth::check()) {
    		$user = Auth::user();
    		$user->age = $request->age; 
    		$user->calories = $tde2;
    		$user->carbs = $carbs;
    		$user->protein = $protein;
    		$user->fat = $fat;
    		$user->gender = $request->gender;
    		$user->height = $request->height;
    		$user->current_weight = $request->weight;
    		$user->save();
    	}

    	return redirect('macros');
    }
}
