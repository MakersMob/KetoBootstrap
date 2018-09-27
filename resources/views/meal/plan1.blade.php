@extends('layouts.app', ['title' => 'Sample Meal Plan'])

@section('content')
<section class="welcome food">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Sample Weekly Meal Plan #1</h1>
				<h2 class="subheader">Daily Macros: Fats 113g - Protein 68g - Carbs 17g</h2>
			</div>
		</div>
	</div>
</section>
<section class="content smoke">
	<div class="container">
		<div class="row">
			<table class="table">
				<thead>
					<tr class="header">
						<th>&nbsp;</th>
						<th>Breakfast</th>
						<th>Lunch</th>
						<th>Dinner</th>
						<th>Snack</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Day 1</td>
						<td><a href="#" data-target="#baconCheddar" data-toggle="modal">Bacon Cheddar Chive Omelette</a></td>
						<td><a href="#" data-target="#blackPepper" data-toggle="modal">Black Pepper Shrimp Stir Fry</a></td>
						<td><a href="#" data-target="#panPizza" data-toggle="modal">Personal Pan Pizza Dip</a></td>
						<td><a href="#" data-target="#baconJalapeno" data-toggle="modal">Bacon Jalapeño Poppers</a></td>
					</tr>
					<tr class="smoke">
						<td>Per Serving</td>
						<td>
							<ul>
								<li>463 Calories</li>
								<li>39g Fats</li>
								<li>24g Protein</li>
								<li>1g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>241 Calories</li>
								<li>15.83g Fats</li>
								<li>9.75g Protein</li>
								<li>0.44g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>414 Calories</li>
								<li>37.8g Fats</li>
								<li>15g Protein</li>
								<li>4.5g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>56.9 Calories</li>
								<li>4.6g Fats</li>
								<li>3.5g Protein</li>
								<li>0.6g Net Carbs</li>
							</ul>
						</td>
					</tr>
					<tr class="total">
						<td>Total</td>
						<td colspan="4">111.03g Fats | 62.75g Protein | 8.34g Net Carbs</td>
					</tr>
					<tr>
						<td>Day 2</td>
						<td><a href="#" data-target="#frenchToast" data-toggle="modal">French Toast Muffins</a></td>
						<td><a href="#" data-target="#avocadoTuna" data-toggle="modal">Avocado Tuna Bowl</a> </td>
						<td><a href="#" data-target="#chickenCordon" data-toggle="modal">Oven Baked Chicken Cordon Bleu</a></td>
						<td><a href="#" data-target="#chocolateCake" data-toggle="modal">Chocolate Cake with Whipped Cream</a></td>
					</tr>
					<tr class="smoke">
						<td>Per Serving</td>
						<td>
							<ul>
								<li>171 Calories</li>
								<li>16.3g Fats</li>
								<li>6.9g Protein</li>
								<li>2g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>268.1 Calories</li>
								<li>24.6g Fats</li>
								<li>21.4g Protein</li>
								<li>3.5g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>419 Calories</li>
								<li>28.8g Fats</li>
								<li>37.3g Protein</li>
								<li>1.8g Net Carbs</li>
							</ul>
						</td>
						<td>
							Chocolate Cake
							<ul>
								<li>197 Calories</li>
								<li>19g Fats</li>
								<li>6g Protein</li>
								<li>2.6g Net Carbs</li>
							</ul>
							<hr>
							Whipped Cream
							<ul>
								<li>234 Calories</li>
								<li>22g Fats</li>
								<li>0g Protein</li>
								<li>2.1g Net Carbs</li>
							</ul>
						</td>
					</tr>
					<tr class="total">
						<td>Total</td>
						<td colspan="4">110.7g Fats | 66g Protein | 11g Net Carbs</td>
					</tr>
					<tr>
						<td>Day 3</td>
						<td><a href="#" data-target="#spinachOnion" data-toggle="modal">Spinach, Onion, and Goat Cheese Omellette</a></td>
						<td><a href="#" data-target="#blackPepper" data-toggle="modal">Black Pepper Shrimp Stir Fry</a></td>
						<td><a href="#" data-target="#lemonThyme" data-toggle="modal">Lemon and Thyme Butter Salmon</a></td>
						<td><a href="#" data-target="#baconJalapeno" data-toggle="modal">Bacon Jalapeño Poppers (Enjoy 4)</a></td>
					</tr>
					<tr class="smoke">
						<td>Per Serving</td>
						<td>
							<ul>
								<li>620 Calories</li>
								<li>56g Fats</li>
								<li>25g Protein</li>
								<li>5.5g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>241 Calories</li>
								<li>15.83g Fats</li>
								<li>9.75g Protein</li>
								<li>0.44g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>266 Calories</li>
								<li>19g Fats</li>
								<li>22g Protein</li>
								<li>0.1g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>56.9 Calories</li>
								<li>4.6g Fats</li>
								<li>3.5g Protein</li>
								<li>0.6g Net Carbs</li>
							</ul>
						</td>
					</tr>
					<tr class="total">
						<td>Total</td>
						<td colspan="4">90.83g Fats | 31.75g Protein | 6.04g Net Carbs</td>
					</tr>
					<tr>
						<td>Day 4</td>
						<td><a href="#" data-target="#frenchToast" data-toggle="modal">French Toast Muffins</a></td>
						<td><a href="#" data-target="#avocadoTuna" data-toggle="modal">Avocado Tuna Bowl</a></td>
						<td><a href="#" data-target="#chickenCordon" data-toggle="modal">Oven Baked Chicken Cordon Bleu</a></td>
						<td><a href="#" data-target="#chocolateCake" data-toggle="modal">Chocolate Cake with Whipped Cream</a></td>
					</tr>
					<tr class="smoke">
						<td>Per Serving</td>
						<td>
							<ul>
								<li>171 Calories</li>
								<li>16.3g Fats</li>
								<li>6.9g Protein</li>
								<li>2g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>268.1 Calories</li>
								<li>24.6g Fats</li>
								<li>21.4g Protein</li>
								<li>3.5g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>419 Calories</li>
								<li>28.8g Fats</li>
								<li>37.3g Protein</li>
								<li>1.8g Net Carbs</li>
							</ul>
						</td>
						<td>
							Chocolate Cake
							<ul>
								<li>197 Calories</li>
								<li>19g Fats</li>
								<li>6g Protein</li>
								<li>2.6g Net Carbs</li>
							</ul>
							<hr>
							Whipped Cream
							<ul>
								<li>234 Calories</li>
								<li>22g Fats</li>
								<li>0g Protein</li>
								<li>2.1g Net Carbs</li>
							</ul>
						</td>
					</tr>
					<tr class="total">
						<td>Total</td>
						<td colspan="4">110.7g Fats | 66g Protein | 11g Net Carbs</td>
					</tr>
					<tr>
						<td>Day 5</td>
						<td><a href="#" data-target="#spinachOnion" data-toggle="modal">Spinach, Onion, and Goat Cheese Omellette</a></td>
						<td><a href="#" data-target="#caprese" data-toggle="modal">Simple and Delicious Caprese Salad</a></td>
						<td><a href="#" data-target="#lemonThyme" data-toggle="modal">Lemon and Thyme Butter Salmon</a></td>
						<td>-</td>
					</tr>
					<tr class="smoke">
						<td>Per Serving</td>
						<td>
							<ul>
								<li>620 Calories</li>
								<li>56g Fats</li>
								<li>6.9g Protein</li>
								<li>5.5g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>405 Calories</li>
								<li>36g Fats</li>
								<li>15.5g Protein</li>
								<li>4.5g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>266 Calories</li>
								<li>19g Fats</li>
								<li>22g Protein</li>
								<li>0.1g Net Carbs</li>
							</ul>
						</td>
						<td>
							-
						</td>
					</tr>
					<tr class="total">
						<td>Total</td>
						<td colspan="4">111g Fats | 62.5g Protein | 10.1g Net Carbs</td>
					</tr>
					<tr>
						<td>Day 6</td>
						<td><a href="#" data-target="#frenchToast" data-toggle="modal">French Toast Muffins</a></td>
						<td><a href="#" data-target="#baconJalapeno" data-toggle="modal">Bacon Jalapeño Poppers (Enjoy 4)</a></td>
						<td><a href="#" data-target="#chickenCordon" data-toggle="modal">Oven Baked Chicken Cordon Bleu</a></td>
						<td><a href="#" data-target="#maplePecan" data-toggle="modal">Maple Pecan Mug Cake</a></td>
					</tr>
					<tr class="smoke">
						<td>Per Serving</td>
						<td>
							<ul>
								<li>171 Calories</li>
								<li>16.3g Fats</li>
								<li>6.9g Protein</li>
								<li>2g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>56.9 Calories</li>
								<li>4.6g Fats</li>
								<li>3.5g Protein</li>
								<li>0.6g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>419 Calories</li>
								<li>28.8g Fats</li>
								<li>37.3g Protein</li>
								<li>1.8g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>433 Calories</li>
								<li>44g Fats</li>
								<li>10g Protein</li>
								<li>3.2g Net Carbs</li>
							</ul>
						</td>
					</tr>
					<tr class="total">
						<td>Total</td>
						<td colspan="4">107.5g Fats | 68.2g Protein | 9.4g Net Carbs</td>
					</tr>
					<tr>
						<td>Day 7</td>
						<td><a href="#" data-target="#baconCheddar" data-toggle="modal">Bacon Cheddar Chive Omelette</a></td>
						<td><a href="#" data-target="#caprese" data-toggle="modal">Simple and Delicious Caprese Salad</a></td>
						<td><a href="#" data-target="#panPizza" data-toggle="modal">Personal Pan Pizza Dip</a></td>
						<td>-</td>
					</tr>
					<tr class="smoke">
						<td>Per Serving</td>
						<td>
							<ul>
								<li>463 Calories</li>
								<li>39g Fats</li>
								<li>24g Protein</li>
								<li>1g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>405 Calories</li>
								<li>36g Fats</li>
								<li>15.5g Protein</li>
								<li>4.5g Net Carbs</li>
							</ul>
						</td>
						<td>
							<ul>
								<li>414 Calories</li>
								<li>37.8g Fats</li>
								<li>15g Protein</li>
								<li>4.5g Net Carbs</li>
							</ul>
						</td>
						<td>
							-
						</td>
					</tr>
					<tr class="total">
						<td>Total</td>
						<td colspan="4">112.8g Fats | 54.5g Protein | 10g Net Carbs</td>
					</tr>
				</tbody>
			</table>		
		</div>
	</div>
