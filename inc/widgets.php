<?php 

function edu_theme_widget() {

  
	register_sidebar( array(
		'name' => __( 'Footer Widget One', 'edu_text_domain' ),
		'id' => 'footer_widget_one',
		'before_widget' => '<div class="single_footer_widget floatleft">',
		'after_widget' => '</div>',
		'before_title' => '<h2">',
		'after_title' => '</h2>',
	) );
  
	register_sidebar( array(
		'name' => __( 'Footer Widget Two', 'edu_text_domain' ),
		'id' => 'footer_widget_two',
		'before_widget' => '<div class="single_footer_widget floatleft">',
		'after_widget' => '</div>',
		'before_title' => '<h2">',
		'after_title' => '</h2>',
	) );
  
	register_sidebar( array(
		'name' => __( 'Footer Widget Three', 'edu_text_domain' ),
		'id' => 'footer_widget_three',
		'before_widget' => '<div class="single_footer_widget floatleft">',
		'after_widget' => '</div>',
		'before_title' => '<h2">',
		'after_title' => '</h2>',
	) );


}
add_action('widgets_init', 'edu_theme_widget');

?>