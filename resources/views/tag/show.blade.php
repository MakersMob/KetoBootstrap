@extends('layouts.app', ['title' => ucwords($tag->tag).' Keto Recipes'])

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>{{ ucwords($tag->tag) }}</span></h1>
				<h2 class="linewrap"><span><a href="/recipes">Keto Recipes</a></span></h2>
			</div>
		</div>
	</div>
</section>
<section class="content">
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
						@foreach($tag->recipes as $recipe)
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