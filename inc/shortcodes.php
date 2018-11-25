<?php 

function wishlist_shortcode($atts){
	extract( shortcode_atts( array(
		'expand' => '',
	), $atts, 'wishlist' ) );
	
    $q = new WP_Query(
        array('posts_per_page' => '4', 'post_type' => 'wishlist-items', 'meta_key' => 'order_number','orderby' => 'meta_value','order' => 'ASC')
        );		
		
		
	$list = '<div class="wishlist_item_list">';
	while($q->have_posts()) : $q->the_post();
		$idd = get_the_ID();
		$wishlist_email = get_post_meta($idd, 'wishlist_email', true); 
		$order_number = get_post_meta($idd, 'order_number', true);
		$list .= '
		<div class="single_wishlist">
			<div class="wishlist_top">
				<p>' .do_shortcode( get_the_title() ). ' <a href="mailto:'.$wishlist_email.'">'.$wishlist_email.'</a></p>
			</div>
			
			<div class="wishlist_bottom">
				' .do_shortcode( get_the_content() ). '
			</div>
		</div>
		';        
	endwhile;
	$list.= '</div>';
	wp_reset_query();
	return $list;
}
add_shortcode('wishlist', 'wishlist_shortcode');	






function core_list_shortcode( $atts, $content = null  ) {

	extract( shortcode_atts( array(
		'id' => '',
	), $atts ) );

	return 'jQuery("#codeapp'.$id.'").show();';
}	
add_shortcode('core', 'core_list_shortcode');


function column_shortcode( $atts, $content = null  ) {
	return '<div class="column_content">'.do_shortcode($content).'</div>';
}	
add_shortcode('col', 'column_shortcode');


?>