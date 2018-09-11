<?php get_header(); ?>



<div class="internal_main">
	
	<div class="not_found">
	
	<span class="not_found_small_header">error code: 404</span><!-- not_found_small_header -->
	
	<h1>Page Not Found</h1>
	
	<span class="not_found_content">The page you were looking for appears to have been moved, deleted or does not exist. You could <span onclick="goBack()">go back</span> to where you were or head straight to our <a href="<?php bloginfo('url');?>">home page</a>. </span>
	
	<script type="text/javascript">

		function goBack() {
    	window.history.back();
		}

	</script>
	
	</div><!-- not_found -->
	
</div><!-- internal_main -->

			
<?php get_footer(); ?>