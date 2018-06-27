<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1><?php the_title(); ?></h1>
		<?php the_post_thumbnail( 'medium', array( 'class' => 'alignleft' ) ) ; ?>
		<div class="meta-info">
	
			<!-- Date end Author -->
			<p><?php _e('Published in ','wpstarpixel') ?> <?php echo get_the_date(); ?> <?php _e('by ','wpstarpixel') ?> <?php the_author_posts_link(); ?></p>
			<!-- Categories -->
			<p><?php _e('Categories: ','wpstarpixel') ?> <?php the_category( ' '); ?></p>
			<!-- tags -->
			<p><?php the_tags(__('Tags: ', 'wpstarpixel'), ', '); ?></p>
		</div>
	</header>
	<div class="content">
		<?php the_content(); ?>
	</div>

</article>