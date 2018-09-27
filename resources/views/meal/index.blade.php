@extends('layouts.app', ['title' => 'Sample Meal Plan'])

@section('content')
<section class="welcome food2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Keto Dash Sample Meal Plans</span></h1>
			</div>
		</div>
	</div>
</section>
<section class="content smoke">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8">
				<div class="card">
					<div class="card-body">
						<p>It can be pretty easy to fall off the Keto wagon if you don't plan your meals.</p>
						<p>But getting started planning your meals can be kind of tough if you've never done it before.</p>
						<p>This is why we're here to help with some sample meal plans.</p>
						<p>It's important to note that these meals plans are made specifically for people within a specific macro range.</p>
						<p>That doesn't mean you can't make adjustments to these meals.</p>
						<p>The idea is to merely show you how you can construct a weekly meal plan using just a couple of different recipes.</p>
						<!--<ul>
							<li><a href="/meal/plan1">Meal Plan #1</a></li>
							<li><a href="/meal/plan2">Meal Plan #2</a></li>
						</ul>-->
						<h3>Calorie-Specific Plans</h3>
						<p>We've also taken the time to put together 28-day meal plans for some specific calorie ranges:</p>
						<ul>
							<li><a href="/plans/1150/week1">1150 - 1250 Calories</a></li>
							<li><a href="/plans/1250/week1">1250 - 1350 Calories</a></li>
							<li><a href="/plans/1350/week1">1350 - 1450 Calories</a></li>
							<li><a href="/plans/1500/week1">1500 - 1600 Calories</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection