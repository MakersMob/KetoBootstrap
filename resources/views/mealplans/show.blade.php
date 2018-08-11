@extends('layouts.app', ['title' => $mealplan->name.' Keto Recipe', 'description' => strip_tags($mealplan->description).' Delicious keto recipe.'])

@section('headScripts')
@endsection

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>{{ $mealplan->title }}</span></h1>
				<h2 class="linewrap d-print-none"><span><a href="/meal-plans">Keto Meal Plans</a></span></h2>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				{!! $mealplan->description !!}
				<ul>
					@foreach($mealplan->recipes as $recipe)
						<li>Week {{ $recipe->pivot->week }} / Day {{ $recipe->pivot->day }} / {{ ucwords($recipe->pivot->meal) }}: <a href="/recipe/{{ $recipe->slug }}">{{ $recipe->name }}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection