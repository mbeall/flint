<?php
/**
 * Template Name: Minimal
 *
 * @package Flint
 * @since 1.1.0
 */
$options = get_option( 'flint_templates' );
get_header('head');
if (empty($options['minimal_nav']) || $options['minimal_nav'] == 'navbar'){ get_header('nav'); } ?>

  <div id="primary" class="content-area container">
    <div id="content" class="site-content" role="main">
  
      <?php while ( have_posts() ) : the_post(); ?>
      
        <?php flint_breadcrumbs('minimal'); ?>
        
        <?php get_template_part( 'templates/' . flint_get_template(), 'content' ); ?>
        
        <?php if ( comments_open() || '0' != get_comments_number() ) { comments_template(); } ?>
  
      <?php endwhile; ?>
  
    </div><!-- #content -->
  </div><!-- #primary -->

<?php flint_get_widgets('footer', true); ?>
<?php get_footer('close'); ?>