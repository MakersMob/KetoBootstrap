<?php

namespace KetoBootstrap\Http\Controllers;

use Illuminate\Http\Request;
use KetoBootstrap\Recipe;

class BaseController extends Controller
{
    public function index()
    {
    	$recipes = Recipe::orderBy('id', 'DESC')->limit(10)->get();

    	return view('welcome', compact('recipes'));
    }
}
