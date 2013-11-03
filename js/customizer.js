/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	wp.customize( 'flint_colors[link]', function( value ) {
    value.bind( function( to ) {
      $( 'a, a:hover, a:focus' ).css( 'color', to );
    } );
  } );
	
  // Site title and description.
  wp.customize( 'blogname', function( value ) {
    value.bind( function( to ) {
      $( '.site-title a' ).text( to );
    } );
  } );
  wp.customize( 'blogdescription', function( value ) {
    value.bind( function( to ) {
      $( '.site-description' ).text( to );
    } );
  } );
  // Header text color.
  wp.customize( 'header_textcolor', function( value ) {
    value.bind( function( to ) {
      $( '.site-title a, .site-description' ).css( 'color', to );
    } );
  } );
  
  // Canvas colors
  wp.customize( 'flint_colors[canvas]', function( value ) {
    value.bind( function( to ) {
      $( '.navbar-inverse, #masthead, #colophon' ).css( 'background-color', to );
    } );
  } );
  wp.customize( 'flint_colors[canvas-text]', function( value ) {
    value.bind( function( to ) {
      $( '.navbar-inverse, #masthead, #colophon' ).css( 'color', to );
    } );
  } );
  
  // Fonts
  wp.customize( 'flint_fonts[heading-font]', function( value ) {
    value.bind( function( to ) {
      $( 'h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6' ).css( 'font-family', to );
    } );
  } );
  wp.customize( 'flint_fonts[body-font]', function( value ) {
    value.bind( function( to ) {
      $( 'body' ).css( 'font-family', to );
    } );
  } );
} )( jQuery );