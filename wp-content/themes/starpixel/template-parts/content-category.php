<!-- post_class(); Funcao que dá a div article a classe correspondente ao seu formato -->
<article <?php post_class(); ?>>
	<!-- Mostra o formato do post -->
	<?php echo get_post_format(); ?>
	<!-- Titulo -->
	<h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
	<!-- featured image-->
	<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail( 'medium', array( 'class' => 'alignleft' ) ) ; ?>
	</a>
	<div class="meta-info">
		<!-- Categories -->
		<p><?php _e('Categories: ','wpstarpixel') ?> <?php the_category( ' '); ?></p>
		<!-- Date end Author -->
		<p><?php _e('Published in ','wpstarpixel') ?> <?php echo get_the_date(); ?> <?php _e('by ','wpstarpixel') ?> <?php the_author_posts_link(); ?></p>
		<!-- tags -->
		<p><?php the_tags(__('Tags: ', 'wpstarpixel'), ', '); ?></p>
	</div> 
	<!-- Content -->
	<?php the_excerpt(); ?>
</article>