<?php
/**
 * The template for displaying Archive pages
 *
 * @package Flint
 * @since 1.1.0
 */

get_header(); ?>

  <section id="primary" class="content-area container">
    <div id="content" class="site-content" role="main">

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <h1 class="page-title">
          <?php
            if ( is_category() ) :
              printf( __( '%s', 'flint' ), '<span>' . single_cat_title( '', false ) . '</span>' );

            elseif ( is_tag() ) :
              printf( __( '%s', 'flint' ), '<span>' . single_tag_title( '', false ) . '</span>' );

            elseif ( is_author() ) :
              the_post();
              printf( __( '%s', 'flint' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
              rewind_posts();

            elseif ( is_day() ) :
              printf( __( '%s', 'flint' ), '<span>' . get_the_date() . '</span>' );

            elseif ( is_month() ) :
              printf( __( '%s', 'flint' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

            elseif ( is_year() ) :
              printf( __( '%s', 'flint' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

            elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
              _e( 'Asides', 'flint' );

            elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
              _e( 'Images', 'flint');

            elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
              _e( 'Videos', 'flint' );

            elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
              _e( 'Quotes', 'flint' );

            elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
              _e( 'Links', 'flint' );

            else :
              _e( 'Archives', 'flint' );

            endif;
          ?>
        </h1>
        <?php
          if ( is_category() ) :
            $category_description = category_description();
            if ( ! empty( $category_description ) ) :
              echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );
            endif;

          elseif ( is_tag() ) :
            $tag_description = tag_description();
            if ( ! empty( $tag_description ) ) :
              echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
            endif;

          endif;
        ?>
      </header><!-- .page-header -->

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'format', get_post_format() ); ?>

      <?php endwhile; ?>

      <?php flint_content_nav( 'nav-below' ); ?>

    <?php else : ?>

      <?php get_template_part( 'no-results', 'archive' ); ?>

    <?php endif; ?>

    </div><!-- #content -->
  </section><!-- #primary -->

<?php flint_get_widgets('footer'); ?>
<?php get_footer(); ?>
