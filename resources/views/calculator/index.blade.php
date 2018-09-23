@extends('layouts.app', ['title' => 'Keto Macro Calculator'])

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Calculate Your Macros</span></h1>
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
						{!! Form::open(['url' => 'calculator']) !!}
							<div class="form-group">
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="female">
								  <label class="form-check-label" for="inlineRadio1" @if(Auth::user()->gender == 'Female') checked="checked" @end>Female</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="male">
								  <label class="form-check-label" for="inlineRadio2" @if(Auth::user()->gender == 'Male') checked="checked" @end>Male</label>
								</div>
							</div>
							<div class="form-group">
								<label for="weight">Weight in lbs.</label>
								<input class="form-control" type="number" name="weight" id="weight" value="{{ Auth::user()->current_weight }}">
							</div>
							<div class="form-group">
								<label for="height">Height total inches</label>
								<input class="form-control" type="number" name="height" id="height" value="{{ Auth::user()->height }}">
							</div>
							<div class="form-group">
								<label for="age">Age</label>
								<input class="form-control" type="number" name="age" id="age" value="{{ Auth::user()->age }}">
							</div>
							<div class="form-group">
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exercise" id="exampleRadios1" value="1.2" checked>
								  <label class="form-check-label" for="exampleRadios1">
								    Little to no exercise
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exercise" id="exampleRadios2" value="1.375">
								  <label class="form-check-label" for="exampleRadios2">
								    Light exercise 1-3 days per week
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exercise" id="exampleRadios2" value="1.55">
								  <label class="form-check-label" for="exampleRadios2">
								    Moderate exercise 3-5 days per week
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exercise" id="exampleRadios2" value="1.725">
								  <label class="form-check-label" for="exampleRadios2">
								    Hard exercise 6-7 days per week
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exercise" id="exampleRadios2" value="option2">
								  <label class="form-check-label" for="exampleRadios2">
								    Very intense exercise
								  </label>
								</div>
							</div>
							<div class="form-group">
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="goal" id="inlineRadio1" value="deficit">
								  <label class="form-check-label" for="inlineRadio1">Deficit (lose weight)</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="goal" id="inlineRadio2" value="surplus">
								  <label class="form-check-label" for="inlineRadio2">Surplus (gain lean muscle)</label>
								</div>
							</div>
							<div class="form-group">
								<label for="calorie_change">Calorie Change</label>
								<input class="form-control" type="number" name="calorie_change" id="calorie_change">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Calculate Your Macros</button>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection