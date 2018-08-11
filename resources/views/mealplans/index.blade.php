@extends('layouts.app', ['title' => 'Keto Recipes: 300+ Recipes to Help You Lose Weight', 'description' => 'Being on the ketogenic diet does not mean you should lack variety in your foods. Here are 200+ Keto recipes that we make that keep food exciting.'])

@section('content')
<section class="welcome food2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Meal Plans</span></h1>
				<h2 class="linewrap"><span>Meal Plans for Breakfast, Lunch, Dinner, Dessert &amp; Snacks</span></h2>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="table">
					@foreach($mealplans as $plan)
						<tr>
							<td><a href="/meal-plan/{{ $plan->id }}">{{ $plan->title }}</a></td>
						</tr>
					@endforeach
				</table>	
			</div>
		</div>
	</div>
</section>
@endsection