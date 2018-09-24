@extends('layouts.app', [])

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Your Saved Recipes</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul>
				@foreach(Auth::user()->recipes as $recipe)
					<li><a href="/recipe/{{ $recipe->slug }}">{{ $recipe->name }}</a></li>
				@endforeach
				</ul>
			</div>
		</div>
	</div>
</section>	
@endsection