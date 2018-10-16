@extends('layouts.app', ['title' => 'Helping You Bootstrap the Keto Diet'])

@section('content')
<section class="welcome food">
  <div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="billboard linewrap"><span>Start off the right way with the Keto Diet</span></h1>
        </div>
    </div>
  </div>
</section>
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>You aren&rsquo;t happy about something with your body.</h2>
			</div>
			<div class="col-12 col-lg-8">
				<p>Maybe you feel you can look better. Maybe you feel you should smile when you see yourself. Maybe you feel like you deserve more for yourself.</p>
				<p>Basically, you're tired of where you're at now and you know you want to be at a different phase with your body.</p>
				<p>That is where the <strong>ketogenic diet</strong> comes into play.</p>
				<p>Now, if you don't know about keto then I can understand that the word <em>diet</em> is a pretty shitty term. It usually means eating things that you aren't happy about.</p>
				<p>The Keto Bootstrap Team is here to help you navigate the Ketogenic Diet. You can do it the easy way, you can do it the hard way, or you can <strong>do it YOUR way</strong>.</p>
			</div>
			<div class="col-12 col-lg-4">
				<h6>Recently Added Recipes</h6>
				<ul class="list-no-style">
					@foreach($recipes as $recipe)
						<li><a href="/recipe/{{ $recipe->slug }}">{{ $recipe->name }}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection