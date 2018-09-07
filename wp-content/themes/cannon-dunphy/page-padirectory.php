<?php 

/* Template Name: PA Directory */

get_header(); ?>


<div class="internal_title_wrapper">
	
	<div class="internal_title_inner">
		
		<h1><?php the_title();?></h1>
		
		<span class="internal_dots"></span><!-- internal_dots -->
		
	</div><!-- internal_title_inner -->
	
	
</div><!-- internal_title_wrapper -->

<div class="internal_main">
	
	<div class="pa_wrapper">
		
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
		
	</div><!-- pa_wrapper -->
	
		
</div><!-- internal_main -->




	



<?php get_footer(); ?>
