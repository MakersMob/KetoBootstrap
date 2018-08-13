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
			<div class="col-12 col-lg-6">
				@unless(count($recipe->tags) < 1)
				<ul class="tags">
					@foreach($recipe->tags as $tag)
						<li><a href="/tag/{{ $tag->slug }}">{{ ucwords($tag->tag) }}</a></li>
					@endforeach
				</ul>
				@endunless
				<div class="clearfix"></div>
				@if($recipe->source)
					<p><em>Original recipe can be found <a href="{{ $recipe->source }}" rel="nofollow">here</a>.</em></p>
				@endif
				<div class="d-print-none">{!! $recipe->description !!}</div>
				<h4>Ingredients</h4>
				<ul class="list-unstyled ingredient-list">
					@foreach($recipe->ingredients as $ingredient)
						<li>@if($ingredient->pivot->item)[{{$ingredient->pivot->item}}] @endif<a href="/ingredient/{{ $ingredient->slug }}">{{ $ingredient->pivot->amount }} {{ $ingredient->pivot->measurement }} {{ $ingredient->name }}</a></li>
					@endforeach
				</ul>
				@unless(Auth::guest())
					<h4>Instructions</h4>
					<ol>
						@foreach($recipe->instructions as $instruction)
							<li>{!! $instruction->description !!}</li>
						@endforeach
					</ol>
				@endunless
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
				@if(Auth::guest())
					<div class="card smoke d-print-none">
						<div class="card-body">
							<h3 class="">Ready to Lose 10-21 lbs in the Next 28 Days? Of Course You Are!</h3>
							<p><img src="https://s3-us-west-2.amazonaws.com/ketodash-master/blog/wp-content/uploads/2018/02/07074540/angel.png" alt="Debi losing weight"></p>
							<p>If you're really serious about losing weight and want to create a new lifestyle for yourself then the <a href="https://ketodash.com/?utm_source=ketodash_recipe_footer&utm_medium=recipe">28-Day Weight Loss Challenge</a> is for you.</p>

							<p>The Ketogenic Diet has changed our lives. It has turned our bodies from sugar-burners to fat-burners.</p>

							<p>We wake up with more energy, less cravings, and a better mood throughout the day.</p>
							<p><img src="https://s3-us-west-2.amazonaws.com/ketodash-master/blog/wp-content/uploads/2018/02/07074852/matt.png" alt="Debi losing weight"></p>

							<p>Our <a href="https://ketodash.com/?utm_source=ketodash_recipe_footer&utm_medium=recipe">28-Day Weight Loss Challenge</a> walks you through how to incorporate the Ketogenic Diet into your lifestyle so you no longer have to worry about giving up on diets and gaining back the weight you keep on trying to lose.</p>

							<p>Sounds too good to be true, right? Well it isn't and we are happy to teach you all about it with the <a href="https://ketodash.com/?utm_source=ketodash_recipe_footer&utm_medium=recipe">28-Day Weight Loss Challenge</a>.</p>

							<p><a href="https://ketodash.com/?utm_source=ketodash_recipe_footer&utm_medium=recipe" class="btn btn-lg btn-primary btn-block">Start the 28-Day Weight Loss Challenge Now</a></p>
						</div>
					</div>
				@endif
			</div>
		</div>

	</div>
</section>
@guest
<section class="announcement d-print-none">
    <p class="text-center"><a href="/">Sign up today for the 28-Day Weight Loss Challenge</a> and get your first macro calculations done free!</p>    
</section>
@endguest
<section class="content smoke d-print-none">
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
							<tr>
								<td><a title="{{$rec->name}}" href="/recipe/{{$rec->slug}}">{{$rec->name}}</a></td>
								<td>{{$rec->calories }}</td>
								<td>{{$rec->protein}}</td>
								<td>{{$rec->fat}}</td>
								<td>{{$rec->carbs}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
@endsection