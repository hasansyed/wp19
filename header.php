<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hs19
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="http://hasansyed.com/fvi/favico.png" type="image/x-icon" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-md navbar-light" role="navigation">
        <div class="container">
            <a class="d-block d-sm-block d-md-none" href="<?php echo home_url(); ?>" title="Hasan Syed / Digital Marketer">
                <img class="d-block d-sm-block d-md-none" src="<?php echo get_template_directory_uri(); ?>/images/hs-logo-m.png" alt="Hasan Syed">
            </a>
            <a class="navbar-brand d-none d-sm-none d-md-block" href="<?php echo home_url(); ?>" title="Hasan Syed / Digital Marketer">
                <img class="d-none d-sm-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/images/hslogo.png" alt="Hasan Syed">
            </a>
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav ml-auto',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
        </div>
    </nav>
