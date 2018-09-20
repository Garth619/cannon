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
				
				<img class="desktop" src="<?php bloginfo('template_directory');?>/images/hero_logo_vertical.svg"/>
				
				<img class="mobile" src="<?php bloginfo('template_directory');?>/images/hero_logo_horizontal.svg"/>
				
			</a>
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<div class="call_wrapper">
				
				<div class="flex_wrapper">
				
					<span class="call_for desktop">Call for a free consultation</span><!-- call_for -->
				
					<span class="call_for mobile">Free Consultation</span><!-- call_for -->
				
					<a class="espanol" href="<?php the_field( 'spanish_page_link','option'); ?>"><?php the_field( 'spanish_verbiage','option'); ?></a><!-- espanol -->
				
				</div><!-- flex_wrapper -->
				
				<a class="phone" href="tel:<?php the_field( 'phone','options'); ?>"><?php the_field( 'phone','options'); ?></a><!-- phone -->
			
			</div><!-- call_wrapper -->
			
			<nav>
				
				<div class="close_x"></div><!-- close -->
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			</nav>
			
			<div class="mobile_phone">
				
			
					
					<a href="tel:<?php the_field( 'phone','options'); ?>">
					
						<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/hero_icon_mobile.svg"); ?>
					
					</a>
					
			
				
			</div><!-- mobile_phone -->
			
			
			<div class="mobile_menu">
				
				<div class="mobile_bar"></div><!-- mobile_bar -->
				<div class="mobile_bar"></div><!-- mobile_bar -->
				<div class="mobile_bar"></div><!-- mobile_bar -->
				
				<span class="mobile_menu_title">Menu</span><!-- mobile_menu_title -->
				
			</div><!-- mobile_menu -->
			
		</div><!-- header_right -->
		
		
		
	</header>
				


			