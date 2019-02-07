<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hs19
 */
?>
</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <div id="lowfooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="footerlogo">
                        <div class="text-mobile-sm text-mobile-sm text-mobile-lg text-mobile-xs">
                            <a href="<?php echo home_url(); ?>/?ref=footerlogo">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/footer-hs.png" alt="Hasan Syed"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="text-mobile-sm text-mobile-sm text-mobile-lg text-mobile-xs">
                        <div class="copyright">&copy; <?php echo date( 'Y ' ); ?>Hasan Syed. All rights reserved. </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="smicons right-mobile-sm right-mobile-md right-mobile-lg text-mobile-xs">
                       <div class="copyright">
                             <a href="https://linkedin.com/in/hasansyed" target="_blank" title="Follow Hasan Syed On LinkedIn"><i class="fab fa-linkedin-in"></i>LinkedIn</a>
                         <a href="https://twitter.com/hasanasyed" target="_blank" title="Follow Hasan Syed On Twitter"><i class="fab fa-twitter" aria-hidden="true"></i>Twitter</a> </div>
                       </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>

</html>
