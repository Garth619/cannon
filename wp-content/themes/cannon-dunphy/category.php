<?php get_header(); ?>


<div class="internal_title_wrapper">
	
	<div class="internal_title_inner">
		
		<h1><?php
					printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
		
		<span class="internal_dots"></span><!-- internal_dots -->
		
	</div><!-- internal_title_inner -->
	
	
</div><!-- internal_title_wrapper -->

<div id="internal_trigger" class="internal_main">
	
		<div class="blog_wrapper">
			
			<div class="blog_content content">
				
				<?php get_template_part( 'loop', 'index' );?>
				
			</div><!-- blog_content -->
			
			<?php get_sidebar('blog'); ?>
			
		</div><!-- blog_wrapper -->
	
		
	
		
</div><!-- internal_main -->



<?php get_footer(); ?>




				
				
			
		
