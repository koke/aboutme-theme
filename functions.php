<?php

function aboutme_enqueue_scripts()
{
    wp_enqueue_script( 'jquery-cookie', get_stylesheet_directory_uri() . '/jquery.cookie.js', array( 'jquery' ) );
    wp_enqueue_script( 'aboutme', get_stylesheet_directory_uri() . '/aboutme.js', array( 'jquery', 'jquery-ui-draggable', 'jquery-ui-tabs' ) );
}

if ( current_user_can('edit-page') ) {
	add_action( 'wp_print_scripts', 'aboutme_enqueue_scripts' );
}

function aboutme_query_vars($vars)
{
	$vars[] = "aboutme_style";
	return $vars;
}
add_filter('query_vars', 'aboutme_query_vars');

function aboutme_template_redirect()
{
    if (get_query_var("aboutme_style")) {
        require 'style.php';
    }
}
add_action('template_redirect', 'aboutme_template_redirect');