<?php
/**
 * The template for displaying 404 page (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Classic_Theme_Starter
 */

get_header();
?>

<section class="error-404 not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Not found', 'wp-classic-theme-starter' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'wp-classic-theme-starter' ); ?></p>
	</div><!-- .page-content -->
</section><!-- .error-404 -->

<?php
get_footer();
