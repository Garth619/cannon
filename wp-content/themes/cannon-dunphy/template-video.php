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
					
					if(get_field('single_videos')):
					 
						while(has_sub_field('single_videos')):
									
						 	$arrayvalue[] = get_sub_field('video_category_title');
									
						endwhile;
					 
					endif;
					
					$unique = array_unique(array_merge($myarray, $arrayvalue), SORT_REGULAR);
					
					sort($unique);
					
					echo "<ul>";
						
					foreach ($unique as $value) {
						
						$rules[] = ",";
						$rules[] = " ";
						$rules[] = "'";
						
						$datatag = (str_replace($rules,"-", strtolower($value))); 
						
						echo '<li data-tag="' . $datatag . '">' . $value . '</li>';
					
					}
					
					echo "</ul>";
					
				?>
								
			</div><!-- select_dropdown -->
			
		</div><!-- select -->
		
		
		<div class="videos_wrapper">
			
			
			<?php if(get_field('single_videos')): ?>
			 
				<?php while(has_sub_field('single_videos')):
					
					$casetype = get_sub_field('video_category_title');
					
					$rules[] = ",";
					$rules[] = " ";
					$rules[] = "'";
						
					$tabclass = (str_replace($rules, '-', strtolower($casetype))); ?>
				
					<div class="single_video <?php echo $tabclass; ?>">
				
						<a href="//www.youtube-nocookie.com/embed/<?php the_sub_field( 'youtube_id' ); ?>?rel=0&amp;showinfo=0;autoplay=1" data-lity >
					
						<div class="youtube_thumb">
						
							<img src="https://img.youtube.com/vi/<?php the_sub_field( 'youtube_id' ); ?>/maxresdefault.jpg"/>
						
							<div class="yt_overlay"></div><!-- yt_overlay -->
						
							<div class="internal_video_wrapper">
						
								<div class="internal_video_button">
							
									<div class="internal_video_button_inner"></div><!-- internal_video_button_inner -->
								
									<div class="video_button_tri"></div><!-- video_button_tri -->
							
								</div><!-- internal_video_button -->
						
							</div><!-- internal_video_wrapper -->
						
						</div><!-- youtube_thumb -->
					
						<span class="single_video_title"><?php the_sub_field( 'video_title' ); ?></span><!-- single_video_title -->
					
						<span class="video_category"><?php the_sub_field( 'video_category_title' ); ?></span><!-- video_category -->
					
					</a>
				
				</div><!-- single_video -->
					
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			

			
		</div><!-- videos_wrapper -->
		
		
				
</div><!-- internal_main -->

<div class="cr_overlay">
	
	<div class="cr_overlay_inner">
		
		<div class="overlay_close"></div><!-- overlay_close -->
		
		<div class="overlay_data_clone"></div><!-- overlay_data_clone -->
				
	</div><!-- cr_overlay_inner -->
	
</div><!-- cr_overlay -->



<?php get_footer(); ?>
