<?php
/*
Template Name: Shopping List
*/

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>
<header class="entry-header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>
	</div>
</header><!-- .entry-header -->

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
				<div class="col-12 d-print-none" style="margin-bottom: 2rem;">
					<div class="callout">
						<div class="card-body">
							<p class="large text-center" style="margin-bottom: 0;">The Keto Diet does limit the foods you can eat, but "limit" doesn't mean you are left with few options. Here are all of the foods that you can safely consume while on the Keto Diet.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<h4>Cheese</h4>
					<ul>
						<li>American</li>
						<li>Bleu Cheese</li>
						<li>Cheddar</li>
						<li>Cottage Cheese</li>
						<li>Cream Cheese</li>
						<li>Feta</li>
						<li>Gouda</li>
						<li>Mozzarella</li>
						<li>Parmesan</li>
						<li>Provolone</li>
						<li>Ricotta Cheese</li>
						<li>Swiss</li>
					</ul>
					<h4>Dressings</h4>
					<ul>
						<li>Red Wine Vinegar</li>
						<li>Bleu Cheese</li>
						<li>Creamy Caesar</li>
						<li>Ranch</li>
						<li>Olive Oil</li>
					</ul>
					<h4>Fats &amp; Oils</h4>
					<ul>
						<li>Almond Butter</li>
						<li>Avocado Oil</li>
						<li>Butter</li>
						<li>Cocoa Butter</li>
						<li>Coconut Oil</li>
						<li>Fish Oil</li>
						<li>Flax Seed Oil</li>
						<li>Grape Seed Oil</li>
						<li>Hemp Seed Oil</li>
						<li>Macadamia Oil</li>
						<li>MCT Oil</li>
						<li>Full Fat Mayonnaise</li>
						<li>Olive Oil</li>
						<li>Walnut Oil</li>
					</ul>
					<h4>Seeds</h4>
					<ul>
						<li>Chia</li>
						<li>Flax</li>
						<li>Hemp</li>
						<li>Pumpkin</li>
						<li>Safflower</li>
						<li>Sesame</li>
						<li>Sunflower</li>
					</ul>
					<h4>Nuts &amp; Legumes</h4>
					<ul>
						<li>Almonds</li>
						<li>Brazil Nuts</li>
						<li>Coconut</li>
						<li>Hazelnuts</li>
						<li>Macadamias</li>
						<li>Pecans</li>
						<li>Pistachios</li>
						<li>Walnuts</li>
					</ul>
				</div>
				<div class="col-12 col-lg-4">
					<h4>Seafood</h4>
					<ul>
						<li>Anchovies</li>
						<li>Fresh Fish
							<ul>
								<li>Bass</li>
								<li>Carp</li>
								<li>Flounder</li>
								<li>Haddock</li>
								<li>Halibut</li>
								<li>Mackerel</li>
								<li>Salmon</li>
								<li>Sardines</li>
								<li>Sole</li>
								<li>Tilapia</li>
								<li>Trout</li>
								<li>Tuna</li>
							</ul>
						</li>
						<li>Clams</li>
						<li>Crab Meat</li>
						<li>Lobster</li>
						<li>Mussels</li>
						<li>Oysters</li>
						<li>Shrimp</li>
						<li>Squid</li>
					</ul>
					<h4>Flours, Meals, &amp; Powders</h4>
					<ul>
						<li>Acorn Flour</li>
						<li>Almond Flour</li>
						<li>Almond Meal</li>
						<li>Cocoa Powder</li>
						<li>Coconut Flour</li>
						<li>Flax Seed Meal</li>
						<li>Protein Powder</li>
						<li>Psyllium Husk</li>
						<li>Sesame Seed Flour</li>
						<li>Splenda</li>
					</ul>
					<h4>Eggs, Poultry &amp; Fowl</h4>
					<ul>
						<li>Eggs</li>
						<li>Chicken</li>
						<li>Duck</li>
						<li>Goose</li>
						<li>Quail</li>
						<li>Turkey</li>
					</ul>
					<h4>Fruits &amp; Berries</h4>
					<ul>
						<li>Avocado</li>
						<li>Blackberry</li>
						<li>Blueberry</li>
						<li>Cranberry</li>
						<li>Lemon</li>
						<li>Lime</li>
						<li>Green Olive</li>
						<li>Raspberry</li>
						<li>Strawberry</li>
						<li>Rhubarb</li>
						<li>Tomato</li>
					</ul>
				</div>
				<div class="col-12 col-lg-4">
					<h4>Dairy &amp; Dairy Substitutes</h4>
					<ul>
						<li>Almond Milk (unsweetened)</li>
						<li>Coconut Cream</li>
						<li>Coconut Milk (unsweetened)</li>
						<li>Greek Yogurt</li>
						<li>Heavy Cream</li>
						<li>Sour Cream (full fat)</li>
						<li>Soy Milk (unsweetened)</li>
						<li>Whipped Cream</li>
						<li>Grass Fed Butter</li>
					</ul>
					<h4>Meat</h4>
					<ul>
						<li>Beef
							<ul>
								<li>Tongue</li>
								<li>Ribs</li>
								<li>Roast</li>
								<li>Pastrami</li>
								<li>Sausage</li>
								<li>Corned</li>
								<li>Ground 70%-90% Lean</li>
								<li>Hot Dog / Frankfurter</li>
								<li>Steak</li>
							</ul>
						</li>
						<li>Bologna</li>
						<li>Lamb</li>
						<li>Pepperoni</li>
						<li>Pork
							<ul>
								<li>Bacon</li>
								<li>Chops</li>
								<li>Ham</li>
								<li>Liverwurst</li>
								<li>Loin</li>
								<li>Proscuitto</li>
								<li>Sausage</li>
							</ul>
						</li>
						<li>Veal</li>
						<li>Venison</li>
					</ul>
					<h4>Vegetables</h4>
					<ul>
						<li>Arugula</li>
						<li>Asparagus</li>
						<li>Bok Choy</li>
						<li>Broccoli</li>
						<li>Broccoli Rabe</li>
						<li>Cabbage</li>
						<li>Cauliflower</li>
						<li>Celery</li>
						<li>Chard</li>
						<li>Chicory Greens</li>
						<li>Cucumber</li>
						<li>Eggplant</li>
						<li>Endive</li>
						<li>Fennel</li>
						<li>Garlic</li>
						<li>Green Bean</li>
						<li>Jalapeño</li>
						<li>Lettuce (Green Leaf, Romaine)</li>
						<li>Parsley</li>
						<li>Radish</li>
						<li>Spinach</li>
						<li>Soy Bean</li>
						<li>Zucchini</li>
					</ul>
				</div>

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
