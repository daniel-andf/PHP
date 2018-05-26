<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package passionrouge
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://use.fontawesome.com/33d8c85f1b.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'passionrouge' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
                <div class="title-logos">
                    <div class="social-media-links">
                        <div class="fa fa-facebook-square"></div>
                        <div class="fa fa-twitter-square"></div>
                        <div class="fa fa-instagram"></div>      
                    </div>
                    <div class="fa fa-bars"></div>
                    <div class="site-branding">
                        
                            <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2017/03/logo-wine3.png" alt="logo-wine">
                            <?php


                            $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) : ?>
                                    <p class="site-description"><?php echo 'FALL IN LOVE WITH YOUR WINE' ?></p>
                            <?php
                            endif; ?>
                    </div><!-- .site-branding -->
                    <div class="search-logo">
                        <div class="fa fa-search"></div>
                       <form role="search" method="get" class="search-form-title search-off" action="http://localhost/passionrouge/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search …" value="" name="s">
				</label>
				<input type="submit" class="search-submit" value="Search">
			</form>
                    </div>
                         
                 </div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'primary-menu menu-off' ) ); ?>
                   
                </nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
