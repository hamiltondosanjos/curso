<!-- post_class(); Funcao que dá a div article a classe correspondente ao seu formato -->
<article <?php post_class(array('class'=>'featured')); ?>>
	<!-- Mostra o formato do post -->
	<?php echo get_post_format(); ?>
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('large', array('class'=>'img-fluid')) ; ?>
		</a>
	</div>
	<!-- Titulo -->
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<!-- featured image-->
	<div class="meta-info">
		<p>
			<?php _e('by ','wpstarpixel') ?><span> <?php the_author_posts_link(); ?></span>
			<?php _e('Categories: ','wpstarpixel') ?> <?php the_category( ' '); ?></span>
			<?php the_tags(__('Tags: ', 'wpstarpixel'), ', '); ?>
		</p>
	</div> 
	<!-- Content -->
	<?php the_excerpt(); ?>
</article>