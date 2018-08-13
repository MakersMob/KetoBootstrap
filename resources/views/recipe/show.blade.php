@extends('layouts.app', ['title' => $recipe->name.' Keto Recipe', 'description' => strip_tags($recipe->description).' Delicious keto recipe.'])

@section('headScripts')
@endsection

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>{{ $recipe->name }}</span></h1>
				<h2 class="linewrap d-print-none"><span><a href="/recipes">Keto Recipes</a></span></h2>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 d-print-none">
				@unless(count($recipe->tags) < 1)
				<ul class="tags ">
					@foreach($recipe->tags as $tag)
						<li><a href="/{{ $tag->slug }}-keto-recipes">{{ ucwords($tag->tag) }}</a></li>
					@endforeach
				</ul>
				@endunless
				<div class="clearfix"></div>
				@if($recipe->source)
					<p><em>Original recipe can be found <a href="{{ $recipe->source }}" rel="nofollow">here</a>.</em></p>
				@endif
				<div class="d-print-none">{!! $recipe->description !!}</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="d-print-none" style="margin-bottom: 2rem;"><a href="javascript:window.print()" class="btn btn-primary print-button">Print Recipe</a></div>
				<h4>Servings: {{ $recipe->servings }}</h4>
				<div class="recipe-description">
					<p>{!! $recipe->serving_description !!}</p>
				</div>
				<h4>Nutritional Info (Per Serving)</h4>
				<table class="table">
					<thead>
						<tr>
							<td>Calories</td>
							<td>Fats (g)</td>
							<td>Protein (g)</td>
							<td>Net Carbs (g)</td>	
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{ $recipe->calories }}</td>
							<td>{{ $recipe->fat }}</td>
							<td>{{ $recipe->protein }}</td>
							<td>{{ $recipe->carbs }}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</div>
</section>
<section class="content smoke">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<h4>Ingredients</h4>
				<ul class="list-unstyled ingredient-list">
					@foreach($recipe->ingredients as $ingredient)
						<li>@if($ingredient->pivot->item)[{{$ingredient->pivot->item}}] @endif<a href="/ingredient/{{ $ingredient->slug }}">{{ $ingredient->pivot->amount }} {{ strtolower($ingredient->pivot->measurement) }} {{ $ingredient->name }}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="col-12 col-lg-6">
				@unless(Auth::guest())
					<h4>Instructions</h4>
					<ol>
						@foreach($recipe->instructions as $instruction)
							<li>{!! $instruction->description !!}</li>
						@endforeach
					</ol>
				@endunless
			</div>
		</div>
	</div>
</section>
@guest
<section class="announcement d-print-none">
    <p class="text-center"><a href="/">Sign up today for the 28-Day Weight Loss Challenge</a> and get your first macro calculations done free!</p>    
</section>
@endguest
<section class="content d-print-none">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="">More Delicious Keto Recipes</h3>
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
						@foreach($recipes as $rec)
							@unless($rec->id == $recipe->id)
								<tr>
									<td><a title="{{$rec->name}}" href="/recipe/{{$rec->slug}}">{{$rec->name}}</a></td>
									<td>{{$rec->calories }}</td>
									<td>{{$rec->protein}}</td>
									<td>{{$rec->fat}}</td>
									<td>{{$rec->carbs}}</td>
								</tr>
							@endunless
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
@endsection