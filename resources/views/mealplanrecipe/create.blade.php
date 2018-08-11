@extends('layouts.app')

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Add Recipe to Meal Plan</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="content smoke">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-body">
						{!! Form::open(['url' => 'mealplanrecipe']) !!}
							<div class="form-group">
								<label for="meal_plan">Meal Plan</label>
								<select class="form-control" name="meal_plan" id="meal_plan">
									@foreach($plans as $plan)
										<option value="{{$plan->id}}">{{$plan->title}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="recipe">Recipe</label>
								<select class="form-control" name="recipe" id="recipe">
									@foreach($recipes as $recipe)
										<option value="{{$recipe->id}}">{{$recipe->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="servings">Servings</label>
								<input class="form-control" type="text" name="servings" id="servings" value="1" required>
							</div>
							<div class="form-group">
								<label for="week">Week</label>
								<input class="form-control" type="text" name="week" id="week" required>
							</div>
							<div class="form-group">
								<label for="day">Day</label>
								<input class="form-control" type="text" name="day" id="day" required>
							</div>
							<div class="form-group">
								<label for="meal">Meal</label>
								<select class="form-control" name="meal" id="meal">
									<option value="breakfast">Breakfast</option>
									<option value="lunch">Lunch</option>
									<option value="snack">Snack</option>
									<option value="dinner">Dinner</option>
									<option value="dessert">Dessert</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Create Meal Plan</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection