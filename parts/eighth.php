<section class="eighth">
	<h5>Últimos posts</h5>
	<div class="d-flex flex-column flex-md-row justify-content-center">
		<?php
			$recent_posts = wp_get_recent_posts(array(
	        	'numberposts' => 3, 
	        	'post_status' => 'publish'
    		));
			foreach($recent_posts as $post) : 
		?>
	        <span>
	            <a href="<?php echo get_permalink($post['ID']) ?>">
	            	<?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
	                <p><?php echo $post['post_title'] ?></p>
	            </a>
	        </span>
    	<?php endforeach; wp_reset_query(); ?>
	</div>
</section>