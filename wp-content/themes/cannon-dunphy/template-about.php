<?php 

/* Template Name: About */

get_header(); ?>


<div class="about_internal_wrapper">
	
	<div class="about_internal_inner">
		
		<div class="about_inner_left">
			
			<span class="about_small_header"><?php the_field( 'about_small_header' ); ?></span><!-- about_small_header -->
			
			<h1><?php the_field( 'about_large_header' ); ?></h1>
			
		</div><!-- about_inner_left -->
		
	</div><!-- about_internal_inner -->
	
</div><!-- about_internal_wrapper -->


<div class="internal_main about_two_col">
	
	<div class="about_content content">
		
		<?php get_template_part( 'loop', 'page' ); ?>
		
	</div><!-- about_content -->
	
	<div class="about_sidebar">
		
		<?php $about_image = get_field( 'about_image' ); ?>
		
		<?php if ( $about_image ) { ?>
		
		<img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" />
		
		<?php } ?>
		
		<span class="about_image_intro"><?php the_field( 'about_image_caption' ); ?></span>
			
			
			
		</span><!-- about_image_intro --> 
		
	</div><!-- about_sidebar -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>
