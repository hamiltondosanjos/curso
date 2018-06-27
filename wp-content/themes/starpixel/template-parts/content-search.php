<!-- post_class(); Funcao que dá a div article a classe correspondente ao seu formato -->
<article <?php post_class(); ?>>
	<!-- Mostra o formato do post -->

	<!-- Titulo -->
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<!-- featured image-->
	<div class="meta-info">
		<!-- Date end Author -->
		<p><?php _e('Published in ','wpstarpixel') ?> <?php echo get_the_date(); ?><?php _e('by ','wpstarpixel') ?><?php the_author_posts_link(); ?>
		<?php if(has_category() ): ?>
			<?php _e('Categories: ','wpstarpixel') ?> <?php the_category( ' '); ?><?php the_tags(__('Tags: ', 'wpstarpixel'), ', '); ?></p>
		<?php endif; ?>
	</div> 
	<!-- Content -->
	<?php the_excerpt(); ?>
</article>