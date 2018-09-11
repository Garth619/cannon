<?php 

/* Template Name: Attorney Directory */

get_header(); ?>


<div class="internal_title_wrapper">
	
	<div class="internal_title_inner">
		
		<h1><?php the_title();?></h1>
		
		<span class="internal_dots"></span><!-- internal_dots -->
		
	</div><!-- internal_title_inner -->
	
	
</div><!-- internal_title_wrapper -->

<div class="internal_main">
	
	<div class="meet_attorney_wrapper">
		
		
		
		<?php if(get_field('attorney_directory')): ?>
		 
			<?php while(has_sub_field('attorney_directory')): ?>
		 
				<?php $post_object = get_sub_field( 'attorney_page_info' ); ?>
					
					<?php if ( $post_object ): ?>
					
					<?php $post = $post_object; ?>
					
					<?php setup_postdata( $post ); ?> 
				
						<div class="single_attorney_wrapper">
			
							<a href="<?php the_permalink();?>">
			
							<div class="attorney_image_wrapper">
				
								<?php $attorney_image = get_field( 'attorney_image' ); ?>
				
								<?php if ( $attorney_image ) { ?>
				
									<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />

								<?php } ?>
				
								<div class="att_img_overlay"></div><!-- att_img_overlay -->
				
						</div><!-- attorney_image_wrapper -->
			
						<span class="att_title"><?php the_title();?></span><!-- att_title -->
			
						<span class="att_position"><?php the_sub_field( 'attorney_position' ); ?></span><!-- att_position -->
			
						</a>
			
						</div><!-- single_attorney_wrapper -->

						<?php wp_reset_postdata(); ?>
	
						<?php endif; ?>
		    
						<?php endwhile; ?>
		 
					<?php endif; ?>		
		
				</div><!-- meet_attorney_wrapper -->
	
			</div><!-- internal_main -->


<?php get_footer(); ?>
