<?php 

/* Template Name: Testimonials */

get_header(); ?>


<div class="internal_title_wrapper">
	
	<div class="internal_title_inner">
		
		<h1><?php the_title();?></h1>
		
		<span class="internal_dots"></span><!-- internal_dots -->
		
	</div><!-- internal_title_inner -->
	
	
</div><!-- internal_title_wrapper -->

<div id="internal_trigger" class="internal_main">
	
	<div class="testimonials_wrapper">
		
		
		<div class="col">
			
			
			<?php if(get_field('testimonials_column_one')): ?>
			 
				<?php while(has_sub_field('testimonials_column_one')): ?>
			 
					
					<div class="single_tesimonial_wrapper">
			
						<span class="testi_quote"><?php the_sub_field( 'testimonial_quote' ); ?></span><!-- testi_quote -->
			
						<span class="testi_content"><?php the_sub_field( 'testimonial_content' ); ?></span><!-- testi_content -->
			
						<span class="testi_name"><?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
			
					</div><!-- single_tesimonial_wrapper -->
					
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
				

		
		</div><!-- col -->
		
		
		<div class="col">
		
				
				<?php if(get_field('testimonials_column_two')): ?>
			 
				<?php while(has_sub_field('testimonials_column_two')): ?>
			 
					
					<div class="single_tesimonial_wrapper">
			
						<span class="testi_quote"><?php the_sub_field( 'testimonial_quote' ); ?></span><!-- testi_quote -->
			
						<span class="testi_content"><?php the_sub_field( 'testimonial_content' ); ?></span><!-- testi_content -->
			
						<span class="testi_name"><?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
			
					</div><!-- single_tesimonial_wrapper -->
					
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
		
				
		
		
		
		</div><!-- col -->
		
	
	</div><!-- testimonials_wrapper -->
	
		
</div><!-- internal_main -->


<?php get_footer(); ?>
