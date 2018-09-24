<section id="section_six">
	
	<div class="sec_six_inner">
		
		<span class="sec_six_title"><?php the_field( 'section_six_title' ); ?></span><!-- sec_six_title -->
		
		<div class="sec_six_cr">
			
			<div class="sec_six_slider">
				
				
					<?php if(get_field('section_six_case_results')): ?>
					 
						<?php while(has_sub_field('section_six_case_results')): ?>
					 
								
								<div class="sec_six_single_slide">
					
									<span class="sec_six_cr_amount"><?php the_sub_field( 'amount' ); ?></span><!-- sec_six_cr_amount -->
					
									<span class="sec_six_small_header"><?php the_sub_field( 'cr_type' ); ?></span><!-- sec_six_small_header -->
					
									<span class="sec_six_cr_description"><?php the_sub_field( 'cr_description' ); ?></span><!-- sec_six_cr_description -->
					
									<span class="sec_six_location"><?php the_sub_field( 'cr_location' ); ?></span><!-- sec_six_location -->
					
								</div><!-- sec_six_single_slide -->
							
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>


				
			</div><!-- sec_six_slider -->
			
			<div class="sec_six_buttons">
				
				<div class="sec_six_button_left sec_six_button">
					
					<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/select-arrow-cr.svg"); ?>
					
				</div><!-- sec_six_button_left -->
				
				<div class="sec_six_button_right sec_six_button">
					
					<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/select-arrow-cr.svg"); ?>
					
				</div><!-- sec_six_button_right -->
				
			</div><!-- sec_six_buttons -->
			
		</div><!-- sec_six_cr -->
		
	</div><!-- sec_six_inner -->
	
</section><!-- section_six -->