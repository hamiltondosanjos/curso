<?php 
	// Template Name: General Template
	// 
 ?>

 <?php get_header(); ?>
	<!-- Content -->
	<div class="contant-area">
		<main>
			<!-- middle section -->
			<section class="middle-area">
				<div class="container">
					<div class="general-template">
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
					    	<?php the_content(); ?>
					    </article>

					    <?php  
					     	endwhile;
					    else:
						 ?>
						 <p>There's nothing yet to be displayed...</p>
						<?php endif; ?>
					</div>
				</div>
			</section>
		</main>
	</div>
	<!-- / Content -->
<?php get_footer(); ?>