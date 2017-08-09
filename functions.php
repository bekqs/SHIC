<?php
/**
 * Bulmapress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bulmapress
 */


require get_template_directory() . '/functions/bulmapress_navwalker.php';
require get_template_directory() . '/functions/bulmapress_helpers.php';
require get_template_directory() . '/functions/bulmapress_custom_query.php';

if ( ! function_exists( 'bulmapress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bulmapress_setup() {
	require get_template_directory() . '/functions/base.php';
	require get_template_directory() . '/functions/post-thumbnails.php';
	require get_template_directory() . '/functions/navigation.php';
	require get_template_directory() . '/functions/content.php';
	require get_template_directory() . '/functions/pagination.php';
	require get_template_directory() . '/functions/widgets.php';
	require get_template_directory() . '/functions/search.php';
	require get_template_directory() . '/functions/scripts-styles.php';
}
endif;
add_action( 'after_setup_theme', 'bulmapress_setup' );

require get_template_directory() . '/functions/template-tags.php';
require get_template_directory() . '/functions/extras.php';
require get_template_directory() . '/functions/customizer.php';
require get_template_directory() . '/functions/jetpack.php';

// Register scripts
function shic_scripts() {

    wp_enqueue_style( 'blog-css', get_template_directory_uri() . '/css/blog.css', '', time() );
    wp_enqueue_style( 'shic-googlefonts', esc_url_raw( 'https://fonts.googleapis.com/css?family=Montserrat:400,500' ), array(), null );
    wp_enqueue_script( 'back-to-top', get_template_directory_uri() . '/js/back-to-top.js', array( 'jquery' ), time() );
    wp_enqueue_script( 'nav-size', get_template_directory_uri() . '/js/nav-scroll.js', array( 'jquery' ), time() );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array( 'jquery' ), time() );
}
add_action( 'wp_enqueue_scripts', 'shic_scripts' );

// Remove post scroll
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

// Continue reading
function new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more', 21 );

function the_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= ' <a href="'. get_permalink($post->ID) .'" class="button is-light">Continue reading</a>';
    return $excerpt;
}
add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );