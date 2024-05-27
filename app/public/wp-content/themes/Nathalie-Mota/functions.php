<?php

/**
 * Theme functions and definitions.
 *
 * Sets up the theme and provides some helper functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Nathali-Mota WordPress theme
 */


function theme_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');



function enqueue_my_script()
{
	wp_enqueue_script('my-first-script', get_stylesheet_directory_uri() . '/assets/scripts/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_my_script');
