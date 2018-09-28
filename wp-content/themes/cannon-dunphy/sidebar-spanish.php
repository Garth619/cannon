<div class="sidebar_wrapper">
	
	<div class="sidebar_form">
		
		<span class="sidebar_request">request your free consultation</span><!-- sidebar_request -->
		
		<span class="sidebar_get_started">Programe Su Consulta Gratuita</span><!-- sidebar_get_started -->
		
		<span class="sidebar_required">* Required Field</span><!-- sidebar_required -->
		
		<?php gravity_form(4, false, false, false, '', true, 505); ?>
		
	</div><!-- sidebar_form -->
	
	<div class="sidebar_pa">
		
		<div class="sidebar_pa_inner">
		
			<span class="sidebar_pa_title">Areas de Práctica</span><!-- sidebar_pa_title -->
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'spanish_menu' ) ); ?>
		
		</div><!-- sidebar_pa_inner -->

		
	</div><!-- sidebar_pa -->

	
</div><!-- sidebar_wrapper -->