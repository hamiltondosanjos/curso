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
						<div class="news col-md-8">
							<?php 
							// Se ouver algum post
								if( have_posts() ):
									// Enquanto houver posts, mostre-os pra gente
									while( have_posts() ): the_post();

							    ?>
							   <!-- Essa funçao busca as partes do tema. O primeiro parametro faz a busca do caminho. O segundo, busca o formato de post selecionado via painel WP -->
							    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

							    <?php  
							     	endwhile;
							     	?>
										<!-- Paginacao -->
										<div class="row">
											<div class="pages text-left col-6">
												<?php previous_posts_link( "<< Newer posts"); ?>
											</div>
											<div class="pages text-right col-6">
												<?php next_posts_link( "Older posts >>"); ?>
											</div>
										</div>

							     	<?php
							    else:
								 ?>
							 		<p><?php _e('Theres nothing yet to be displayed...', 'wpstarpixel') ?></p>
								<?php endif; ?>
						</div>
						<?php get_sidebar('blog'); ?>
					</div>
				</div>
			</section>
		</main>
	</div>
	<!-- / Content -->
<?php get_footer(); ?>