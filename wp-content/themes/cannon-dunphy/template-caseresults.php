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
					
					<?php if(get_field('case_results')): ?>
					 
						<?php while(has_sub_field('case_results')): ?>
					 
							<li><?php the_sub_field( 'case_result_type' ); ?></li>
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
				
				</ul>
				
			</div><!-- select_dropdown -->
			
		</div><!-- case_results_select -->
		
		
		<div class="case_result_types">
			
			
			<?php if(get_field('case_results')): ?>
			 
				<?php while(has_sub_field('case_results')): ?>

				
					<div class="single_case_results">
				
						<span class="cr_amount"><?php the_sub_field( 'amount' ); ?></span><!-- cr_amount -->
				
						<span class="cr_decription"><?php the_sub_field( 'case_result_type' ); ?></span><!-- cr_decription -->
				
						<div class="overlay_data">
				
							<span class="overlay_amount"><?php the_sub_field( 'amount_longhand' ); ?></span><!-- overlay_amount -->
		
							<span class="overlay_type"><?php the_sub_field( 'case_result_type' ); ?></span><!-- overlay_type -->
		
							<span class="overlay_description"><?php the_sub_field( 'case_result_description' ); ?></span><!-- overlay_description -->
		
							<span class="overlay_location"><?php the_sub_field( 'case_location' ); ?></span><!-- overlay_location -->
				
						</div><!-- overlay_data -->
				
					</div><!-- single_case_results -->
			 
				
			   <?php endwhile; ?>
			 
			<?php endif; ?>

	
		</div><!-- case_result_types -->
		
</div><!-- internal_main -->

<div class="cr_overlay">
	
	<div class="cr_overlay_inner">
		
		<div class="overlay_close"></div><!-- overlay_close -->
		
		<div class="overlay_data_clone"></div><!-- overlay_data_clone -->
				
	</div><!-- cr_overlay_inner -->
	
</div><!-- cr_overlay -->



<?php get_footer(); ?>
