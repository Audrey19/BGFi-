
	<!-- MAIN APP -->
	<section class="footer_img">
	<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/footer.png" alt="check">
	</section>

	<section class="container_footer">
		<div class="menu_secondary">
			<?php wp_nav_menu(array('menu_id' => 'menu_container','theme_location' => 'secondary' )); ?> 
			<a href="https://www.linkedin.com/company/bgfi-groupe/"><img  class="linkedin" src="<?php echo get_bloginfo('template_url') ?>/assets/images/linkedin.png" alt="linkedin"/></a>
		</div>
		
		<div class="menu_ternary">
			<div class="menu_ternary_container">
				<a href="https://www.positivethinkingcompany.com/"><img  class="ptc" src="<?php echo get_bloginfo('template_url') ?>/assets/images/ptc_logo.png" alt="logo_ptc"/></a>
				<?php wp_nav_menu(array('menu_id' => 'menu_container','theme_location' => 'ternary' )); ?> 
			</div>
		</div>
	</section>

	<script 
    src="https://code.jquery.com/jquery-1.12.3.js"   
    integrity="sha256-1XMpEtA4eKXNNpXcJ1pmMPs8JV+nwLdEqwiJeCQEkyc="   
	crossorigin="anonymous"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/library/slick.min.js"></script>

	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); echo '/main.js?' . filemtime( get_stylesheet_directory() . '/main.js'); ?>"></script>
	<?php wp_footer(); ?>
</body>
</html>
