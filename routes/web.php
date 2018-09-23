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

Route::get('/join', 'JoinController@index');

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
Route::get('calculator', 'CalculatorController@index');
Route::post('calculator', 'CalculatorController@store');

Route::group(['middleware' => 'auth'], function () {
	Route::post('goals', 'GoalController@store');
	Route::get('/welcome', 'WelcomeController@index');
	Route::resource('bootcamp', 'BootcampController');
	Route::get('challenge/{id}/start', 'ChallengeUserController@store');
	Route::get('challenge/{id}/restart', 'ChallengeUserController@update');
	Route::get('challenge/{id}/stop', 'ChallengeUserController@destroy');
	Route::resource('challenge', 'ChallengeController');
	Route::resource('challengeday', 'ChallengeDayController');
	Route::resource('challengeuser', 'ChallengeUserController');
	Route::resource('journal', 'JournalController');
	Route::resource('meal-plan', 'MealPlanController');
	Route::get('mealplanrecipe/create', 'MealPlanRecipeController@create');
	Route::post('mealplanrecipe', 'MealPlanRecipeController@store');
	Route::get('{id}-keto-recipes', 'TagController@show');
	Route::resource('tag', 'TagController');
	Route::resource('ingredient', 'IngredientController');
	Route::get('ingredientrecipe/create', 'IngredientRecipeController@create');
	Route::post('ingredientrecipe', 'IngredientRecipeController@store');
	Route::resource('instruction', 'InstructionController');
	Route::post('recipesearch', 'RecipeSearchController@show');
	Route::post('recipeuser', 'RecipeUserController@store');
	Route::resource('macros', 'MacrosController');
	Route::resource('wins', 'WinController');
});