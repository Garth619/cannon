<section id="section_seven">
	
	
	<div class="sec_seven_inner">
		
		<div class="sec_seven_left">
			
			<span class="sec_seven_title"><?php the_field( 'section_seven_intro' ); ?></span><!-- sec_seven_title -->
			
			<a class="sec_seven_view desktop" href="<?php the_field( 'section_seven_view_all_pas_page_link' ); ?>"><?php the_field( 'section_seven_view_all_pas_verbiage' ); ?></a><!-- view_all_pa -->
			
		</div><!-- sec_seven_left -->
		
			<div class="sec_seven_right">
				
				<div class="sec_seven_button sec_seven_button_left">
					
					<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/arrows.svg"); ?>
					
				</div><!-- sec_seven_button_left -->
			
				<div class="sec_seven_slider">
					
					
					<?php if(get_field('section_seven_practice_areas')): ?>
					 
						<?php while(has_sub_field('section_seven_practice_areas')): ?>
					 
							<div class="sec_seven_single_slide <?php the_sub_field( 'pa_class' ); ?>">
						
								<a href="<?php the_sub_field( 'pa_link' ); ?>">
							
								<div class="svg_wrapper">
							
									<?php $pa_svgs = get_sub_field( 'pa_svgs' ); ?>
		
									<img data-src="<?php echo $pa_svgs['url']; ?>" alt="<?php echo $pa_svgs['alt']; ?>" />
		
							
								</div><!-- svg_wrapper -->
							
								<span class="sec_seven_pa_title"><?php the_sub_field( 'pa_title' ); ?></span><!-- sec_seven_pa_title -->
							
							</a>
						
						</div><!-- sec_seven_single_slide -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>

					
				</div><!-- sec_seven_slider -->
				
				<div class="sec_seven_button sec_seven_button_right">
					
					<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/arrows.svg"); ?>
					
				</div><!-- sec_seven_button_left -->
				
			</div><!-- sec_seven_right -->
			
		<a class="sec_seven_view mobile" href="<?php the_field( 'section_seven_view_all_pas_page_link' ); ?>"><?php the_field( 'section_seven_view_all_pas_verbiage' ); ?></a><!-- view_all_pa -->
		
	</div><!-- sec_seven_inner -->
	
	
</section><!-- section_seven -->