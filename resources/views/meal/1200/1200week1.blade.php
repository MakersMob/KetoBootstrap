@extends('layouts.app', ['title' => 'Meal Plan: 1200-1300 Calories Week 1'])

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>1200 - 1300 Calories: Week 1</h1>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8">
				<h2>Day 1</h2>
				<ul>
					<li>Breakfast: <a href="/recipe/cinnamon-roll-waffle">Cinnamon Roll Waffle</a></li>
					<li>Lunch: <a href="/recipe/zucchini-poppers">Zucchini Poppers</a></li>
					<li>Dinner: <a href="/recipe/one-pot-shrimp-alfredo">One Pot Shrimp Alfredo</a></li>
					<li>Snack: <a href="/recipe/chocolate-chip-cookie-cheesecake-bars">Chocolate Chip Cookie Cheesecake Bars</a></li>
				</ul>
				<h2>Day 2</h2>
				<ul>
					<li>Breakfast: <a href="/recipe/breakfast-quiche">Breakfast Quiche</a></li>
					<li>Lunch: <a href="/recipe/avocado-taco-boats">Avocado Taco Boats</a></li>
					<li>Dinner: <a href="/recipe/southwestern-shepherd-pie">Southwest Sheppard's Pie</a></li>
				</ul>
				<h2>Day 3</h2>
				<ul>
					<li>Breakfast: <a href="/recipe/cream-cheese-scrambled-eggs">Cream Cheese Scrambled Egg (eat both servings)</a></li>
					<li>Lunch: <a href="/recipe/zucchini-poppers">Zucchini Poppers</a> (Eat 2)</li>
					<li>Dinner: <a href="/recipe/one-pot-shrimp-alfredo">One Pot Shrimp Alfredo</a></li>
					<li>Snack or Dessert: <a href="/recipe/chocolate-chip-cookie-cheesecake-bars">Chocolate Chip Cookie Cheesecake Bars</a></li>
				</ul>
				<h2>Day 4</h2>
				<ul>
					<li>Breakfast: <a href="/recipe/breakfast-quiche">Breakfast Quiche</a></li>
					<li>Lunch: <a href="/recipe/avocado-taco-boats">Avocado Taco Boats</a></li>
					<li>Dinner: <a href="/recipe/southwestern-shepherd-pie">Southwest Sheppard's Pie</a></li>
				</ul>
				<h2>Day 5</h2>
				<ul>
					<li>Breakfast: <a href="/recipe/cream-cheese-scrambled-eggs">Cream Cheese Scrambled Egg (eat both servings)</a></li>
					<li>Lunch: <a href="/recipe/portobello-pizza">Portobello Pizza</a></li>
					<li>Dinner: <a href="/recipe/italian-sausage-pepperjack-meatballs">Italian Sausage &amp; Pepperjack Meatballs</a>, <a href="/recipe/loaded-cauliflower-mashed-potatoes">Loaded Cauliflower Mashed Potatoes</a></li>
					<li>Snack or Dessert: <a href="/recipe/microwave-brownies">Microwave Brownies</a></li>
				</ul>
				<h2>Day 6</h2>
				<ul>
					<li>Breakfast: <a href="/recipe/breakfast-quiche">Breakfast Quiche</a></li>
					<li>Lunch: <a href="/recipe/zucchini-poppers">Zucchini Poppers</a></li>
					<li>Dinner: <a href="/recipe/southwestern-shepherd-pie">Southwest Sheppard's Pie</a></li>
					<li>Snack or Dessert: <a href="/recipe/chocolate-chip-cookie-cheesecake-bars">Chocolate Chip Cookie Cheesecake Bars</a></li>
				</ul>
				<h2>Day 7</h2>
				<ul>
					<li>Breakfast: <a href="/recipe/cream-cheese-scrambled-eggs">Cream Cheese Scrambled Egg (eat both servings)</a></li>
					<li>Lunch: <a href="/recipe/portobello-pizza">Portobello Pizza</a></li>
					<li>Dinner: <a href="/recipe/italian-sausage-pepperjack-meatballs">Italian Sausage &amp; Pepperjack Meatballs</a>, <a href="/recipe/loaded-cauliflower-mashed-potatoes">Loaded Cauliflower Mashed Potatoes</a></li>
					<li>Snack or Dessert: <a href="/recipe/microwave-brownies">Microwave Brownies</a></li>
				</ul>
			</div>
			<div class="col-12 col-lg-4">
				<ul>
					<li><a href="/plans/1200/week1">Week 1</a></li>
					<li><a href="/plans/1200/week2">Week 2</a></li>
					<li><a href="/plans/1200/week3">Week 3</a></li>
					<li><a href="/plans/1200/week4">Week 4</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection