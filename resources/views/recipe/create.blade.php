@extends('layouts.app')

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Add a Recipe</span></h1>
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
						{!! Form::open(['url' => 'recipe']) !!}
							<div class="form-group">
								<label for="name">Name</label>
								<input class="form-control" type="text" name="name" id="name" required>
							</div>
							<div class="form-group">
								<label for="source">Source</label>
								<input class="form-control" type="text" name="source" id="source">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" name="description" rows="8">
								</textarea>
							</div>
							<div class="form-group">
								<label for="servings">Servings</label>
								<input class="form-control" type="text" name="servings" id="servings" required value="1">
							</div>
							<div class="form-group">
								<label for="serving_description">Serving Description</label>
								<textarea class="form-control" name="serving_description" rows="4"></textarea>
							</div>
							<div class="form-group">
								<label for="servings">Calories</label>
								<input class="form-control" type="text" name="calories" id="calories" required value="0.0">
							</div>
							<div class="form-group">
								<label for="servings">Fats</label>
								<input class="form-control" type="text" name="fat" id="fat" required value="0.0">
							</div>
							<div class="form-group">
								<label for="servings">Net Carbs</label>
								<input class="form-control" type="text" name="carbs" id="carbs" required value="0.0">
							</div>
							<div class="form-group">
								<label for="servings">Protein</label>
								<input class="form-control" type="text" name="protein" id="protein" required value="0.0">
							</div>
							<div class="form-group">
								<label for="pinterest">Pinterest Image</label>
								<input class="form-control" type="text" name="pinterest" id="pinterest">
							</div>
							<div class="form-group">
								<label for="image">Image</label>
								<input class="form-control" type="text" name="image" id="image">
							</div>
							<div class="form-group">
								<label for="tags">Tags</label>
								<input class="form-control" type="text" name="tags" id="tags">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Add Recipe</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection