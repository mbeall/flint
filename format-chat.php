<?php
/**
 * @package Flint
 * @since 1.1.0
 */
?>

  <div class="row">
    <div class="col-lg-2 col-md-2 col-sm-2">
      <?php if (is_singular()) { flint_post_thumbnail(); } else { flint_post_thumbnail( 'post', 'archive' ); } ?>
    </div>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8 col-sm-8'); ?>>
      <header class="entry-header">
        <h1 class="entry-title"><?php if (is_single()) { echo the_title(); } else { $permalink = get_permalink(); $title = get_the_title(); echo '<a href="' . $permalink .'" rel="bookmark">' . $title . '</a>'; } ?></h1>
        
        <?php if ( 'post' == get_post_type() ) : ?>
          <div class="entry-meta">
            <?php do_action('flint_entry_meta_above_post'); ?>
          </div><!-- .entry-meta -->
        <?php endif; ?>
      </header><!-- .entry-header -->
      
      <?php if ( is_search() ) : ?>
      <div class="entry-summary">
        <div class="well"><?php the_excerpt(); ?></div>
      </div><!-- .entry-summary -->
      <?php else : ?>
      <div class="entry-content">
        <div class="well"><?php flint_the_content(); ?></div>
        <?php
        flint_link_pages( array(
          'before' => '<ul class="pagination">',
          'after'  => '</ul>',
        ) ); ?>
      </div><!-- .entry-content -->
      <?php endif; ?>
      
      <footer class="entry-meta clearfix">
        <?php do_action('flint_entry_meta_below_post'); ?>
      </footer><!-- .entry-meta -->
    </article><!-- #post-<?php the_ID(); ?> -->
    <div class="col-lg-1 col-md-1 col-sm-1"></div>
    <?php if ( current_user_can('edit_posts') ) { ?><a class="btn btn-default btn-sm col-lg-1 col-md-1 col-sm-1" href="<?php echo get_edit_post_link(); ?>">Edit</a><?php } ?>
  </div><!-- .row -->
