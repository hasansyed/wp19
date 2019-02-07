<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package hs16
 */

get_header(); ?>

	<div id="primary" class="content-area wrapper">
		<main id="main" class="site-main" role="main">

			<div class="container">
			    
			    <div class="row">
			        
			        <section class="error-404 not-found">
				<header class="page-header">
					<h1 class="loud">Error.404</h1>
										<h2 class="intro">If you can't get to it... does it even exist?</h2>
										
										<p>
										    
										    The page you are looking for is unavailable or has moved to a different location.<br>
Please use the navigation above to browse to the page that you were looking for.
										</p>

				</header><!-- .page-header -->

				<div class="page-content">

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			    </div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
