<?php get_header(); ?>
<!-- Parametros para customizar as imagens -->
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	<!-- Content -->
	<div class="contant-area">
		<main>
			<!-- middle section -->
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<div class="erro-404">
							<header>
								<h1><?php _e('Page not found', 'wpstarpixel') ?></h1>
								<p><?php _e('Unfortunately, the page you tried to reach does not exist on this site!', 'wpstarpixel') ?></p>
							</header>
							<div class="error">
								<p><?php _e('How about doing a sarch?', 'wpstarpixel') ?></p>
								<?php get_search_form(); ?>
								<?php the_widget(
										'WP_Widget_Recent_Posts',
										array('title'=> __('Lasted Posts', 'wpstarpixel'),
										'number' => 3
										)
									);
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
	<!-- / Content -->
<?php get_footer(); ?>