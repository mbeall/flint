<?php
/**
 * Template Name: Clear
 *
 * @package Flint
 * @since 1.1.0
 */

get_header( 'head' );

$options = flint_options();
if ( 'navbar' === $options['clear_nav'] ) {
  get_header( 'nav' );
}
?>

  <div id="primary" class="content-area container">
    <div class="row">
      <div id="content" class="site-content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php flint_breadcrumbs( 'clear' ); ?>

          <?php get_template_part( 'templates/' . flint_post_width(), 'content' ); ?>

          <?php if ( comments_open() || '0' != get_comments_number() ) { comments_template(); } ?>

        <?php endwhile; ?>

      </div><!-- #content -->
    </div><!-- .row -->
  </div><!-- #primary -->
</div><!-- #page -->

<?php get_footer( 'close' ); ?>
