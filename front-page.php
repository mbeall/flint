<?php
/**
 * The template for displaying the front page
 *
 * Template file used to render the Site Front Page,
 * whether the front page displays the Blog Posts Index
 * or a static page.
 *
 * @package Flint
 * @since 1.2.0
 *
 */

get_header(); ?>
<?php flint_get_widgets('header'); ?>

  <div id="primary" class="content-area container">

    <div class="row">

      <?php
        flint_get_widgets('left');

        $content_class = 'site-content';
        if ( is_active_sidebar( 'left' ) | is_active_sidebar( 'right' ) ) {
          if ( is_active_sidebar( 'left' ) && is_active_sidebar( 'right' ) ) {
            $content_class .= ' col-xs-12 col-md-6 wa-both';
          }
          else {
            if ( is_active_sidebar( 'left' ) ) {
              $content_class .= ' col-xs-12 col-md-9 wa-left';
            }
            elseif ( is_active_sidebar( 'right' ) ) {
              $content_class .= ' col-xs-12 col-md-9 wa-right';
            }
          }
        }
        else {
          $content_class .= ' col-xs-12';
        }
      ?>

      <div id="content" class="<?php echo $content_class; ?>" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

        <?php
          $type = get_post_type();
          if ($type == 'post') :
            get_template_part( 'format', get_post_format() );
          else :
            get_template_part( 'type', $type );
          endif;
        ?>

        <?php endwhile; ?>

        <?php flint_content_nav( 'nav-below' ); ?>

      </div><!-- #content .site-content -->

      <?php flint_get_widgets('right'); ?>

    </div><!-- .row -->

  </div><!-- #primary .content-area -->

<?php flint_get_widgets('footer'); ?>
<?php get_footer(); ?>
