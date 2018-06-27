<?php get_header(); ?>
	<!-- Content -->
	<div class="contant-area">
		<main>
			<!-- middle section -->
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<aside class="sidebar col-md-4">Sidebar</aside>
						<div class="news col-md-8">
							<?php 
							// Se ouver algum post
								if( have_posts() ):
									// Enquanto houver posts, mostre-os pra gente
									while( have_posts() ): the_post();
						    ?>
						    
						    <article>
						    	<!-- Titulo -->
						    	<h2><?php the_title(); ?></h2>
						    	<!-- Date end Author -->
								<p><?php _e('Published in ','wpstarpixel') ?> <?php echo get_the_date(); ?> <?php _e('by ','wpstarpixel') ?> <?php the_author_posts_link(); ?></p>
								<!-- Categories -->
								<p><?php _e('Categories: ','wpstarpixel') ?> <?php the_category( ' '); ?></p>
								<!-- tags -->
								<p><?php the_tags(__('Tags: ', 'wpstarpixel'), ', '); ?></p>
						    	<!-- Content -->
						    	<!-- Content -->
						    	<?php the_content(); ?>
					    	</article>

					    <?php  
					     	endwhile;
					    else:
						 ?>
						 <p><?php _e('Theres nothing yet to be displayed...', 'wpstarpixel') ?></p>
						<?php endif; ?>
						</div>
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