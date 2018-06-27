<?php  get_header(); ?>
	<div id="primary">
		<div id="main">
			<div class="container">
				<h2><?php _e('Search results for: ', 'wpstarpixel') ?></h2><?php echo get_search_query(); ?>
		
				<div class="row">
					<div class="col-12">
						<?php get_search_form(); ?>
					</div>
				</div>

				<div class="row">
					<div class="news col-md-8">
						<?php 
								while(have_posts() ): the_post();
									get_template_part('template-parts/content', 'search');
									if (comments_open() || get_comments_number() ) :
										comments_template();
								endif;
							endwhile;
							the_posts_pagination(
								array(
									'prev_text' => 'Previous',
									'next_text' => 'Next',
									'screen_reader_text'=>' '

								)
							);
						 ?>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>