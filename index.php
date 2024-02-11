<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Classic_Theme_Starter
 */

get_header();
?>

<?php
if ( have_posts() ) :

	if ( is_search() ) :
		?>
		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'wp-classic-theme-starter' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
		</header><!-- .page-header -->
		<?php
	endif;

	/* Start the Loop */
	while ( have_posts() ) :
	
		?>
		<ul>
		<?php

		the_post();

		/*
			* Include the Post-Type-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Type name) and that will be used instead.
			*/
		get_template_part( 'template-parts/index-content', get_post_type() );
		
		?>
		</ul>
		<?php

	endwhile;

	the_posts_navigation();

else :

	if ( is_home() && current_user_can( 'publish_posts' ) ) :
		?>
		<h1><?php esc_html_e( 'Nothing Found', 'wp-classic-theme-starter' ); ?></h1>
		<?php
		printf(
			'<p>' . wp_kses(
				/* translators: 1: link to WP admin new post page. */
				__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wp-classic-theme-starter' ),
				array(
					'a' => array(
						'href' => array(),
					),
				)
			) . '</p>',
			esc_url( admin_url( 'post-new.php' ) )
		);

	elseif ( is_search() ) :
		?>
		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wp-classic-theme-starter' ); ?></p>
		<?php
	else :
		?>
		<p>
			<?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'wp-classic-theme-starter' ); ?>
			<?php if ( !is_home() ) : ?>
			<a href="<?php echo get_bloginfo( 'wpurl' ) ?>"><?php _e( 'Go to homepage' , 'wp-classic-theme-starter' ); ?></a>.
			<?php endif; ?>
		</p>
		<?php
	endif;

endif;
?>

<?php
get_footer();
