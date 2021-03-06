<?php
	
	/* Template Name: Kenosha */
	
	get_header(); ?>


<div class="internal_title_wrapper">
	
	<div class="internal_title_inner">
		
		<h1><?php the_title();?></h1>
		
		<div class="spacer"></div><!-- spacer -->
		
	</div><!-- internal_title_inner -->
	
	
</div><!-- internal_title_wrapper -->

<div id="internal_trigger" class="internal_main two_col">
	
	<div class="container content">
		
		<?php get_template_part( 'loop', 'page' ); ?>
		
	</div><!-- container -->
	
	<?php get_sidebar('kenosha'); ?>
	
</div><!-- internal_main -->




	



<?php get_footer(); ?>