</section>
<div class="modal fade" id="baconCheddar" role="dialog" aria-labeledby="baconCheddar">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="baconCheddarLabel">Bacon Cheddar Chive Omelette</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4>Ingredients</h4>
				<ul>
					<li>2 slices of bacon, already cooked</li>
					<li>1 tsp. bacon fat</li>
					<li>2 large eggs</li>
					<li>1 oz. cheddar cheese</li>
					<li>2 stalks of chives</li>
					<li>salt and pepper to taste</li>
				</ul>
				<h4>Direction</h4>
				<ol>
					<li>Make sure all ingredients are prepped. Heat a pan on medium-low with bacon fat in. Add the eggs, and season with chives, salt, and pepper.</li>
					<li>Once the edges are starting to set, add your bacon to the center and let cook for 20-30 seconds. Turn off the stove.</li>
					<li>Add the cheese on top of the bacon, and fold edges on top of the cheese like a burrito - holding the edges in place to use the cheese as a "glue".</li>
					<li>Flip over and warm through on the other side.</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="spinachOnion" role="dialog" aria-labeledby="spinachOnion">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="baconCheddarLabel">Spinach, Onion, and Goat Cheese Omelette</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4>Ingredients</h4>
				<ul>
					<li>1/4 medium onion</li>
					<li> tbsp butter</li>
					<li>1 large handful of spinach</li>
					<li>3 large eggs</li>
					<li>2 tbsp heavy cream</li>
					<li>1 oz goat cheese</li>
					<li>1 medium spring onion (garnish)</li>
					<li>Salt and pepper to taste</li>
				</ul>
				<h4>Direction</h4>
				<ol>
					<li>Slice onion into long strips. Saute in butter until caramelized. Add spinach to pan and allow to wilt.</li>
					<li>Remove vegetables from the pan. Mix 3 large eggs, cream, and salt and pepper together in a container.</li>
					<li>Pour egg mixture into the pan and allow to cook over medium-low heat.</li>
					<li>Once edges of omelette begin to set, spoon spinach and onions over 1/2 of the omelette. Crumble goat cheese over the spinach.</li>
					<li>As the top of the omelette begins to set, fold over the omelette and serve! Garnish with spring onions if you'd like.</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="frenchToast" role="dialog" aria-labeledby="frenchToast">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="baconCheddarLabel">French Toast Muffins</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4>Ingredients</h4>
				<ul>
					<li>6 large eggs</li>
					<li>2/3 cup Honeyville Almond Flour</li>
					<li>1/4 cup peanut butter</li>
					<li>1/4 cup heavy cream</li>
					<li>1/4 crushed toasted almonds</li>
					<li>2 tbsp coconut oil</li>
					<li>1 tbsp unsalted butter</li>
					<li>2 tbsp NOW Foods Erythritol</li>
					<li>1 tsp cinnamon</li>
					<li>1 tsp vanilla</li>
					<li>1/2 tsp salt</li>
					<li>1/4 tsp nutmeg</li>
					<li>10 drops Liquid Stevia</li>
				</ul>
				<h4>Directions</h4>
				<ol>
					<li>Preheat oven to 350F.</li>
					<li>Grind 1/4 Cup Almonds in the food processor and stick them in a pan on medium-high heat to toast. Make sure you keep an eye on them and stir as needed.</li>
					<li>Mix together your almond flour, erythritol, cinnamon, salt, and nutmeg.</li>
					<li>In a microwave safe bowl, add your coconut oil, butter and peanut butter, then microwave for 30-40 seconds to melt it.</li>
					<li>Add your peanut butter, coconut oil, butter, eggs, vanilla, stevia, and heavy cream to the almond flour and mix well.</li>
					<li>Fill cupcake tray with the batter, then top with toasted almonds.</li>
					<li>Bake for 20-25 minutes, let cool for 5 minutes, then remove from cupcake tray and let cool for an additional 10-15 minutes. Serve with whipped cream.</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="blackPepper" role="dialog" aria-labeledby="blackPepper">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="baconCheddarLabel">Black Pepper Shrimp Stir Fry</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4>Ingredients</h4>
				<ul>
					<li>2 1/2 tbsp bacon fat</li>
					<li>1/4 cup water</li>
					<li>1 cup shredded cabbage</li>
					<li>1 tsp. minced garlic</li>
					<li>8 large fresh shrimp, peeled</li>
					<li>2 tsp crushed red pepper flakes</li>
					<li>1 tbsp chopped fresh cilantro</li>
				</ul>
				<h4>Directions</h4>
				<ol>
					<li>Heat 1 tbsp. Bacon Fat in a skillet over high heat.</li>
					<li>Add cabbage and 1 tbsp. water stir-fry for 30 seconds.</li>
					<li>Remove cabbage from skillet and place on a serving platter.</li>
					<li>Heat the remaining 1 tablespoons bacon fat in the skillet over high heat.</li>
					<li>Place the garlic and shrimp in the skillet and stir until garlic is lightly browned and shrimp turns pink.</li>
					<li>Add pepper,cilantro, soy sauce and remaining water to the skillet. Stir-fry for 10 seconds.</li>
					<li>Pour the hot mixture onto the cabbage.</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="avocadoTuna" role="dialog" aria-labeledby="avocadoTuna">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="baconCheddarLabel">Avocado Tuna Bowl</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4>Ingredients</h4>
				<ul>
					<li>3 oz avocado</li>
					<li>2 oz canned tuna, drained</li>
					<li>21g diced red bell pepper</li>
					<li>21g minced jalapeño</li>
					<li>salt and pepper to taste</li>
				</ul>
				<h4>Directions</h4>
				<ol>
					<li>Dice up 3oz of  avocado and place in a bowl.</li>
					<li>Add tuna, bell pepper, jalapeno, and stir it all together until everything is well mixed.</li>
					<li>Season with salt and pepper.</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="caprese" role="dialog" aria-labeledby="caprese">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="baconCheddarLabel">Simple and Delicious Caprese Salad</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4>Ingredients</h4>
				<ul>
					<li>1 fresh tomato</li>
					<li>6 oz. fresh mozzarella cheese</li>
					<li>1/4 cup fresh basil, chopped</li>
					<li>3 tbsp olive oil</li>
					<li>Fresh cracked black pepper</li>
					<li>Kosher salt</li>
				</ul>
				<h4>Directions</h4>
				<ol>
					<li>In a food processor, pulse chopped fresh basil leaves with 2 tbsp. Olive Oil to make the Basil Paste.</li>
					<li>Slice tomato into 1/4" slices. You should be able to get at least 6 slices from the tomato.</li>
					<li>Cut Mozzarella into 1 oz. slices.</li>
					<li>Assemble caprese salad by layering tomato, mozzarella, and basil paste.</li>
					<li>Season with salt, pepper, and extra olive oil.</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="baconJalapeno" role="dialog" aria-labeledby="baconJalapeno">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="baconCheddarLabel">Bacon Jalapeño Poppers</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4>Ingredients</h4>
				<ul>
					<li>4 medium jalapeños</li>
					<li>3 oz ground beef</li>
					<li>4 slices bacon</li>
					<li>1 oz cream cheese</li>
					<li>Salt and pepper</li>
				</ul>
				<h4>Directions</h4>
				<ol>
					<li>Place ground beef in a pan on medium heat and allow it to fully cook. Season with salt and pepper and set aside to cool.</li>
					<li>Cut jalapeños in half lengthwise and remove the seeds.</li>
					<li>Spread cream cheese inside each jalapeno half. Don't overfill with cream cheese or it will be hard to fit the ground beef in!</li>
					<li>Add the ground beef on top of the cream cheese.</li>
					<li>Cut each slice of bacon in half lengthwise. Wrap the bacon around the jalapeno, being sure to trap all of the fillings in. We use 1/2 slice of bacon per popper.</li>
					<li>Place poppers on a baking rack and bake at 400 degrees for 30 minutes. If you do not have a baking rack a simple baking sheet will work. Enjoy!</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="panPizza" role="dialog" aria-labeledby="panPizza">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="baconCheddarLabel">Personal Pan Pizza Dip</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4>Ingredients</h4>
				<h5>Personal Pan Pizza Dip</h5>
				<ul>
					<li>2 oz cream cheese</li>
					<li>2 tbsp sour cream</li>
					<li>2 tbsp mayonnaise</li>
					<li>1/4 cup mozzarella cheese, shredded</li>
					<li>salt and pepper to taste</li>
					<li>1/4 cup Rao's Tomato Sauce</li>
					<li>2 tbsp parmesan cheese</li>
				</ul>
				<h5>Pepperoni, Peppers &amp; Olives</h5>
				<ul>
					<li>6 slices pepperoni, chopped</li>
					<li>1 tbsp green pepper, sliced</li>
					<li>4 pitted black olives, sliced</li>
					<li>1/2 tsp italian seasoning</li>
					<li>salt and pepper to taste</li>
				</ul>
				<h4>Directions</h4>
				<ol>
					<li>Preheat oven to 350F. Measure out the cream cheese and microwave for 20 seconds until room temperature.</li>
					<li>Mix the sour cream, mayonnaise, and mozzarella cheese into the cream cheese. Season with salt and pepper to taste.</li>
					<li>Divide the mixture between 2 ramekins, then spoon 2 tbsp. Tomato Sauce over each ramekin.</li>
					<li>Measure out 1/2 cup mozzarella cheese and 1/4 cup parmesan cheese. Sprinkle mixture over the top of the sauce evenly.</li>
					<li>Add toppings to your personal pan pizza dips.</li>
					<li>Bake for 18-20 minutes or until cheese is bubbling.</li>
					<li>Remove from oven and let cool for a moment.</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="chickenCordon" role="dialog" aria-labeledby="chickenCordon">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="baconCheddarLabel">Oven Baked Chicken Cordon Bleu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4>Ingredients</h4>
				<ul>
					<li>3 medium chicken thighs</li>
					<li>2 oz ham, sliced</li>
					<li>2 oz swiss cheese</li>
					<li>2 oz pork dust</li>
					<li>1 large egg</li>
					<li>1/2 tsp garlic powder</li>
					<li>1/2 tsp onion powder</li>
					<li>1/2 tsp dried thyme</li>
					<li>Salt and pepper to taste</li>
				</ul>
				<h4>Directions</h4>
				<ol>
					<li>Pre-heat oven to 375F.</li>
					<li>Season chicken with salt and pepper, then lay ham and swiss cheese over each chicken thigh.</li>
					<li>Roll each chicken thigh up and use toothpicks to secure it together.</li>
					<li>Create a dipping station: whisk an egg into a bowl, spread pork dust in another bowl.</li>
					<li>Dip each chicken thigh in egg, then into the pork dust to completely coat.</li>
					<li>Lay each chicken thigh on a wire rack on top of a baking sheet.</li>
					<li>Cook for 50-55 minutes, or until chicken is cooked through and pork dust is crispy.</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="lemonThyme" role="dialog" aria-labeledby="lemonThyme">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="baconCheddarLabel">Lemon and Thyme Butter Salmon</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4>Ingredients</h4>
				<ul>
					<li>2 6oz salmon filets</li>
					<li>1 tbsp olive oil</li>
					<li>2 tbsp butter</li>
					<li>1/2 tsp thyme</li>
					<li>2 tsp capers</li>
					<li>Zest 1/2 lemon</li>
					<li>2 slices lemon</li>
					<li>2 tsp Jacobsen Lemon Salt</li>
					<li>Salt and pepper to taste</li>
				</ul>
				<h4>Directions</h4>
				<ol>
					<li>Preheat oven to 275F. Place salmon fillets on a piece of foil.</li>
					<li>Rub olive oil over the fillets and season with salt, pepper, and thyme.</li>
					<li>Zest 1/4 of a lemon over each filet, then slice up butter into cubes and place over the top along with the capers.</li>
					<li>Close the foil to create a small package that completely covers the salmon. Transfer to a baking sheet and bake for 20-25 minutes.</li>
					<li>Remove from the oven, and serve with a healthy sprinkling of Jacobsen Lemon Salt over the top. Serve lemon slices on the side.</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="chocolateCake" role="dialog" aria-labeledby="chocolateCake">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="baconCheddarLabel">Chocolate Cake</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h3>Chocolate Cake</h3>
				<h4>Ingredients</h4>
				<ul>
					<li>1 large egg</li>
					<li>2 tbsp salted butter</li>
					<li>2 tbsp almond flour</li>
					<li>2 tbsp unsweetened cocoa powder</li>
					<li>1 1/2 tbsp Erythritol or Splenda</li>
					<li>2 tsp coconut flour</li>
					<li>1/4 tsp vanilla extract</li>
					<li>1/2 tsp bakin powder</li>
					<li>Salt and pepper to taste</li>
				</ul>
				<h4>Directions</h4>
				<ol>
					<li>Melt the butter in the microwave for 25 seconds.</li>
					<li>Add the rest of the ingredients and mix well.</li>
					<li>If you are making 2 servings, split the batter into 2 ramekins</li>
					<li>Microwave for 60-75 seconds.</li>
				</ol>
				<h3>Whipped Cream (Serving Size: 1/2 Cup)</h3>
				<h4>Ingredients</h4>
				<ul>
					<li>1 cup of heavy whipping cream</li>
					<li>2 tsp vanilla extract</li>
					<li>2 tbsp sweetener</li>
				</ul>
				<h4>Directions</h4>
				<ol>
					<li>Combine heavy whipping cream, vanilla extract, and sweetener</li>
					<li>Using a electric mixer, mix all ingredients until resembling a fluffy texture</li>
					<li>It can now be enjoyed or if you enjoy it chilled (as I do) pop it in the fridge for an hour or so</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="maplePecan" role="dialog" aria-labeledby="maplePecan">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="baconCheddarLabel">Maple Pecan Mug Cake</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4>Ingredients</h4>
				<ul>
					<li>1 large egg</li>
					<li>2 tbsp butter</li>
					<li>2 tbsp almond flour</li>
					<li>1 tbsp Erythritol</li>
					<li>7 drops Stevia</li>
					<li>2 tbsp crushed pecans</li>
					<li>1/2 tsp maple extract</li>
					<li>1/4 tsp cinnamon</li>
				</ul>
				<h4>Directions</h4>
				<ol>
					<li>Mix all room temperature ingredients together in a mug.</li>
					<li>Microwave on high for 55 seconds</li>
					<li>Turn cup upside down and lightly bang it against a plate.</li>
					<li>Optional: Top with homemade maple syrup and some extra pecans.</li>
				</ol>
			</div>
		</div>
	</div>
</div>
@endsection