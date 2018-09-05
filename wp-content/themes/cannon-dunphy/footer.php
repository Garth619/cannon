<footer>
	
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
				
				<span class="large_header">Brookfield Location</span><!-- large_header -->
				
				<span class="address">595 North Barker Road<br/> Brookfield, WI 53045</span>
				
				<a class="directions" href="" target="_blank">Directions</a><!-- directions -->
				
			</div><!-- location_wrapper -->
			
			<div class="location_wrapper">
				
				<span class="large_header">Milwaukee Location</span><!-- large_header -->
				
				<span class="address">735 North Water Street<br/> Suite 819<br/> Milwaukee, WI 53202</span>
				
				<a class="directions" href="" target="_blank">Directions</a><!-- directions -->

				
			</div><!-- location_wrapper -->
			
			<div class="location_wrapper">
				
				<span class="large_header">Contact Us Today</span><!-- large_header -->
				
				<a class="phone" href="tel:(855) 254-5006" target="_blank">(855) 254-5006</a><!-- directions -->
				
			</div><!-- location_wrapper -->
			
			<div class="location_wrapper">
				
				<a class="social" href="" target="_blank">
					
					<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/footer_icon_05.svg"); ?>
					
				</a><!-- footer_icon_05 -->
				
				<a class="social" href="" target="_blank">
					
					<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/footer_icon_04.svg"); ?>
					
				</a><!-- footer_icon_05 -->
				
				<a class="social" href="" target="_blank">
					
					<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/footer_icon_03.svg"); ?>
					
				</a><!-- footer_icon_05 -->
				
				<a class="social" href="" target="_blank">
					
					<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/footer_icon_02.svg"); ?>
					
				</a><!-- footer_icon_05 -->
				
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

<?php wp_footer();?>


</body>
</html>
