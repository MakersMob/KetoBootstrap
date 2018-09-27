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
<section class="content ice">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h5>How Often Should I Calculate My Macros?</h5>
				<p><strong>A good rule of thumb to follow is that with every 10 lbs. lost, you should recalculate your macros.</strong> Of course, you can do this whenever you want but it is not something you want to do daily. You want at least a week with your macro calculations before making adjustments.</p>
				<p>If you don't give them time then you will not know the effect they are having on you.</p>
			</div>
		</div>
	</div>
</section>
<section class="content ">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<h5>Your Macros</h5>
				<table class="table">
					<tr>
						<td>Calories</td>
						<td>{{ Auth::user()->calories }}</td>
					</td>
					<tr>
						<td>Fat</td>
						<td>{{ Auth::user()->fat }}g</td>
					</td>
					<tr>
						<td>Protein</td>
						<td>{{ Auth::user()->protein }}g</td>
					</td>
					<tr>
						<td>Carbs</td>
						<td>{{ Auth::user()->carbs }}g</td>
					</td>
				</table>
				<p class="" style="line-height: 1.2;"><small><strong>These macro numbers are from your latest macros calculation.</strong> You can always come back to this page to view your macros.</small></p>
				<p class="" style="line-height: 1.2;"><small><strong>Even if your carbs are over 20.0g we suggest staying UNDER 20g a day for optimal results.</strong></small></p>
			</div>
			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-body">
						{!! Form::open(['url' => 'calculator']) !!}
							<h6>Vitals</h6>
							<hr>
							<div class="form-group">
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="female" @if(Auth::user()->gender == 'Female') checked="checked" @endif>
								  <label class="form-check-label" for="inlineRadio1">Female</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="male" @if(Auth::user()->gender == 'Male') checked="checked" @endif>
								  <label class="form-check-label" for="inlineRadio2">Male</label>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-lg-4">
									<label for="weight">Weight in lbs.</label>
									<input class="form-control" type="number" name="weight" id="weight" value="{{ Auth::user()->current_weight }}">
								</div>
								<div class="form-group col-lg-4">
									<label for="height">Height total inches</label>
									<input class="form-control" type="number" name="height" id="height" value="{{ Auth::user()->height }}">
								</div>
								<div class="form-group col-lg-4">
									<label for="age">Age</label>
									<input class="form-control" type="number" name="age" id="age" value="{{ Auth::user()->age }}">
								</div>
							</div>
							<hr>
							<h6>Exercise Level</h6>
							<hr>
							<div class="form-group">
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exercise" id="exampleRadios1" value="1.1" checked>
								  <label class="form-check-label" for="exampleRadios1">
								    No Exercise to 1-3 Days a Week of Low-Intensity
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exercise" id="exampleRadios2" value="1.225">
								  <label class="form-check-label" for="exampleRadios2">
								    1-3 Days a Week of Medium to High-Intensity
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exercise" id="exampleRadios2" value="1.375">
								  <label class="form-check-label" for="exampleRadios2">
								    4 or More Days a Week of Low-Intensity 
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exercise" id="exampleRadios2" value="1.55">
								  <label class="form-check-label" for="exampleRadios2">
								    4 or More Days a Week of Medium-to-High Intensity
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exercise" id="exampleRadios2" value="1.725">
								  <label class="form-check-label" for="exampleRadios2">
								    5 or More Days a Week of HIIT
								  </label>
								</div>
							</div>
							<hr>
							<h6>Do You Want to Lose Weight or Gain Lean Muscle?</h6>
							<hr>
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
								<label for="calorie_change">Caloric % Change</label>
								<input class="form-control" type="number" name="calorie_change" id="calorie_change">
								<small id="passwordHelpBlock" class="form-text text-muted">
								  5-10% is a small deficit. 10-20% is a moderate deficit. 20-30% is a large deficit. <strong>Do not exceed 30%.</strong>
								</small>
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