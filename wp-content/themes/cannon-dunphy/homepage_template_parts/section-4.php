<section id="section_four">
	
	<div class="section_four_inner">
		
		<span class="client_testimonials_title"><?php the_field( 'section_four_title' ); ?></span><!-- client_testimonials -->
		
		<div class="sec_four_test_wrapper">
			
			<div class="sec_four_test_left">
				
				<?php $section_four_image = get_field( 'section_four_image' ); ?>

				<img data-src="<?php echo $section_four_image['url']; ?>" alt="<?php echo $section_four_image['alt']; ?>" />

			</div><!-- sec_four_test_left -->
			
			<div class="sec_four_test_right">
				
				<div class="sec_four_test_slider">
					
					<?php if(get_field('section_four_repeater')): ?>
					 
						<?php while(has_sub_field('section_four_repeater')): ?>
					 
							<div class="sec_four_single_slide">
						
							<span class="sec_four_single_title"><?php the_sub_field( 'testimonial_quote' ); ?></span><!-- sec_four_single_title -->
						
							<span class="sec_four_test_content"><?php the_sub_field( 'testimonial_content' ); ?></span><!-- sec_four_test_content -->
						
							<span class="sec_four_name"><?php the_sub_field( 'testimonial_name' ); ?></span><!-- sec_four_name -->
						
					</div><!-- sec_four_single_slide -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>


				</div><!-- sec_four_test_slider -->
				
				<div class="sec_four_buttons">
					
					<div class="sec_four_button sec_four_button_left">
						
						<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/select-arrow-sec-four.svg"); ?>
						
					</div><!-- sec_four_button_left -->
					
					<div class="sec_four_button sec_four_button_right">
						
						<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/select-arrow-sec-four.svg"); ?>
						
					</div><!-- sec_four_button_right -->
					
				</div><!-- sec_four_buttons -->
				
			</div><!-- sec_four_test_right -->
			
		</div><!-- sec_four_test_wrapper -->
		
	</div><!-- section_four_inner -->
	
</section><!-- section_four -->