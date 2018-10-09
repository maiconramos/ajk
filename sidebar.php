<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="sidebar" class="primary-sidebar widget-area" role="complementary">
        <ul>
	        <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </ul>
	</div>
<?php endif; ?>