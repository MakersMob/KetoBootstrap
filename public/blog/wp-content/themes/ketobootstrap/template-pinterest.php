<?php
/*
Template Name: Pinterest Gallery
*/
?>

<?php get_header(); ?>
<header class="welcome food">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<h1 class="billboard linewrap"><span>Showing you how to connect the dots of the Keto Diet so you can thrive.</span></h1>
			</div>
		</div>
	</div>
</header>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="article">
	<div class="container">
	<div class="row">
			<?php 
			// the query
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'orderby' => 'date', 'order' => 'DESC')); ?>

			<?php if ( $wpb_all_query->have_posts() ) : ?>

				<!-- the loop -->
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					<?php 
						$pinterest = get_field('pinterest');
						$pinterest2 = get_field('pinterest_2');
						$pinterest3 = get_field('pinterest_3');
						$pinterest4 = get_field('pinterest_4');
						$pinterest5 = get_field('pinterest_5');
						$pinterest6 = get_field('pinterest_6');
						$pinterest_description = get_field('pinterest_description');
						$pinterest_description2 = get_field('pinterest_description_2');
						$pinterest_description3 = get_field('pinterest_description_3');
						$pinterest_description4 = get_field('pinterest_description_4');
						$pinterest_description5 = get_field('pinterest_description_5');
						$pinterest_description6 = get_field('pinterest_description_6');
					?>
					<?php if(! empty($pinterest)) { ?>
						<div class="col-12 col-lg-2" style="margin-bottom: 1rem;"><a href="<?php the_permalink(); ?>"><img style="max-width: 100%" alt="<?php the_title();?>" src="<?php echo $pinterest;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>"></a></div>
					<?php } ?>
					<?php if(! empty($pinterest2)) { ?>
						<div class="col-12 col-lg-2" style="margin-bottom: 1rem;"><a href="<?php the_permalink(); ?>"><img style="max-width: 100%" alt="<?php the_title();?>" src="<?php echo $pinterest2;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description2; ?>"></a></div>
					<?php } ?>
					<?php if(! empty($pinterest3)) { ?>
						<div class="col-12 col-lg-2" style="margin-bottom: 1rem;"><a href="<?php the_permalink(); ?>"><img style="max-width: 100%" alt="<?php the_title();?>" src="<?php echo $pinterest3;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description3; ?>"></a></div>
					<?php } ?>
					<?php if(! empty($pinterest4)) { ?>
						<div class="col-12 col-lg-2" style="margin-bottom: 1rem;"><a href="<?php the_permalink(); ?>"><img style="max-width: 100%" alt="<?php the_title();?>" src="<?php echo $pinterest4;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description4; ?>"></a></div>
					<?php } ?>
					<?php if(! empty($pinterest5)) { ?>
						<div class="col-12 col-lg-2" style="margin-bottom: 1rem;"><a href="<?php the_permalink(); ?>"><img style="max-width: 100%" alt="<?php the_title();?>" src="<?php echo $pinterest5;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description5; ?>"></a></div>
					<?php } ?>
					<?php if(! empty($pinterest6)) { ?>
						<div class="col-12 col-lg-2" style="margin-bottom: 1rem;"><a href="<?php the_permalink(); ?>"><img style="max-width: 100%" alt="<?php the_title();?>" src="<?php echo $pinterest6;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description6; ?>"></a></div>
					<?php } ?>
				<?php endwhile; ?>
				<!-- end of the loop -->


				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>