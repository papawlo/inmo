<?php

/**
 * Template Name: Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header('empty');
/* Start the Loop */
while (have_posts()) :
    the_post();
    get_template_part('template-parts/content/content-home');


endwhile; // End of the loop.

get_footer();
