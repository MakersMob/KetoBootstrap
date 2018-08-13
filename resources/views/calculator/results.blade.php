@extends('layouts.app', ['title' => 'Keto Recipes: 300+ Recipes to Help You Lose Weight', 'description' => 'Being on the ketogenic diet does not mean you should lack variety in your foods. Here are 200+ Keto recipes that we make that keep food exciting.'])

@section('content')
<section class="welcome food2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Your Macro Results</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="container">
		<div class="row">
			<ul class="list-unstyled">
				<li>Fats: {{ round($fat) }}g</li>
				<li>Carbs: {{ round($carbs) }}g</li>
				<li>Protein: {{ round($protein) }}g</li>
				<li>Total Calories: {{ round($tde2) }}</li>
			</ul>
		</div>
	</div>
</section>
@endsection