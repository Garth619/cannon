<?php 

/* Template Name: Case Results */

get_header(); ?>


<div class="internal_title_wrapper">
	
	<div class="internal_title_inner">
		
		<h1><?php the_title();?></h1>
		
		<span class="internal_dots"></span><!-- internal_dots -->
		
	</div><!-- internal_title_inner -->
	
	
</div><!-- internal_title_wrapper -->

<div class="internal_main">
	
		<div class="cr_select">
			
			<div class="cr_select_title">
				
				<span>Case Type</span>
			
			</div><!-- select_title -->
			
			<div class="cr_select_arrow">
				
				<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/select-arrow-cr.svg"); ?>
				
			</div><!-- select_arrow -->
			
			<div class="cr_select_dropdown">
				
				<ul>
					<li>One</li>
					<li>Two</li>
					<li>Three</li>
					<li>Four</li>
					<li>Five</li>
					<li>Six</li>
				</ul>
				
			</div><!-- select_dropdown -->
			
		</div><!-- case_results_select -->
		
</div><!-- internal_main -->




	



<?php get_footer(); ?>
