<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class GoalController extends Controller
{
    public function store(Request $request)
    {
    	$user = Auth::user();

    	$user->current_weight = $request->weight;
    	$user->goal_weight = $request->goal_weight;
        $user->height = $request->height;
        $user->gender = $request->gender;
        $user->age = $request->age;

    	$user->save();

    	return redirect('/macros');
    }
}
