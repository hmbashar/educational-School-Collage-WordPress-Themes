<?php 
add_action( 'init', 'blentech_theme_custom_post' );
function blentech_theme_custom_post() {
	register_post_type( 'student',
		array(
			'labels' => array(
				'name' => __( 'Student', 'edu_text_domain' ),
				'singular_name' => __( 'Student', 'edu_text_domain' ),
				'add_new' => __( 'Add New Student', 'edu_text_domain' ),
				'add_new_item' => __( 'Add New Student', 'edu_text_domain' ),
				'edit_item'		=> __('Edit Student Info', 'edu_text_domain'),
				'view_item'		=> __('View Student Info', 'edu_text_domain'), 				
				'not_found' => __( 'Sorry, we couldn\'t find the Student you are looking for.', 'edu_text_domain' )
			),
			'public' => true,
			'menu_icon'	=> 'dashicons-admin-users',
			'supports' => array('title', 'custom-fields', 'thumbnail'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'student'),
			'capability_type' => array(  edu_custom_role, edu_custom_role . 's',  ), // We could slimly use STUDENT_ROLE_ID but we did a array of 2. second one follows capabilities for plural objects.
		)
	);	
	register_post_type( 'teachers',
		array(
			'labels' => array(
				'name' => __( 'Teachers', 'edu_text_domain' ),
				'singular_name' => __( 'Teachers', 'edu_text_domain' ),
				'add_new' => __( 'Add New Teachers', 'edu_text_domain' ),
				'add_new_item' => __( 'Add New Teachers', 'edu_text_domain' ),
				'edit_item'		=> __('Edit Teachers Info', 'edu_text_domain'),
				'view_item'		=> __('View Teachers Info', 'edu_text_domain'), 
				'not_found' => __( 'Sorry, we couldn\'t find the Teachers you are looking for.', 'edu_text_domain' )
			),
			'public' => true,			
			'menu_icon'	=> 'dashicons-admin-users',
			'supports' => array('title', 'custom-fields', 'thumbnail'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'teacher'),
			'capability_type' => array( edu_custom_role,  edu_custom_role . 's',  ), // We could slimly use STUDENT_ROLE_ID but we did a array of 2. second one follows capabilities for plural objects.
		)
	);
	
}




?>