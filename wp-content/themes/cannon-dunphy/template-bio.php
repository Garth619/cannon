<?php 

/* Template Name: Att Bio */

get_header(); ?>


<div class="internal_title_wrapper">
	
	<div class="internal_title_inner">
		
		<div class="att_spacer">
			
		</div><!-- att_spacer -->
		
		<div class="att_title_wrapper">
			
			<h1><?php the_title();?></h1>
		
			<span class="att_postion"><?php the_field( 'attorney_sub_header' ); ?></span><!-- att_postion -->
			
		</div><!-- att_title_wrapper -->
		
	</div><!-- internal_title_inner -->
	
</div><!-- internal_title_wrapper -->

<div id="internal_trigger" class="internal_main att_col">
	
		<?php get_sidebar('att'); ?>
		
		<div class="mobile_att_image_wrapper">
			
			<?php $attorney_image = get_field( 'attorney_image' ); ?>

			<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
			
		</div><!-- mobile_att_image_wrapper -->
			
		<div class="container content">
			
					 <?php get_template_part( 'loop', 'page' ); ?>
					 
					 	<?php if(get_field('accolades_logos')): ?>
							
							<div class="accolades_wrapper">
								
								<span class="accolades_title"><?php the_field( 'accolades_slider_title' ); ?></span><!-- accolades_title -->
								
								<div class="accolade_inner">
								
									<div class="acco_arrow acco_arrow_left">
									
										<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/arrows.svg"); ?>
									
									</div><!-- _arrow_left -->
									
									<div class="accolade_slider">
										
										
										 
											<?php while(has_sub_field('accolades_logos')): ?>
											
												<div class="accolade_single_slide">
											
													<?php $accolade_logo = get_sub_field( 'accolade_logo' ); ?>
		
													<img src="<?php echo $accolade_logo['url']; ?>" alt="<?php echo $accolade_logo['alt']; ?>" />
											
												</div><!-- accolade_single_slide -->
												
											<?php endwhile; ?>
										 
										

									</div><!-- accolade_slider -->
									
									<div class="acco_arrow acco_arrow_right">
									
										<?php echo file_get_contents("wp-content/themes/cannon-dunphy/images/arrows.svg"); ?>
									
									</div><!-- _arrow_left -->
								
								</div><!-- accolade_inner -->
								
							</div><!-- accolades_wrapper -->
							
							<?php endif; ?>
		
		</div><!-- container -->
		

</div><!-- internal_main -->

<?php get_footer(); ?>
