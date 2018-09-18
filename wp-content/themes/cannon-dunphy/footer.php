<footer id="footer_trigger">
	
	<div class="footer_inner">
		
		<span class="footer_request_title">request your free consultation</span><!-- footer_request_title -->
		
		<span class="get_started_title">get started today</span><!-- get_started_title -->
		
		<span class="required_title">* Required Field</span><!-- required_title -->
		
		<div class="form">
			
			<?php gravity_form(1, false, false, false, '', true, 34); ?>
			
		</div><!-- form -->
		
	</div><!-- footer_inner -->
	
	<div class="footer_bottom">
		
		<div class="footer_left">
			
			
			
		</div><!-- footer_left -->
		
		<div class="footer_right">
			
			<div class="footer_right_inner">
			
			<div class="location_wrapper">
				
				<span class="large_header"><?php the_field( 'firm_title','option'); ?></span><!-- large_header -->
				
				<span class="address"><?php the_field( 'firm_street_address','option'); ?></span>
				
				<a class="directions" href="<?php the_field( 'firm_directions_link','option'); ?>" target="_blank">Directions</a><!-- directions -->
				
			</div><!-- location_wrapper -->
			
			<div class="location_wrapper">
				
				<span class="large_header"><?php the_field( 'firm_title_two','option'); ?></span><!-- large_header -->
				
				<span class="address"><?php the_field( 'firm_street_address_two','option'); ?></span>
				
				<a class="directions" href="<?php the_field( 'firm_directions_link_two','option'); ?>" target="_blank">Directions</a><!-- directions -->

				
			</div><!-- location_wrapper -->
			
			<div class="location_wrapper">
				
				<span class="large_header"><?php the_field( 'contact_large_header','option'); ?></span><!-- large_header -->
				
				<a class="phone" href="tel:<?php the_field( 'phone','options'); ?>" target="_blank"><?php the_field( 'phone','options'); ?></a><!-- directions -->
				
			</div><!-- location_wrapper -->
			
			<div class="location_wrapper">
				
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
				
			</div><!-- location_wrapper -->
			
			</div><!-- footer_right_inner -->
			
			<div class="copyright desktop">
				
				<ul>
					<li>&copy; 2018 cannon & dunphy attorneys at law</li>
					<li><a href="">disclaimer</a></li>
					<li>All Rights Reserved</li>
				</ul>
				
				<a class="ilawyer" href="//ilawyermarketing.com" target="_blank">
				
					<img src="<?php bloginfo('template_directory');?>/images/footer_icon_01.svg"/>
				
				</a><!-- ilawyer -->
				
			</div><!-- copyright -->
			
		</div><!-- footer_right -->
		
	</div><!-- footer_bottom -->
	
		<div class="copyright mobile">
				
				<ul>
					<li>&copy; 2018 cannon & dunphy attorneys at law</li>
					<li><a href="">disclaimer</a></li>
					<li>All Rights Reserved</li>
				</ul>
				
				<a class="ilawyer" href="//ilawyermarketing.com" target="_blank">
				
					<img src="<?php bloginfo('template_directory');?>/images/footer_icon_01.svg"/>
				
				</a><!-- ilawyer -->
				
			</div><!-- copyright -->
	
</footer>

<div id="contact_trigger" class="contact_prompt">
	
	<img src="<?php bloginfo('template_directory');?>/images/contactus_icon.svg"/>
	
	<span>contact<br/> us today</span>
	
</div><!-- contact_prompt -->

<div class="contact_overlay">
	
	<div class="contact_overlay_inner">
		
		<div class="contact_overlay_close"></div><!-- overlay_close -->
		
		<span class="contact_request_title">request your free consultation</span><!-- footer_request_title -->
		
		<span class="contact_get_started_title">get started today</span><!-- get_started_title -->
		
		<span class="contact_required_title">* Required Field</span><!-- required_title -->
		
		<div class="contact_form">
			
			<?php gravity_form(3, false, false, false, '', true, 555); ?>
			
		</div><!-- form -->
		
	</div><!-- contact_overlay_inner -->
	
</div><!-- contact_overlay -->

<?php wp_footer();?>


</body>
</html>
