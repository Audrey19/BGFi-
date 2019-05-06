
	<!-- MAIN APP -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); echo '/main.js?' . filemtime( get_stylesheet_directory() . '/main.js'); ?>"></script>
	<?php wp_footer(); ?>

	<section>
		<div class="menu_secondary">
			<?php wp_nav_menu(array('menu_id' => 'menu_container','theme_location' => 'secondary' )); ?> 
			<img  class="linkedin" src="<?php echo get_bloginfo('template_url') ?>/assets/images/linkedin.png" alt="linkedin"/>
		</div>
		
		<div class="menu_ternary">
			<img  class="ptc" src="<?php echo get_bloginfo('template_url') ?>/assets/images/ptc_logo.png" alt="logo_ptc"/>
			<?php wp_nav_menu(array('menu_id' => 'menu_container','theme_location' => 'ternary' )); ?> 
		</div>
	</section>
</body>
</html>
