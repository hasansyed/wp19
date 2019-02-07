<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hs19
 */

get_header(); ?>
 
<div id="primary" class="content-area wrapper">
    
<div class="wrapper">

        
<div class="container-fluid">
	       <div class="row">
	        
	        
	        <div id="primary" class="content-area blogwrapper">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
    
    
	       </div>
	</div>
</div>


<?php

get_footer(); ?>
