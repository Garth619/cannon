<?php 

/* Template Name: Video Center */

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
				
				<span>Video Type</span>
			
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
						
						$datatag = (str_replace(' ', '-', strtolower($value))); 
						
						echo '<li data-tag="' . $datatag . '">' . $value . '</li>';
					
					}
					
					echo "</ul>";
					
				?>
								
			</div><!-- select_dropdown -->
			
		</div><!-- select -->
		
		
		<div class="videos_wrapper">
			
			
			<div class="single_video">
				
				
				
			</div><!-- single_video -->
		
			
		</div><!-- videos_wrapper -->
		
		
				
</div><!-- internal_main -->

<div class="cr_overlay">
	
	<div class="cr_overlay_inner">
		
		<div class="overlay_close"></div><!-- overlay_close -->
		
		<div class="overlay_data_clone"></div><!-- overlay_data_clone -->
				
	</div><!-- cr_overlay_inner -->
	
</div><!-- cr_overlay -->



<?php get_footer(); ?>
