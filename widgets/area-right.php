<?php
/**
 * The widget area that appears to the right of content.
 *
 * @package Flint
 * @since 1.1.1
 */
$type = get_post_type();
?>
<?php if ( is_active_sidebar( 'left' ) | is_active_sidebar( 'right' ) ) { ?>
  <?php if ( is_active_sidebar( 'right' ) ) { ?>
    <div class="col-lg-3 col-md-3 widgets widgets-right" role="complementary">
        <div class="widget-area" >
          <?php do_action( 'before_sidebar' ); ?>
          <?php do_action( 'flint_widget_area_right_'.$type ); ?>
          <?php dynamic_sidebar('right'); ?>
        </div><!-- .widget-area -->
    </div><!-- .widgets.widgets-right -->
  <?php } ?>
  </div><!-- .row -->
<?php } ?>