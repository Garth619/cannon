
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="blog_post_single">
		
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		
		<div class="meta">
			
			<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span>
			
			<span class="divider">|</span>
			
			<span><?php echo get_the_category_list();?></span>
			
		</div><!-- meta -->
		
		<div class="post_content">
			
			<?php echo wp_trim_words( get_the_content(), 54, '...' );?>
			
			<?php edit_post_link( __( 'Edit'), '', '' ); ?>
			
		</div><!-- post_content -->
		
		<a class="read_more" href="<?php the_permalink();?>">Read More</a><!-- read_more -->
		
	</div><!-- blog_post_single -->

	
			
		
			
		
<?php endwhile; // end of loop ?>

<?php endif; ?>

<div class="pagination">

	<?php wpbeginner_numeric_posts_nav(); ?>

</div><!-- pagination -->


<!--
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	
	<div id="nav-below" class="navigation">
		
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts' ) ); ?></div>
			
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>') ); ?></div>
	
	</div>

<?php endif; ?>
-->

