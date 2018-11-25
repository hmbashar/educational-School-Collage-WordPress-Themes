<?php 
function custom_post_taxonomy() {

	register_taxonomy(
		'student_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'student',                  //post type name
		array(
			'hierarchical'          => true,
			'label'                         => 'Student Category',  //Display name
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'student-category', // This controls the base slug that will display before each term
				'with_front'    => true // Don't display the category base before
				)
			)
	);
	register_taxonomy(
		'teacher_cat',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'teachers',                  //post type name
		array(
			'hierarchical'          => true,
			'label'                         => 'Teacher Category',  //Display name
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'teacher-category', // This controls the base slug that will display before each term
				'with_front'    => true // Don't display the category base before
				)
			)
	);

	register_taxonomy(
		'student_year',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'student',                  //post type name
		array(
			'hierarchical'          => true,
			'label'                         => 'Year',  //Display name
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'student-year', // This controls the base slug that will display before each term
				'with_front'    => true // Don't display the category base before
				)
			)
	);
	register_taxonomy(
		'teacher_year',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
		'teachers',                  //post type name
		array(
			'hierarchical'          => true,
			'label'                         => 'Year',  //Display name
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'teacher-year', // This controls the base slug that will display before each term
				'with_front'    => true // Don't display the category base before
				)
			)
	);

}
add_action( 'init', 'custom_post_taxonomy');   






?>