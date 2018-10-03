@extends('layouts.app')

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Edit: {{ $recipe->name }}</span></h1>
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
						{!! Form::open(['url' => 'recipe/'.$recipe->id,  'method' => 'patch']) !!}
							<div class="form-group">
								<label for="name">Name</label>
								<input class="form-control" type="text" name="name" id="name" value="{{ $recipe->name }}" required>
							</div>
							<div class="form-group">
								<label for="source">Source</label>
								<input class="form-control" type="text" name="source" id="source" value="{{ $recipe->source }}">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" name="description" rows="8">
{!! $recipe->description !!}
								</textarea>
							</div>
							<div class="form-group">
								<label for="servings">Servings</label>
								<input class="form-control" type="text" name="servings" id="servings" required value="{{ $recipe->servings }}">
							</div>
							<div class="form-group">
								<label for="serving_description">Serving Description</label>
								<textarea class="form-control" name="serving_description" rows="4">
{!! $recipe->serving_description !!}						
								</textarea>
							</div>
							<div class="form-group">
								<label for="servings">Calories</label>
								<input class="form-control" type="text" name="calories" id="calories" required value="{{ $recipe->calories }}">
							</div>
							<div class="form-group">
								<label for="servings">Fats</label>
								<input class="form-control" type="text" name="fat" id="fat" required value="{{ $recipe->fat }}">
							</div>
							<div class="form-group">
								<label for="servings">Net Carbs</label>
								<input class="form-control" type="text" name="carbs" id="carbs" required value="{{ $recipe->carbs }}">
							</div>
							<div class="form-group">
								<label for="servings">Protein</label>
								<input class="form-control" type="text" name="protein" id="protein" required value="{{ $recipe->protein }}">
							</div>
							<div class="form-group">
								<label for="pinterest">Pinterest Image</label>
								<input class="form-control" type="text" name="pinterest" id="pinterest" value="{{ $recipe->pinterest }}">
							</div>
							<div class="form-group">
								<label for="tags">Tags</label>
								<input class="form-control" type="text" name="tags" id="tags">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Edit Recipe</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection