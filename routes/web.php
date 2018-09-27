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

Route::get('keto-recipes/{id}', 'TagController@show');
Route::resource('tag', 'TagController');
Route::resource('ingredient', 'IngredientController');
Route::post('recipesearch', 'RecipeSearchController@show');


Route::get('plans/1150/week1', function () {
	return view('meal.1150.1150week1');
});
Route::get('plans/1150/week2', function () {
	return view('meal.1150.1150week2');
});
Route::get('plans/1150/week3', function () {
	return view('meal.1150.1150week3');
});
Route::get('plans/1150/week4', function () {
	return view('meal.1150.1150week4');
});
Route::get('plans/1250/week1', function () {
	return view('meal.1250.week1');
});
Route::get('plans/1250/week2', function () {
	return view('meal.1250.week2');
});
Route::get('plans/1250/week3', function () {
	return view('meal.1250.week3');
});
Route::get('plans/1250/week4', function () {
	return view('meal.1250.week4');
});
Route::get('plans/1200/week1', function () {
	return view('meal.1200.1200week1');
});

Route::get('plans/1200/week2', function () {
	return view('meal.1200.1200week2');
});

Route::get('plans/1200/week3', function () {
	return view('meal.1200.1200week3');
});

Route::get('plans/1200/week4', function () {
	return view('meal.1200.1200week4');
});

Route::get('plans/1350/week1', function () {
	return view('meal.1350.week1');
});

Route::get('plans/1350/week2', function () {
	return view('meal.1350.week2');
});

Route::get('plans/1350/week3', function () {
	return view('meal.1350.week3');
});

Route::get('plans/1350/week4', function () {
	return view('meal.1350.week4');
});

Route::get('plans/1500/week1', function () {
	return view('meal.1500.week1');
});

Route::get('plans/1500/week2', function () {
	return view('meal.1500.week2');
});

Route::get('plans/1500/week3', function () {
	return view('meal.1500.week3');
});

Route::get('plans/1500/week4', function () {
	return view('meal.1500.week4');
});

Route::get('meal/plan2', function () {
		return view('meal.plan2');
	});

Route::get('/meal/day/{day}', 'MealController@day');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/admin', 'AdminController@index');
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
	Route::get('ingredientrecipe/create', 'IngredientRecipeController@create');
	Route::post('ingredientrecipe', 'IngredientRecipeController@store');
	Route::resource('instruction', 'InstructionController');
	Route::get('user/recipes', 'RecipeUserController@index');
	Route::post('recipeuser', 'RecipeUserController@store');
	Route::resource('macros', 'MacrosController');
	Route::resource('wins', 'WinController');
	Route::post('usersearch', 'UserSearchController@show');
});