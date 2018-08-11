@extends('layouts.app', ['title' => 'Welcome to the Keto Bootstrap Workout Challenge'])

@section('content')
<section class="welcome bootcamp">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="linewrap"><span>Welcome to the 28-Day Workout Challenge</span></h1>
				<h2 class="linewrap"><span>Push Yourself Even Further</span></h2>
			</div>
		</div>
	</div>
</section>
<section class="content smoke">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8 post">
				<p>Want to start working out but don't want to hit the gym?</p>
				<p>Our 28-Day Workout Challenge provides you with 28 days of exercises that you can do at home.</p>
				<p><strong>What is the 28-Day Workout Challenge?</strong></p>
				<p>It's simply 28 days of workouts that hit your inbox every morning.</p>
				<p>Because you are an awesome Keto Dash member it's free for you.</p>
				<p>Each email tells you the exact workout that you need to do along with providing you with links to each exercise so you can see a video of it before you try it out.</p>
				<form action="https://www.getdrip.com/forms/356784639/submissions" method="post" data-drip-embedded-form="356784639">
				    <div>
				        <input type="hidden" id="drip-email" name="fields[email]" value="{{ Auth::user()->email }}" />
				    </div>
				  <div>
				    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Start the Challenge" />
				  </div>
				</form>
			</div>
			<div class="col-12 col-lg-4">
				<div class="card">
					<div class="card-body">
						<p><strong>Warning:</strong> We suggest you finish the 28-Day Weight Loss Challenge before moving on with this 28-Day Workout Challenge.</p>
						<p>The reason why is because you are going to make a huge lifestyle change with the ketogenic diet and adding a workout plan on top of that can be overwhelming.</p>
						<p>While exercise can help to get you in ketosis quicker and speed up the fat burning process, it can also be a detriment if you aren't prepared.</p>
						<p>The macro requirements for people that exercise versus those that don't are different.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection