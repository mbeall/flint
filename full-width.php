<?php
/**
 * Template Name: Full-width
 *
 * @package WordPress
 * @subpackage Flint
 */

get_header(); ?>

		<div id="primary" class="content-area full-width">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>