<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<script
	    type="text/javascript"
	    async defer
	    src="//assets.pinterest.com/js/pinit.js"
	></script>

<div class="hfeed site" id="page">
    <section class="navigation"
	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="https://s3-us-west-2.amazonaws.com/ketodash-master/blog/wp-content/uploads/2018/08/09032004/logo-64.png" alt="Dare to Conquer"> Keto Bootstrap
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('keto-diet*')) active @endif" href="/keto-diet">Diet Guide</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('keto-shopping-list*')) active @endif" href="/keto-shopping-list">Shopping List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('keto-meal-plan*')) active @endif" href="/keto-meal-plan">7-Day Meal Plan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('recipe*')) active @endif" href="/recipes">Recipes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(Request::is('join*')) active @endif" href="/join">Join the Challenge</a>
                            </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register">Register</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

	</div><!-- #wrapper-navbar end -->
