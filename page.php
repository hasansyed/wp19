<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hs19
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- Article header -->
				<header class="entry-header"> 
				</header> <!-- end entry-header -->

				<!-- Article content -->
				<div class="wrapper">
					<?php the_content(); ?>
						<?php endwhile; ?>
				</div> <!-- end entry-content -->

				<!-- Article footer -->

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
