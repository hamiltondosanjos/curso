	<!-- footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="copyright col-md-7 col-4">
					<!-- Chamando o Theme Mod do copyright -->
					<p><?php echo get_theme_mod('set_copyright'); ?></p>
				</div>
				<nav class="footer-menu col-sm-5 col-8 text-right">
					<?php 
						wp_nav_menu(
							array(
								'theme_location' => 'my_footer_menu'
							)
						);
					 ?>
				</nav>
			</div>
		</div>
	</footer>
	<!-- / footer -->
	<?php wp_footer(); ?>
</body>
</html>