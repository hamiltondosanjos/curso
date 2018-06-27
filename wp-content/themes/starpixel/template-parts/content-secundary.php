<!-- post_class(); Funcao que dá a div article a classe correspondente ao seu formato -->
<article <?php post_class(array('class'=>'secundary')); ?>>
	<!-- Mostra o formato do post -->
	<?php echo get_post_format(); ?>
	<!-- Titulo -->
	<h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class'=>'img-fluid')) ; ?></a>
	</div>
	<!-- featured image-->
	<div class="meta-info">
		<p>
			by <span><?php the_author_posts_link(); ?></span>
			<?php _e('Categories: ','wpstarpixel') ?><span><?php the_category( ' ' ); ?></span>
			<?php the_tags(__('Tags: ', 'wpstarpixel'), ', '); ?>
		</p> 
	<!-- Content -->
	<?php the_excerpt(); ?>
</article>