<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<footer>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>&copy; Makers Mob LLC. | <a href="/keto-diet">Ketogenic Diet Guide</a> | <a href="/keto-shopping-list">Keto Shopping List</a> | <a href="/blog">Keto Blog</a> | <a href="/keto-meal-plan">Keto Diet Menu</a></p>
                    </div>
                </div>
            </div>
        </footer>

<?php wp_footer(); ?>

</body>

</html>

