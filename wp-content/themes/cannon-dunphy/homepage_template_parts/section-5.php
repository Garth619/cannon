<section id="section_five">
	
	<div class="section_five_inner">
		
		<img class="skyline" data-src="<?php bloginfo('template_directory');?>/images/content2_icon.svg"/><!-- skyline -->
		
		<span class="sec_five_large_header"><?php the_field( 'section_five_header' ); ?></span><!-- sec_five_large_header -->
		
		<div class="meet_att_wrapper">
			
			<span class="meet_att_line left"></span><!-- meet_att_line -->
			
			<a class="meet_att_link" href="<?php the_field( 'meet_attorneys_page_link' ); ?>"><?php the_field( 'meet_attorneys_verbiage' ); ?></a><!-- meet_att_link -->
			
			<span class="meet_att_line right"></span><!-- meet_att_line -->
			
			</div><!-- meet_att_wrapper -->
			
			<div class="sec_five_content content">
				
				<?php the_field( 'section_five_content' ); ?>
			
		</div><!-- sec_five_content -->
		
	</div><!-- section_five_inner -->
	
</section><!-- section_five -->