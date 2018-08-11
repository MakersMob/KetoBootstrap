<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/keto-diet', function () {
	return view('keto');
});

Route::get('/join', function () {
	return view('join');
});

Route::get('/keto-meal-plan', function () {
	return view('7daymealplan');
});

Route::get('/keto-shopping-list', function () {
	return view('shopping-list');
});

Route::post('/payment', 'PaymentController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/recipes', 'RecipeController@index');
Route::resource('recipe', 'RecipeController');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('bootcamp', 'BootcampController');
	Route::resource('challenge/workout', 'WorkoutController');
	Route::resource('challenge/weightloss', 'WeightlossController');
	Route::resource('journal', 'JournalController');
	Route::resource('meal-plan', 'MealPlanController');
	Route::get('mealplanrecipe/create', 'MealPlanRecipeController@create');
	Route::post('mealplanrecipe', 'MealPlanRecipeController@store');
	Route::resource('tag', 'TagController');
	Route::resource('ingredient', 'IngredientController');
	Route::get('ingredientrecipe/create', 'IngredientRecipeController@create');
	Route::post('ingredientrecipe', 'IngredientRecipeController@store');
	Route::resource('instruction', 'InstructionController');
	Route::get('recipetag/create', 'RecipeTagController@create');
	Route::post('recipetag', 'RecipeTagController@store');
});