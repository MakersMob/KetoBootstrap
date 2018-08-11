@extends('layouts.app', ['title' => 'Welcome to Keto Bootcamp Day 1'])

@section('content')
<section class="welcome bootcamp">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Welcome to Bootcamp Day 1</h1>
				<h2 class="subheader">Keto Overview</h2>
				<div class="flex-video">
					<script src="https://fast.wistia.com/embed/medias/1cc7w62eps.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_1cc7w62eps videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/1cc7w62eps/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" onload="this.parentNode.style.opacity=1;" /></div></div></div></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="content smoke">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8 post">
				<!--<p>I have no doubt you are ready to get started right now. You have a goal and you don't want nothing to get in your way.</p>
				<p>Unfortunately, there is something that can get in your way and that is you.</p>
				<p>More specifically it's you having the lack of knowledge to tackle this journey the correct way.</p>
				<p>So for the next 5 days you are going to go through Prep Week.</p>
				<p>The goal isn't to slow you down but to educate you on the Ketogenic Diet and what you need to do to succeed.</p>
				<p>Every day for prep week you can log in here and receive new information that is going to help you on your journey.</p>
				<p>If you forget to log in don't worry. You'll also receive email reminders so you don't skip a beat.</p>
				<p>I am not doing this to punish you. I am doing this because I want you to succeed and I've found that most people try to dive right in and they aren't prepared which leads to frustration.</p>
				<p>They end up starting from scratch again so you might as well get things started correctly.</p>-->
				<p>The ketogenic diet is usually viewed negatively because it's seen as a low carb diet. And yes the keto diet is low carb but it is more than that. The keto diet eliminates or drastically reduces all the foods that turn into sugar in the body, which include carbs and yes protein, as well as refined and natural sugars.</p>
				<p>See when it comes to weight loss we are told to focus on calorie reduction because it all comes down to calories in vs. calories out. But our bodies are much more complex than that.</p>
				<p>As many of you probably already know from experience it’s hard to lose weight simply by restricting calories. Eating less and losing excess body fat do not necessarily go hand in hand.</p>
				<p>When you eat a low-calorie, high-carbohydrate diet believe it or not but your body becomes all out of balance, making it more difficult to access stored body fat for energy. As a result, we usually fail because we aren't seeing the progress we want, we've plateaued or we are simply tired of feeling hungry and deprived. And unfortunately what happens next, we go off our diets and all the weight comes right back. Leaving us to feel like failures but in reality we aren't failures.</p>
				<p>Weight loss is more about focusing on what to eat to fuel your body correctly. That's why I love the keto diet! I get to eat enough food to feel satisfied and still lose body fat, without killing myself in the process.</p>
				<h3>How the Keto Diet Works in the Body</h3>
				<p>Our bodies can pull its energy from two sources: sugar/glucose and fat. Too many people still believe glucose is the only source of fuel. As a result, they live in fear of trying a keto diet because the are afraid of running low on glucose. But fat is the ideal energy source for our bodies. That’s why no matter how fit we are we will always have fat on our bodies!</p>
				<p>When we switch to a keto diet our bodies will stop burning sugar and start burning fats.  As this happens our bodies will start producing ketones which is what fuels our cells. The goal of the ketogenic diet is to get the body to metabolize fat rather than sugar. Being a fat burner is called being keto-adapted, and it is the preferred metabolic state of our body. For most It usually takes two weeks on a keto diet to reach this state.</p>
				<h3>How to Become Keto-Adapted</h3>
				<p>First we must establishing a well-formulated keto diet of fats, proteins, and carbs. These are the three macronutrients that we need to be healthy inside and out. A well-formulated keto diet will distribution these three macros in order from high to low. For example here is the breakdown for people to follow:</p>
				<ul>
					<li>70-80% Fats</li>
					<li>10-20% Protein</li>
					<li>5% Carbs</li>
				</ul>
				<p>These percentages are approximate because each person is different. Exactly how much of each macros your body can consume depends on a couple different variables that's why it's so important to make sure your macros are calculated properly. However before we get into macros please understand a well-formulated keto diet focuses on three steps:</p>
				<ol>
					<li>Eliminate sugar and high carb foods.</li>
					<li>Moderation of protein. Focus on eating fatty protein rather than lean.</li>
					<li>Eat lots of HEALTHY fats.</li>
				</ol>
				<p>During this Keto Dash Boot Camp you will start to transition your body to get it ready for the 28 Day Challenge!</p>
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