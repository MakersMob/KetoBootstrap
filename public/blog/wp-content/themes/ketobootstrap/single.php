<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php 
		$pinterest = get_field('pinterest');
		$pinterest_description = get_field('pinterest_description');
		$title = get_the_title();

	?>
<section class="welcome">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_title( '<h1 class="entry-title linewrap"><span>', '</span></h1>' ); ?>

				<div class="entry-meta">

					<?php //understrap_posted_on(); ?>

				</div><!-- .entry-meta -->
			</div>
		</div>
	</div>
</section><!-- .entry-header -->
<section class="content">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class=" site-main col-md-9" id="main">

				

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

						<?php //understrap_post_nav(); ?>

				

			</main><!-- #main -->

			
		</div><!-- #primary -->
		<div class="row ">
			<div class="col-md-9">
				<h3>Enjoyed this post? You should Pin it!</h3>
				<p>Our goal is to continue to share as much valuable information on Keto so that everyone has a chance to live a more fulfilling life.</p>
				<div class="image">
					<img src="<?php echo $pinterest;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>">
				</div>
			</div>
		</div>

		<!-- Do the right sidebar check -->
		<?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</section><!-- Wrapper end -->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
