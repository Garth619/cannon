<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title();?></h2>
	
	<div class="meta">
			
			<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span>
			
			<span class="divider">|</span>
			
			<span><?php echo get_the_category_list();?></span>
			
		</div><!-- meta -->
	
	<?php the_content();?>
	
	<?php edit_post_link( __( 'Edit'), '', '' ); ?>

<?php endwhile; // end of loop ?>

<?php endif; ?>