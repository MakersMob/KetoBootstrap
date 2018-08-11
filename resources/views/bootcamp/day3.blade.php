@extends('layouts.app', ['title' => 'Welcome to Keto Bootcamp Day 3'])

@section('content')
<section class="welcome bootcamp">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Welcome to Bootcamp Day 3</h1>
				<h2 class="subheader">Understanding Your Body</h2>
			</div>
		</div>
	</div>
</section>
<section class="content smoke">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8 post">
				<p>Life would be easier if all of our bodies reacted the exact same way but they don't.</p>
				<p>This is important to remember.</p>
				<p>Why?</p>
				<p>Because if you see someone lose 10 lbs in the first week of being on Keto and you only lose 2 lbs that doesn't mean you did worse.</p>
				<p>Even if you followed the exact same regimen as the other person.</p>
				<p>Our bodies work the same but because our chemisty is slightly different that means we end up seeing slightly different results.</p>
				<!--
				<h2>Macros</h2>
				<p>Macros are something that you are going to become very familiar with. We actually have a whole <a href="https://ketodash.com/article/macros">section on Macros in our Keto Guide</a> so make sure you take the time to read it and also understand how to calculate your own.</p>
				<p>If you're having trouble calculating your macros just shoot me an email (elisa@ketodash.com) and I can help you with your first calculations.</p>-->
				<p>During my journey there was a time frame where the scale wasn't moving and I felt frustrated. I believed I was doing everything right so I couldn’t understand why the scale wasn't moving. Luckily for me I was taking weekly measurement and when I took my measurements for that week I was surprised to find out I lost inches in my stomach and thighs!</p>
				<p>At the end of each week not only should you weigh in but you should also take measurements of your body.</p>
				<p><strong>Weighing in:</strong> Weigh yourself at the end of each week at the same time of day.</p>
				<p><strong>Measurements:</strong> When it comes to measurements I suggest taking the following:</p>
				<ul>
					<li>arms</li>
					<li>chest</li>
					<li>waist</li>
					<li>thighs</li>
					<li>calves</li>
				</ul>
				<p>You can also take these measurments when you do you weigh in.</p>
				<h3>Weight Loss Isn't the Only Goal</h3>
				<p>It's very easy to only get caught up in the weight loss aspect of keto.</p>
				<p>However, I've always found that it was the changes that I didn't see that were the most awesome.</p>
				<p>For example, as a woman I can experience mood swings. These are no fun for me or my husband.</p>
				<p>Keto has helped to regulate my hormones causing me to have less mood swings. In fact, I find myself randomly smiling for no apparent reason.</p>
				<p>In general, I feel like a happier person.</p>
			</div>
			<div class="col-12 col-lg-4">
				<div class="card">
					<div class="card-block" style="padding: 0;">
						@include('partials.bootcampnav')
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection