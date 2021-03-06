@extends('layouts.app', ['title' => 'Keto Recipes: '.$count.' Recipes to Help You Lose Weight', 'description' => 'Being on the ketogenic diet does not mean you should lack variety in your foods. Here are 400+ Keto recipes that we make that keep food exciting.'])

@section('content')
<section class="welcome food2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>{{ $count }} Keto, Delicious, &amp; Low-Carb Recipes</span></h1>
				<h2 class="linewrap"><span>Keto Recipes for Breakfast, Lunch, Dinner, Dessert &amp; Snacks</span></h2>
			</div>
		</div>
	</div>
</section>
@role('admin')
<section class="content admin">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="nav">
				  <li class="nav-item">
				    <a class="nav-link btn btn-primary" style="margin-right: 1rem;" href="/recipe/create">Add Recipe</a>
				  </li>
				</ul>
			</div>
		</div>
	</div>
</section>
@endhasrole
@include('partials.search')
<section class="content smoke">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8">
				<table class="table">
					<thead>
						<tr>
							<td>Recipe</td>
							<td>Calories</td>
							<td>Protein</td>
							<td>Fat</td>
							<td>Net Carbs</td>
						</tr>
					</thead>
					<tbody>
						@foreach($recipes as $recipe)
							<tr>
								<td><a title="{{$recipe->name}}" href="/recipe/{{$recipe->slug}}">{{$recipe->name}}</a></td>
								<td>{{$recipe->calories }}</td>
								<td>{{$recipe->protein}}</td>
								<td>{{$recipe->fat}}</td>
								<td>{{$recipe->carbs}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $recipes->links()}}
			</div>
			<div class="col-12 col-lg-4">
				<table class="table">
					<thead>
						<tr>
							<td colspan="2">Categories</td>
						</tr>
					</thead>
					<tbody>
						@foreach($tags as $tag)
							<tr>
								<td><a href="/keto-recipes/{{ $tag->slug }}">{{ ucwords($tag->tag) }}</a></td>
								<td>{{ count($tag->recipes) }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
@endsection