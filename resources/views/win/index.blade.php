@extends('layouts.app', ['title' => 'Wins shared by the Keto Bootstrap Community'])

@section('content')
<section class="welcome">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>#wins</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8 post">
				@foreach($wins as $win)
					<div class="journal-entry">
						
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection