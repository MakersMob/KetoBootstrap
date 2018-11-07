@extends('layouts.app')

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Add an Alcohol</span></h1>
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
						{!! Form::open(['url' => 'alcohol']) !!}
							<div class="form-group">
								<label for="name">Name</label>
								<input class="form-control" type="text" name="name" id="name" required>
							</div>
							<div class="form-group">
								<label for="type">Type</label>
									<select class="form-control" name="type" id="type">
										<option value="Beer">Beer</option>
										<option value="Brandy">Brandy</option>
										<option value="Gin">Gin</option>
										<option value="Red Wine">Red Wine</option>
										<option value="Rum">Rum</option>
										<option value="Tequila">Tequila</option>
										<option value="Vodka">Vodka</option>
										<option value="Whiskey">Whiskey</option>
										<option value="White Wine">White Wine</option>	
									</select>
							</div>
							<div class="form-group">
								<label for="net_carbs">Net Carbs</label>
								<input class="form-control" type="text" name="net_carbs" id="net_carbs" required value="0.0">
							</div>
							<div class="form-group">
								<label for="calories">Calories</label>
								<input class="form-control" type="text" name="calories" id="calories" required value="0.0">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Add Alcohol</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection