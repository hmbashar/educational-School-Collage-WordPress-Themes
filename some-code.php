<?php
global $post;
$args = array( 'posts_per_page' => 3, 'post_type'=> 'promotion');
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>

	<?php 
		$promotions_icon = get_post_meta($post->ID, 'promotions_icon', true);
	?>

   <?php // your content ?>

<?php endforeach; ?>	