<div class="att_sidebar">
	
	
	<div class="att_sidebar_img_wrapper">
		
		<?php $attorney_image = get_field( 'attorney_image' ); ?>

		<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
		
	</div><!-- att_sidebar_img_wrapper -->
	
	<div class="att_bio_list_wrapper">
		
		
		<?php if(get_field('accolades')): ?>
		
			<?php while(has_sub_field('accolades')): ?>
			
			<div class="att_bio_list">
			
			<span class="att_bio_list_title"><?php the_sub_field( 'accolades_title' ); ?></span><!-- att_bio_list_title -->
		 
			<ul>
		 
				<?php if(get_sub_field('accolades_bullets')): ?>
				 
					<?php while(has_sub_field('accolades_bullets')): ?>
				 
						<li><?php the_sub_field( 'accolades_bullet' ); ?>
						
						
						<?php if(get_sub_field('accolades_sub_bullets')): ?>
						
							<ul>
						 
							<?php while(has_sub_field('accolades_sub_bullets')): ?>
						 
									<li><?php the_sub_field( 'accolades_sub_bullets' ); ?></li>
						    
							<?php endwhile; ?>
							
							</ul>
						 
						<?php endif; ?>
						
						
						</li>
				    
					<?php endwhile; ?>
					
					</ul>
					
			</div><!-- att_bio_list -->
				 
				<?php endif; ?>
		    
			<?php endwhile; ?>
			
		<?php endif; ?>
		

	</div><!-- att_bio_list_wrapper -->
	
	
</div><!-- att_sidebar -->