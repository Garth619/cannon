<section id="section_three">
	
	<div class="sec_three_inner">
		
		<span class="small_header"><?php the_field( 'section_three_small_header' ); ?></span><!-- small_header -->
		
		<h1><?php the_field( 'section_three_header' ); ?></h1>
		
		<?php the_field( 'section_three_tagline' ); ?>
		
		<div class="sec_three_content_wrapper">
			
			
			<div class="sec_three_content content">
				
			
				<?php the_field( 'section_three_content' ); ?>
				
				
			</div><!-- sec_three_content -->
			
			<div class="sec_three_image_wrapper">
				
				<?php $section_three_image = get_field( 'section_three_image' ); ?>
				
				<img data-src="<?php echo $section_three_image['url']; ?>" alt="<?php echo $section_three_image['alt']; ?>" />

			</div><!-- sec_three_image_wrapper -->
			
			
		</div><!-- sec_three_content_wrapper -->
		
		
		
	</div><!-- sec_three_inner -->
	
	<div class="sec_three_slider_wrapper">
			
			<div class="arrow_left arrow_button">
				
				<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/arrows.svg"); ?>
				
			</div><!-- arrow_left -->
			
			<div class="sec_three_slider">
				
				<?php if(get_field('section_three_logos')): ?>
				 
					<?php while(has_sub_field('section_three_logos')): ?>
					
						<div class="sec_three_single_slide">
				 
							<?php $logos = get_sub_field( 'logos' ); ?>
		
							<img data-src="<?php echo $logos['url']; ?>" alt="<?php echo $logos['alt']; ?>" />
						
						</div><!-- sec_three_single_slide -->
		
				  <?php endwhile; ?>
				 
				<?php endif; ?>
			

				
			</div><!-- sec_three_slider -->
			
			<div class="arrow_right arrow_button">
				
				<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/arrows.svg"); ?>
				
			</div><!-- arrow_left -->
			
		</div><!-- sec_three_slider_wrapper -->
		
		<div class="sec_three_bottom">
			
			<div class="sec_three_bottom_inner">
				
				<div class="sec_three_blockquote">
					
					<span class="blockquote_inner"><?php the_field( 'section_three_bottom_intro' ); ?></span>
					
				</div><!-- sec_three_blockquote -->
				
				<div class="sec_three_bottom_content content">
					
					<?php the_field( 'section_three_bottom_content' ); ?>
					
				</div><!-- sec_three_bottom_content -->
				
			</div><!-- sec_three_bottom_inner -->
			
		</div><!-- sec_three_bottom -->
	
</section><!-- section_three -->