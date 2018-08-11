@extends('layouts.app')

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
			<div class="col-12 col-lg-8 post">
				<ul>
					@foreach($ingredient->recipes as $recipe)
						<li><a href="/recipe/{{$recipe->slug}}">{{$recipe->name}}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="col-12 col-lg-4">
				<div class="sidebar">
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection