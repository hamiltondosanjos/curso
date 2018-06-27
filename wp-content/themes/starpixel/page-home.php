<?php get_header(); ?>
	<!-- Content -->
	<div class="contant-area">
		<main>
			<!-- Slide Section -->
			<section class="slide">
				<?php
				$design = get_theme_mod('set_slider_option');
				$limit =  get_theme_mod('set_slider_limit');

				 echo do_shortcode('[recent_post_slider design="design-' . $design . ' " limit=" ' . $limit . ' "]'); ?>

			</section>
			<!-- Service Section -->
			<section class="services">
				<div class="container">
					<h1><?php _e('Our Services', 'wpstarpixel') ?></h1>
					<div class="row">
						<div class="col-sm-4">
							<div class="services-item"> 
								<?php if ( is_active_sidebar( 'services-1' )) {
								dynamic_sidebar('services-1');
							} ?>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="services-item">
								<?php if ( is_active_sidebar( 'services-2' )) {
								dynamic_sidebar( 'services-2' );
							} ?>
							</div>
							
						</div>
						<div class="col-sm-4">
							<div class="services-item">
								<?php if ( is_active_sidebar( 'services-3' )) {
								dynamic_sidebar( 'services-3' );
							} ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- middle section -->
			<section class="middle-area">
				<div class="container">
					<div class="row">
						
						<div class="news col-md-8">
							<div class="container">
								<h1><?php _e('Lasted News', 'wpstarpixel') ?></h1>
								<div class="row">
									<?php
										// Cria-se o objeto Featured com a intensao de personalizar a consulta do loop do WP
										$featured = new WP_Query('post_type=post&posts_per_page=1&cat=1,4');
										if ($featured->have_posts() ):
											while($featured->have_posts() ): $featured->the_post();
									?>
									<div class="col-12">
										<?php get_template_part('template-parts/content', 'featured'); ?>
									</div>
									<?php  
										endwhile;
										// Reseta a consulta acima, IMPORTANT
										wp_reset_postdata();
										endif;

										// Segundo Loop
										$args = array(
										'post_type' => 'post',
										'posts_per_page' => 2,
										//'category__not_in' => array(),
										//'category__in' => array( 1, 4 ),
										'offset' => 1
									);

										$secondary = new WP_Query( $args );

										if( $secondary->have_posts() ):
											while( $secondary->have_posts() ): $secondary->the_post();
										?>

										<div class="col-sm-6">
											<?php get_template_part( 'template-parts/content', 'secundary' ); ?>
										</div>

										<?php
											endwhile;
											// Reseta a consulta acima, IMPORTANT
											wp_reset_postdata();
										endif;									
									?>
								</div>
							</div>
						</div>
						<?php get_sidebar('blog'); ?>
					</div>
				</div>
			</section>
			<!-- Map Section -->
			<section class="map">

				<?php 
					$key = get_theme_mod('set_map_apikey');
					//urlencode => essa funcao nativa do php tira caracteres especiais, espaços, evitando que o endereço seja invalido
					$address = urlencode (get_theme_mod('set_map_address'));

				 ?>
				<iframe
				  width="100%"
				  height="350"
				  frameborder="0" style="border:0"
				  src="https://www.google.com/maps/embed/v1/place?key=<?php echo $key ?>&q=<?php echo $address ?>&zoom=15" allowfullscreen>
				</iframe>
			</section>
		</main>
	</div>
	<!-- / Content -->
<?php get_footer(); ?>