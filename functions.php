<?php
/**
 * WP_Classic_Theme_Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Classic_Theme_Starter
 */

if ( ! defined( 'WP_CLASSIC_THEME_STARTER_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'WP_CLASSIC_THEME_STARTER_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_classic_theme_starter_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on WP_Classic_Theme_Starter, use a find and replace
		* to change 'wp-classic-theme-starter' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wp-classic-theme-starter', get_template_directory() . '/languages' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'wp-classic-theme-starter' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action( 'after_setup_theme', 'wp_classic_theme_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_classic_theme_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_classic_theme_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_classic_theme_starter_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function wp_classic_theme_starter_scripts() {
	wp_enqueue_style( 'wp-classic-theme-starter-style', get_stylesheet_uri(), array(), WP_CLASSIC_THEME_STARTER_VERSION );
	wp_style_add_data( 'wp-classic-theme-starter-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_classic_theme_starter_scripts' );

/**
 * Disable attachment pages.
 * References:
 *   - https://library.wpcode.com/snippet/do1grpoe
 *   - https://www.wpbeginner.com/wp-tutorials/how-to-disable-image-attachment-pages-in-wordpress
 */
add_action(
	'template_redirect',
	function () {
		global $post;
		if ( ! is_attachment() || ! isset( $post->post_parent ) || ! is_numeric( $post->post_parent ) ) {
			return;
		}

		// Does the attachment have a parent post?
		// If the post is trashed, fallback to redirect to homepage.
		if ( 0 !== $post->post_parent && 'trash' !== get_post_status( $post->post_parent ) ) {
			// Redirect to the attachment parent.
			wp_safe_redirect( get_permalink( $post->post_parent ), 301 );
		} else {
			// For attachment without a parent redirect to homepage.
			wp_safe_redirect( get_bloginfo( 'wpurl' ), 302 );
		}
		exit;
	},
	1
);


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
