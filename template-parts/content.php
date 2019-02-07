<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hs19
 */

?>

<article id="bentry post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	  
	
		<?php
		if ( is_single() ) :
		else :
            the_post_thumbnail('thumbnail');
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
	
		<?php
		endif; ?>
	</header><!-- .entry-header -->

		<div class="entry-content">
		<?php
			
        if ( is_single()) :?>
        
          
          <div class="no-gutter">
          
          <div class="col-lg-6"> <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
          
        <div class="fi" style="background: url('<?php echo $backgroundImg[0]; ?>');     
        background-position: middle center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 350px;
        max-width: 100%;
        width: 100%;
        background-color: #999;"><div class="bloghead"></div></div>
    </div>
     
     <div class="col-lg-6 greybkg">
         
         
         <h1><?php the_title(); ?></h1>
         
         <?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta-single">
			<?php hs19_posted_on(); ?>  <?php  $category_list = get_the_category_list( ', ' );
                if ( $category_list){
                    echo 'Under: ' . $category_list ;
                } ?> 
		</div><!-- .entry-meta -->
		<?php
		endif; ?>

     </div>
      </div>
      <div class="container">
       
       
        <?php
            the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'hs19' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span></div>', false )
			) );
else: 
        
        the_excerpt();
        
        endif;
        
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hs19' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
