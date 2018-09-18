@extends('layouts.app')

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Add an Ingredient</span></h1>
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
						{!! Form::open(['url' => 'ingredientrecipe']) !!}
							<div class="form-group">
								<label for="name">Recipe</label>
								<select class="form-control" name="recipe">
									@foreach($recipes as $recipe)
										<option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="link">Ingredient</label>
								<select class="form-control" name="ingredient">
									@foreach($ingredients as $ingredient)
										<option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<div class="form-group">
										<label for="link">Amount</label>
										<input class="form-control" type="text" name="amount" id="amount">
									</div>
								</div>
								<div class="col-lg-8">
									<div class="form-group">
										<label for="link">Measurement</label>
										<select class="form-control" name="measurement" id="measurement">
											<option value=""></option>
											<option value="bottles">bottles</option>
											<option value="cans">cans</option>
											<option value="capsules">capsules</option>
											<option value="clove">clove</option>
											<option value="cubes">cubes</option>
											<option value="cup">cup</option>
											<option value="drops">drops</option>
											<option value="g">g</option>
											<option value="handfuls">handfuls</option>
											<option value="head">head</option>
											<option value="oz">oz</option>
											<option value="large">large</option>
											<option value="lbs">lbs</option>
											<option value="links">links</option>
											<option value="medium">medium</option>
											<option value="packets">packets</option>
											<option value="pinch">pinch</option>
											<option value="scoops">scoops</option>
											<option value="slices">slices</option>
											<option value="small">small</option>
											<option value="square">square</option>
											<option value="tbsp">tbsp</option>
											<option value="tsp">tsp</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="item">Item</label>
								<input class="form-control" type="text" name="item" id="item">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Create Ingredient</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection