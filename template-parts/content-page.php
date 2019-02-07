<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hs19
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hfh' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
		</footer><!-- .entry-footer -->
</article><!-- #post-## -->
