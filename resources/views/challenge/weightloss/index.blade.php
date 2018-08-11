@extends('layouts.app')

@section('content')
<section class="welcome weightloss">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>The 28-Day Weight Loss Challenge</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="content smoke">
	<div class="container">
		<div class="row" data-equalizer>
			<div class="col-12 col-lg-8 post" data-equalizer-watch>
				<iframe src="//giphy.com/embed/6Z3D5t31ZdoNW" width="480" height="272" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
				<br>
				<p>You've read the stuff in the <a href="/article">Guide</a> and are ready to go!</p>
				<p>If you look over to the right ---></p>
				<p>You will see a form for your daily journal. You can choose to write in this or not, but it's good to see what you are experiencing each day in this journey.</p>
				<p>These journal updates are for your eyes only and allow you to keep a nice record of the progress that you've made.</p>
				<p>Tomorrow, you will start the 28-Day Challenge for the first time.</p>
				<p>First time?</p>
				<p>Yep, you can take this challenge as many times as you want. Each time you take it something new is thrown your way to try to push you to a higher level.</p>
				<p>This first run through is going to be the basic level so you should fly through it.</p>
			</div>
			<div class="col-12 col-lg-4">
				<div class="sidebar" data-equalizer-watch>
					<h3>Your Daily Journal</h3>
					@include('partials.journal')
				</div>
			</div>
		</div>
	</div>
</section>
@endsection