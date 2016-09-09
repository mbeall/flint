<?php
/**
 * Link Post Format Template
 *
 * The template for displaying the post content for link posts
 *
 * @package Flint
 * @since 1.0.1
 */

?>

  <div class="row">
    <?php echo flint_post_margin( true ); ?>
    <article id="post-<?php the_ID(); ?>" <?php flint_post_class(); ?>>
      <div class="entry-content">
        <h3><?php flint_the_content(); ?></h3>
        <?php edit_post_link( __( 'Edit Link', 'flint' ), '', '', 0, 'btn btn-default btn-sm btn-edit hidden-xs' ); ?>
      </div><!-- .entry-content -->

      <footer class="entry-meta clearfix">
        <?php flint_posted_on(); ?>
        <span class="sep"> | </span>
        <?php do_action( 'flint_entry_meta_below_post' ); ?>
      </footer><!-- .entry-meta -->
    </article><!-- #post-<?php the_ID(); ?> -->
    <?php echo flint_post_margin(); ?>
  </div><!-- .row -->
