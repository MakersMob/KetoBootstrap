@extends('layouts.app', ['title' => 'Keto recipes that use '.$ingredient->name, 'description' => 'Looking for ketogenic recipes that use '.$ingredient->name.'? Here are '.count($ingredient->recipes).' keto recipes with '.$ingredient->name.' for you to enjoy.'])

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="linewrap"><span>Keto Recipes Using</span></h2>
				<h1 class="linewrap"><span>{{ $ingredient->name }}</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="content smoke">
	<div class="container">
		<div class="row" data-equalizer>
			<div class="col-12">
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
						@foreach($ingredient->recipes as $recipe)
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
			</div>
		</div>
	</div>
</section>
@endsection