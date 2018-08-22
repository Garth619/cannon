<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />


<style>
@import url('https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:400,500,700|Work+Sans:300,400,500,600,700,800');
</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>


</head>

<body <?php body_class(); ?>>
	
	
	<header>
		
		<div class="header_left">
			
			<a href="<?php bloginfo('url');?>">
				
				<img src="<?php bloginfo('template_directory');?>/images/hero_logo_vertical.svg"/>
				
			</a>
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<div class="call_wrapper">
				
				<span class="call_for">Call for a free consultation</span><!-- call_for -->
				
				<span class="espanol">Se Habla Espanol</span><!-- espanol -->
				
				<a class="phone" href="tel:(855) 531-987">(855) 531-9875</a><!-- phone -->
			
			</div><!-- call_wrapper -->
			
		</div><!-- header_right -->
		
	</header>
				

<?php // wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			