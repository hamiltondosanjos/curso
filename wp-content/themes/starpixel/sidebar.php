<!-- Ativando as sidebars -->
<?php if(is_active_sidebar('sidebar-1')): ?>
	<aside class="sidebar col-md-4 h-100">
	<?php dynamic_sidebar('sidebar-1'); ?>
	</aside>
	<?php else: ?>
	<p><?php _e('Theres nothing yet to be displayed...', 'wpstarpixel') ?></p>
<?php endif; ?>