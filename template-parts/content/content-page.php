<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="container">
	<div class="entry-content entry-content-not-custom text-gray container max-w-5xl mx-auto m-8 px-10">
		<?php the_title(sprintf('<h1 class="entry-title text-primary mb-3 font-bold text-xl"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
