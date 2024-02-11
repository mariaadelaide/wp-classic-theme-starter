<?php
/**
 * Generic template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Classic_Theme_Starter
 */

?>

<?php if ( is_singular() ) : ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages();
			?>
		</div><!-- .entry-content -->

	</article><!-- #post-<?php the_ID(); ?> -->

<?php else : ?>
	<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
	</li>
<?php endif; ?>
