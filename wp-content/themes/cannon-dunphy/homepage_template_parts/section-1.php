<section id="section_one">
	
	<div class="sec_one_left">
		
		<div class="sec_one_left_inner">
			
			<span class="small_header"><?php the_field( 'section_one_small_header' ); ?></span><!-- small_header -->
			
			<span class="large_header"><?php the_field( 'section_one_large_header' ); ?></span><!-- large_header -->
			
			<span class="sec_one_intro"><?php the_field( 'section_one_content' ); ?><!-- sec_one_intro -->
			
			<a class="consultation_button desktop">
				
				<span class="button_title"><?php the_field( 'section_one_request_verbiage' ); ?></span><!-- button_title -->
				
				<div class="button_circle">
					
					<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/arrows.svg"); ?>
					
				</div><!-- button_circle -->
				
			</a><!-- consultation_button -->
			
		</div><!-- sec_one_left_inner -->
		
	</div><!-- sec_one_left -->
	
	<div class="sec_one_right">
		
		<div class="video_wrapper">
			
			<a href="//www.youtube-nocookie.com/embed/<?php the_field( 'youtube_video_id' ); ?>?rel=0&amp;showinfo=0;autoplay=1" data-lity>
			
			<div class="video_button">
				
				<div class="video_button_inner"></div><!-- video_button_inner -->
				
			</div><!-- video_button -->
			
			<span class="video_cta">learn about our firm in <strong>45</strong> seconds</span><!-- video_cta -->
			
			</a>
			
		</div><!-- video_wrapper -->
		
		<?php $section_one_desktop_image = get_field( 'section_one_desktop_image' ); ?>

		<img class="desktop no_webp" src="<?php echo $section_one_desktop_image['url']; ?>" alt="<?php echo $section_one_desktop_image['alt']; ?>" />
		
<!--
		<?php $section_one_desktop_image_webp = get_field( 'section_one_desktop_image_webp' ); ?>

		<img class="desktop my_webp" src="<?php echo $section_one_desktop_image_webp['url']; ?>" alt="<?php echo $section_one_desktop_image_webp['alt']; ?>" />
-->


	</div><!-- sec_one_right -->
	
	<?php $section_one_tablet_image = get_field( 'section_one_tablet_image' ); ?>

	<img class="tablet no_webp" src="<?php echo $section_one_tablet_image['url']; ?>" alt="<?php echo $section_one_tablet_image['alt']; ?>" />
	
<!--
	<?php $section_one_tablet_image_webp = get_field( 'section_one_tablet_image_webp' ); ?>

	<img class="tablet my_webp" src="<?php echo $section_one_tablet_image_webp['url']; ?>" alt="<?php echo $section_one_tablet_image_webp['alt']; ?>" />
-->


	
</section><!-- section_one -->

		<a class="consultation_button mobile">
				
				<span class="button_title"><?php the_field( 'section_one_request_verbiage' ); ?></span><!-- button_title -->
				
				<div class="button_circle">
					
					<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/arrows.svg"); ?>
					
				</div><!-- button_circle -->
				
			</a><!-- consultation_button -->