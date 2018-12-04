@extends('layouts.app', ['title' => $recipe->name.' Keto Recipe', 'description' => strip_tags($recipe->description).' Delicious keto recipe.'])

@section('content')
<section class="welcome food3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>{{ $recipe->name }}</span></h1>
				<h2 class="linewrap d-print-none"><span><a href="/recipes">Keto Recipes</a></span></h2>
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
				    <a class="nav-link btn btn-primary" style="margin-right: 1rem;" href="/recipe/{{ $recipe->id }}/edit">Edit Recipe</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link btn btn-success" style="margin-right: 1rem;" href="/ingredientrecipe/create">Add Ingredient</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link btn btn-warning" href="/instruction/create">Add Instruction</a>
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
			<div class="col-12 col-lg-6 d-print-none">
				@isset($recipe->image)
						<img src="{{ $recipe->image }}" alt="{{ $recipe->name }}" title="{{ $recipe->name }}" style="margin-bottom: 1rem;">
				@endisset
				@unless(count($recipe->tags) < 1)
				<ul class="tags ">
					@foreach($recipe->tags as $tag)
						<li><a href="/keto-recipes/{{ $tag->slug }}">{{ ucwords($tag->tag) }}</a></li>
					@endforeach
				</ul>
				<div class="clearfix"></div>
				@endunless
				@if($recipe->source)
					<p><em>Original recipe can be found <a href="{{ $recipe->source }}" rel="nofollow">here</a>.</em></p>
				@endif
				<div class="d-print-none">{!! $recipe->description !!}</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="d-print-none" style="margin-bottom: 2rem;">
					@auth
						@unless(Auth::user()->recipes->contains($recipe->id))
							<a href="" class="btn btn-success print-button" data-toggle="modal" data-target="#saveModal">Save Recipe</a>
						@endunless
					@endauth
					<a href="javascript:window.print()" class="btn btn-primary print-button">Print Recipe</a>
				</div>
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
@guest
<section class="content announcement d-print-none">
	<div class="container">
		<div class="row">
			<h2 class="linewrap"><span>Want to learn how to use this recipe and more to lose weight? Then take the 28-Day Weight Loss Challenge</span></h2>
    		<p style="margin-bottom: 0;" class="text-center"><a class="btn btn-lg btn-primary" href="/join">Sign up today! &#8594;</a></p>
    	</div>
    </div>    
</section>
@endguest
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<h4>Ingredients</h4>
				<ul class="list-unstyled ingredient-list">
					@foreach($recipe->ingredients as $ingredient)
						<li>@if($ingredient->pivot->item)[{{$ingredient->pivot->item}}] @endif<a href="/ingredient/{{ $ingredient->slug }}">{{ $ingredient->pivot->amount }} {{ strtolower($ingredient->pivot->measurement) }} {{ $ingredient->name }}</a> @isset($ingredient->link) [<a href="{{ $ingredient->link }}">get it here</a>]@endisset @role('admin') {!! Form::open(['method' => 'DELETE', 'route' => ['ingredientrecipe.destroy', $ingredient->id]]) !!}
							<input type="hidden" name="recipe" value="{{ $recipe->id }}">
							<button type="submit" class="btn btn-primary btn-sm btn-warning">Delete Ingredient</button>
						{!! Form::close() !!} @endhasrole</li>
					@endforeach
				</ul>
			</div>
			<div class="col-12 col-lg-6">
					<h4>Instructions</h4>
					<ol>
						@foreach($recipe->instructions as $instruction)
							<li>{!! $instruction->description !!} @role('admin') [<a href="/instruction/{{ $instruction->id }}/edit">Edit</a>] @endhasrole</li>
						@endforeach
					</ol>
			</div>
		</div>
	</div>
</section>
<section class="content d-print-none smoke">
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
<div class="modal fade" tabindex="-1" role="dialog" id="saveModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Save This Recipe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['url' => 'recipeuser']) !!}
      <div class="modal-body">
        <div class="form-group">
        	<label for="category">Category</label>
        	<input class="form-control" type="text" name="category" id="category">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Recipe</button>
        <input type="hidden" name="recipe" value="{{ $recipe->id }}">
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection