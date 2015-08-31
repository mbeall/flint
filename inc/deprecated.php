<?php
/**
 * Deprecated functions for backwards compatibility
 *
 * @package Flint
 * @since 1.4.0
 */

/**
 * Trigger error helper function for deprecated functions
 *
 * @param string $dep Required. The deprecated function.
 * @param string $ver Required. The version when the function was deprecated.
 * @param string $new Optional. The function to use instead.
 */
function flint_trigger_error( $dep, $ver, $new = null ) {
  if (!empty($new)) {
    trigger_error("The function $dep is deprecated as of Flint $ver. Use $new instead.");
  }
  else {
    trigger_error("The function $dep is deprecated as of Flint $ver.");
  }
}

/**
 * Gets the featured image for a post or page if not specified otherwise in theme options
 *
 * @deprecated 1.3.9 Use flint_the_post_thumbnail
 */
function flint_post_thumbnail( $type = 'post', $loc = 'single' ) {
  flint_trigger_error( 'flint_post_thumbnail', '1.3.9', 'flint_the_post_thumbnail' );
  $layout = flint_get_options();
  $posts_image = !empty($layout['posts_image']) ? $layout['posts_image'] : 'always';
  $pages_image = !empty($layout['pages_image']) ? $layout['pages_image'] : 'always';
  switch ($type) {
    case 'post':
      if ($posts_image == 'always') {if (has_post_thumbnail()) { the_post_thumbnail(); }}
      elseif ($posts_image == 'archives' && $loc == 'archive') {if (has_post_thumbnail()) { the_post_thumbnail(); }}
      break;
    case 'page':
      if ($pages_image == 'always') {if (has_post_thumbnail()) { the_post_thumbnail(); }}
      elseif ($pages_image == 'archives' && $loc == 'archive') {if (has_post_thumbnail()) { the_post_thumbnail(); }}
      break;
  }
}

/**
 * Displays the HTML content for reply to comment link.
 *
 * @deprecated 1.4.0 Use flint_comment_reply_link instead.
 *
 * @param array       $args    Optional. Override default options.
 * @param int         $comment Comment being replied to. Default current comment.
 * @param int|WP_Post $post    Post ID or WP_Post object the comment is going to be displayed on.
 *                             Default current post.
 * @return mixed Link to show comment form, if successful. False, if comments are closed.
 */
function flint_reply_link( $args = array(), $comment = null, $post = null ) {
  flint_trigger_error( 'flint_reply_link', '1.4.0', 'flint_comment_reply_link' );
  flint_get_comment_reply_link( $args, $comment, $post );
}

/**
 * Retrieve HTML content for reply to comment link.
 *
 * @deprecated 1.4.0 Use flint_get_comment_reply_link instead.
 *
 * @param array       $args
 * @param int         $comment Comment being replied to. Default current comment.
 * @param int|WP_Post $post    Post ID or WP_Post object the comment is going to be displayed on.
 *                             Default current post.
 * @return void|false|string Link to show comment form, if successful. False, if comments are closed.
 */
function get_flint_reply_link( $args = array(), $comment = null, $post = null ) {
  flint_trigger_error( 'get_flint_reply_link', '1.4.0', 'flint_get_comment_reply_link' );
  flint_get_comment_reply_link( $args, $comment, $post );
}

/**
 * Load sidebar template.
 *
 * @deprecated 1.4.0 Use flint_get_sidebar instead.
 *
 * Modeled after get_template_part and get_sidebar
 * get_sidebar doesn't make sense for all widget areas, so this replaces that function
 *
 * @param string $slug    The slug of the specialised sidebar.
 * @param bool   $minimal If true, using the Minimal page template
 */
function flint_get_widgets( $slug, $minimal = false ) {
  flint_trigger_error( 'flint_get_widgets', '1.4.0', 'flint_get_sidebar' );
  flint_get_sidebar( $slug, $minimal );
}

/**
 * Returns slug or class for .widgets.widgets-footer based on theme options
 *
 * @deprecated 1.4.0 Use flint_get_sidebar_template instead.
 */
function flint_get_widgets_template( $output, $widget_area = 'footer' ) {
  flint_trigger_error( 'flint_get_widgets_template', '1.4.0', 'flint_get_sidebar_template' );
  flint_get_sidebar( $output, $widget_area );
}

/**
 * Whether a sidebar is in use on the Minimal page template
 *
 * @deprecated 1.4.0 Use flint_is_active_sidebar instead.
 *
 * @see is_active_sidebar() for other page templates
 *
 * @param string $slug Sidebar name, id or number to check.
 *
 * @return bool true if the sidebar is in use, false otherwise.
 */
function flint_is_active_widgets( $slug ) {
  flint_trigger_error( 'flint_is_active_widgets', '1.4.0', 'flint_is_active_sidebar' );
  flint_get_sidebar( $slug );
}