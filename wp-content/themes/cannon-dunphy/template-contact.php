<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>



<div class="internal_main">
	
	<div class="contact_us_wrapper">
	
		<span class="contact_small_header"><?php the_field( 'contact_small_header' ); ?></span><!-- contact_small_header -->
		
		<h1 class="contact_header"><?php the_field( 'contact_large_header','option'); ?></h1><!-- contact_header -->
		
		<div class="contact_info_wrapper">
			
			<div class="contact_info_box">
				
				<span class="contact_title"><?php the_field( 'firm_title','option'); ?></span><!-- contact_title -->
				
				<span class="contact_page_address"><?php the_field( 'firm_street_address','option'); ?></span><!-- contact_page_address -->
				
				<a class="contact_page_directions" href="<?php the_field( 'firm_directions_link','option'); ?>" target="_blank">Directions</a><!-- contact_page_directions -->
				
			</div><!-- contact_info_box -->
			
			<div class="contact_info_box">
				
				<a class="contact_tel" href="tel:<?php the_field( 'phone','options'); ?>"><?php the_field( 'phone','options'); ?></a><!-- contact_tel -->
				
				<span class="free_title">free consultations</span><!-- free_title -->
				
				
				<div class="contact_social">
					
					<a class="social" href="<?php the_field( 'google_plus_link','option'); ?>" target="_blank">
					
						<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/footer_icon_05.svg"); ?>
					
					</a><!-- social -->
				
					<a class="social" href="<?php the_field( 'twitter_link','option'); ?>" target="_blank">
					
						<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/footer_icon_04.svg"); ?>
					
					</a><!-- social -->
				
					<a class="social" href="<?php the_field( 'facebook_link','option'); ?>" target="_blank">
					
						<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/footer_icon_03.svg"); ?>
					
					</a><!-- social -->
				
					<a class="social" href="<?php the_field( 'linked_in_link','option'); ?>" target="_blank">
					
						<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/footer_icon_02.svg"); ?>
					
					</a><!-- social -->
					
				</div><!-- contact_social -->
				
			</div><!-- contact_info_box -->
			
			<div class="contact_info_box">
				
				<span class="contact_title"><?php the_field( 'firm_title_two','option'); ?></span><!-- contact_title -->
				
				<span class="contact_page_address"><?php the_field( 'firm_street_address_two','option'); ?></span><!-- contact_page_address -->
				
				<a class="contact_page_directions" href="<?php the_field( 'firm_directions_link_two','option'); ?>" target="_blank">Directions</a><!-- contact_page_directions -->
				
			</div><!-- contact_info_box -->
			
		</div><!-- contact_info_wrapper -->
		
	</div><!-- contact_us_wrapper -->
	
</div><!-- internal_main -->

<div class="iframe_map">
	
	<?php the_field( 'firm_map_embed','option'); ?>
	
	<?php the_field( 'firm_map_embed_two','option'); ?>
		
</div><!-- iframe_map -->

			
<?php get_footer(); ?>