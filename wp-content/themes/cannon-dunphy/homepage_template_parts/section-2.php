<section id="section_two">
	
	<div class="sec_two_inner">
		
		<div class="sec_two_intro">
			
			<span class="large_header"><?php the_field( 'section_two_title' ); ?></span><!-- large_header -->
			
			<div class="money_svg">
				
				<?php $offer_icon = get_field( 'offer_icon' ); ?>

				<img data-src="<?php echo $offer_icon['url']; ?>" alt="<?php echo $offer_icon['alt']; ?>" />

			</div><!-- money_svg -->
			
			<span class="small_header"><?php the_field( 'section_two_sub_header' ); ?></span><!-- small_header -->
			
			
		</div><!-- sec_two_intro -->
		
		<div class="sec_two_slider">
			
			
			<?php if(get_field('section_two_selling_points')): ?>
			 
				<?php while(has_sub_field('section_two_selling_points')): ?>

					
					<div class="sec_two_single_slide <?php the_sub_field( 'sp_class' ); ?>">

				
						<?php $svg_file_name = get_sub_field( 'svg_file_name' ); ?>
		
						
						<img data-src="<?php echo $svg_file_name['url']; ?>" alt="<?php echo $svg_file_name['alt']; ?>" />
	
				
						<span class="slide_header"><?php the_sub_field( 'sp_description' ); ?></span><!-- slide_header -->
				
						<span class="slide_dot"></span><!-- slide_dot -->
				
						<span class="slide_dot"></span><!-- slide_dot -->
				
						<div class="sp_hover">
					
							<div class="sp_hover_inner">
					
								<?php the_sub_field( 'sp_hover_text' ); ?>
					
							</div><!-- sp_hover_inner -->
					
						</div><!-- sp_hover -->
				
					</div><!-- sec_two_single_slide -->

			    
				<?php endwhile; ?>
			 
			<?php endif; ?>

						
		</div><!-- sec_two_slider -->
		
	</div><!-- sec_two_inner -->
	
</section><!-- section_two -->