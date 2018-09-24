<?php 

/* Template Name: Case Results */

get_header(); ?>


<div class="internal_title_wrapper">
	
	<div class="internal_title_inner">
		
		<h1><?php the_title();?></h1>
		
		<span class="internal_dots"></span><!-- internal_dots -->
		
	</div><!-- internal_title_inner -->
	
	
</div><!-- internal_title_wrapper -->

<div id="internal_trigger" class="internal_main">
	
	
		<div class="custom_select">
			
			<div class="custom_select_title">
				
				<span>Case Type</span>
			
			</div><!-- select_title -->
			
			<div class="custom_select_arrow">
				
				<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/select-arrow-cr.svg"); ?>
				
			</div><!-- select_arrow -->
			
			<div class="custom_select_dropdown">
				
				<?php $myarray = array();
					
					if(get_field('case_results')):
					 
						while(has_sub_field('case_results')):
									
						 	$arrayvalue[] = get_sub_field('case_result_type');
									
						endwhile;
					 
					endif;
					
					$unique = array_unique(array_merge($myarray, $arrayvalue), SORT_REGULAR);
					
					sort($unique);
					
					echo "<ul>";
						
					foreach ($unique as $value) {
						
						$rules[] = ",";
						$rules[] = " ";
						$rules[] = "'";
						
						$datatag = (str_replace($rules, "-", strtolower($value))); 
						
						echo '<li data-tag="' . $datatag . '">' . $value . '</li>';
					
					}
					
					echo "</ul>";
					
				?>
								
			</div><!-- select_dropdown -->
			
		</div><!-- case_results_select -->
		
		
		<div class="case_result_types">
			
			
			<?php 
				
				if(get_field('case_results')):
			 
					while(has_sub_field('case_results')):
				
						$casetype = get_sub_field('case_result_type');
						
						$rules[] = ",";
						$rules[] = " ";
						$rules[] = "'";
						
						$tabclass = (str_replace($rules, "-", strtolower($casetype))); 
						
						
						$caps = ucwords(strtolower($casetype));
						
						
						?>

				
					<div class="single_case_results <?php echo $tabclass; ?>">
				
						<span class="cr_amount"><?php the_sub_field( 'amount' ); ?></span><!-- cr_amount -->
				
						<span class="cr_decription"><?php echo $caps;?></span><!-- cr_decription -->
				
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
