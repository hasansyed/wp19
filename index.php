<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hs19
 */

get_header(); ?>

	<div id="primary" class="content-area wrapper">
	    
	<div class="wrapper">
	    
            <div class="hero" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/1.jpeg)">
                
                   <div class="cta_container">
                       
                       
                       <div class="cta_content ">
                           
                             <div class="cta_content wrap"><h1>Corp</h1></div>
                       </div>
                   </div>
                    
                    
                    
                </div>
	</div>
    <div class="breadcrumbsmain">
        
       <div class="container">
           
           <div class="row">
               
                <?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<div class="breadcrumb">','</div>
');
}
?>
   
           </div>
       </div>
    </div>


	<div id="primary" class="container content-area titlewrapper">
		
        <div class="row">
            <div class="col-lg-8">
                <main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_pagination( array(
	'mid_size' => 2,
	'prev_text' => __( 'Newer', 'hs19' ),
	'next_text' => __( 'Older', 'hs19' ),
) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
            </div>
            
            <div class="col-lg-4 sidebar"><?php get_sidebar(); ?></div>
        </div>
	</div><!-- #primary -->

	</div>
    
<?php get_footer(); ?>
