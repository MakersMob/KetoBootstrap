<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<header class="welcome food">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="billboard linewrap"><span>Showing you how to connect the dots of the Keto Diet so you can thrive.</span></h1>
			</div>
		</div>
	</div>
</header>
<section class="content">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
			<div class="col-12 col-lg-7">
				<h2>Welcome to Keto Bootstrap!</h2>
				<p>Our goal here at Keto Bootstrap is to take the complications out of the ketogenic diet.</p>
				<p>People like to say &ldquo;it&rsquo;s a lifestyle, not a diet&rdquo; and if that is the case then it needs to be simplified so that everyone has a greater chance of success.</p>
				<p>
					<img src="https://s3-us-west-2.amazonaws.com/dotketo-master/wp-content/uploads/2018/05/23140853/food-3214904_1920.jpg" alt="Keto meal">
				</p>
			</div>
			<div class="col-12 col-lg-5">
				<div class="callout">
					<h3>Recent Posts</h3>
					<ul class="super-list">
						<?php 
									// the query
									$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'orderby' => 'date', 'order' => 'DESC')); ?>

									<?php if ( $wpb_all_query->have_posts() ) : ?>


									<?php
									while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
									    $out .= '<li>';
									    $out .=  '<a href="'.get_permalink($cat_post->ID).'" title="'.wptexturize($cat_post->post_title).'">'.$cat_post->post_title.'</a></li>';
									    echo $out;
									endwhile;
									?>
										<?php wp_reset_postdata(); ?>

									<?php else : ?>
										<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
									<?php endif; ?>
					</ul>
				</div>
			</div>
		</div><!-- .row -->

	</div><!-- Container end -->

</section><!-- Wrapper end -->

<?php get_footer(); ?>
