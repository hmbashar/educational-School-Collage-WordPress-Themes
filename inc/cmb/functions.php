<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes['student_metabox'] = array(
		'id'         => 'student_metabox',
		'title'      => __( 'Student\'s Information', 'edu_text_domain' ),
		'pages'      => array( 'student', ), // Post type
		'fields'     => array(
			array(
				'name'       => __( 'Form Number', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Registration Form Number', 'edu_text_domain' ),
				'id'         => 's_form_number',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'Registration Date', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Registration Date', 'edu_text_domain' ),
				'id'         => 's_registration_date',
				'type'       => 'text_date',
			),
			array(
				'name'       => __( 'Father Name', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Father Name', 'edu_text_domain' ),
				'id'         => 's_father_student_name',
				'type'       => 'text_medium',
			),
			array(
				'name'       => __( 'Father Profession', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Father Name', 'edu_text_domain' ),
				'id'         => 's_father_profession_student_name',
				'type'       => 'text_medium',
			),
			array(
				'name'       => __( 'Mother Name', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Mother Name', 'edu_text_domain' ),
				'id'         => 's_mother_student_name',
				'type'       => 'text_medium',
			),
			array(
				'name'       => __( 'Mother Profession', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Mother Profession', 'edu_text_domain' ),
				'id'         => 's_mother_profession_student_name',
				'type'       => 'text_medium',
			),
			array(
				'name'       => __( 'Guardian Name', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Guardian Name', 'edu_text_domain' ),
				'id'         => 's_student_guardian_name',
				'type'       => 'text_medium',
			),
			array(
				'name'       => __( 'Guardian Mobile Number', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Guardian Mobile Number', 'edu_text_domain' ),
				'id'         => 's_student_guardian_mo_no',
				'type'       => 'text_medium',
			),
			array(
				'name'       => __( 'Class Roll', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Class Roll', 'edu_text_domain' ),
				'id'         => 's_student_class_roll',
				'type'       => 'text_small',
			),
			array(
				'name'       => __( 'Registration Number', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Registration Number', 'edu_text_domain' ),
				'id'         => 's_student_registration_no',
				'type'       => 'text_small',
			),
			array(
				'name'       => __( 'Date Of Birth', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Date Of Birth', 'edu_text_domain' ),
				'id'         => 's_student_date_of_birth',
				'type'       => 'text_date',
			),
			array(
				'name'       => __( 'Gender', 'edu_text_domain' ),
				'desc'       => __( 'Select Student Gender', 'edu_text_domain' ),
				'id'         => 's_student_gender',
				'type'    => 'radio',
				'options' => array(
					'Male' => __( 'Male', 'cmb' ),
					'Female' => __( 'Female', 'cmb' ),
				),
			),
			array(
				'name'       => __( 'Parent Yearly income', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Parent Yearly income', 'edu_text_domain' ),
				'id'         => 's_student_yearly_income',
				'type'       => 'text_money',
				'before'     => __('$', 'edu_text_domain'), 
			),
			array(
				'name'       => __( 'Permanent Address', 'edu_text_domain' ),
				'id'         => 'PermanentAddress',
				'type'       => ' ',
			),
			array(
				'name'       => __( 'Village', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Permanent Village Name', 'edu_text_domain' ),
				'id'         => 's_student_per_village',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'Post Office', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Permanent Post Office Name', 'edu_text_domain' ),
				'id'         => 's_student_per_post_office',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'Upzilla', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Permanent Upzilla Name', 'edu_text_domain' ),
				'id'         => 's_student_per_upzilla',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'District', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Permanent District Name', 'edu_text_domain' ),
				'id'         => 's_student_per_district',
				'type'       => 'text_medium',
			),
			array(
				'name'       => __( 'Present Address', 'edu_text_domain' ),
				'id'         => 'PermanentAddress',
				'type'       => ' ',
			),
			array(
				'name'       => __( 'Village', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Present Village Name', 'edu_text_domain' ),
				'id'         => 's_student_pres_village',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'Post Office', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Present Post Office Name', 'edu_text_domain' ),
				'id'         => 's_student_pres_post_office',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'Upzilla', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Present Upzilla Name', 'edu_text_domain' ),
				'id'         => 's_student_pres_upzilla',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'District', 'edu_text_domain' ),
				'desc'       => __( 'Input Student Present District Name', 'edu_text_domain' ),
				'id'         => 's_student_pres_district',
				'type'       => 'text_medium',
			),
			array(
				'name'       => __( 'That was before school', 'edu_text_domain' ),
				'desc'       => __( 'Input Student That was before school Name', 'edu_text_domain' ),
				'id'         => 's_student_before_school_name',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'Permission User ID', 'edu_text_domain' ),
				'desc'       => __( 'Input Permission User id, if you want to show any pepole for view the information, but this is not require. this is optional.', 'edu_text_domain' ),
				'id'         => 's_permission_id',
				'type'       => 'text_small',
			),
		),
	);

// Teacher Metaboxes

	$meta_boxes['teacher_metabox'] = array(
		'id'         => 'teacher_metabox',
		'title'      => __( 'Teacher\'s Information', 'edu_text_domain' ),
		'pages'      => array( 'teachers', ), // Post type
		'fields'     => array(
			array(
				'name'       => __( 'Index Number', 'edu_text_domain' ),
				'desc'       => __( 'Input Teacher Index Number', 'edu_text_domain' ),
				'id'         => 't_index_no',
				'type'       => 'text_small',
			),
			array(
				'name'       => __( 'Designation', 'edu_text_domain' ),
				'desc'       => __( 'Input Designation', 'edu_text_domain' ),
				'id'         => 't_designation',
				'type'       => 'text_medium',
			),
			array(
				'name'       => __( 'Experience', 'edu_text_domain' ),
				'desc'       => __( 'Input Experience', 'edu_text_domain' ),
				'id'         => 't_experience',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'Birthday', 'edu_text_domain' ),
				'desc'       => __( 'Input Birthday', 'edu_text_domain' ),
				'id'         => 't_date_of_birth',
				'type'       => 'text_date',
			),
			array(
				'name'       => __( 'Join Date', 'edu_text_domain' ),
				'desc'       => __( 'Input Join Date', 'edu_text_domain' ),
				'id'         => 't_join_date',
				'type'       => 'text_date',
			),
			array(
				'name'       => __( 'Email Address', 'edu_text_domain' ),
				'desc'       => __( 'Input Email Address', 'edu_text_domain' ),
				'id'         => 't_email_address',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'Permanent Employment Date', 'edu_text_domain' ),
				'desc'       => __( 'Input Employment Permanenly Date', 'edu_text_domain' ),
				'id'         => 't_emp_permanent',
				'type'       => 'text_date',
			),
			array(
				'name'       => __( 'Teacher Subjects Name', 'edu_text_domain' ),
				'desc'       => __( 'Input Teacher Subjects Name, example: Bangla, English, Math', 'edu_text_domain' ),
				'id'         => 't_subjects_name',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'Mobile Number', 'edu_text_domain' ),
				'desc'       => __( 'Input Teacher Mobile Number', 'edu_text_domain' ),
				'id'         => 't_mobile_number',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'Promotion Name', 'edu_text_domain' ),
				'desc'       => __( 'Input Promostion Name if you have, but not require.', 'edu_text_domain' ),
				'id'         => 't_promostion_name',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'Promotion Date', 'edu_text_domain' ),
				'desc'       => __( 'Input Promostion Date if you have, but not require.', 'edu_text_domain' ),
				'id'         => 't_promostion_date',
				'type'       => 'text_date',
			),
			array(
				'name'       => __( 'Join Designation', 'edu_text_domain' ),
				'desc'       => __( 'Input the teacher Designation join name, example: Assistant Teacher', 'edu_text_domain' ),
				'id'         => 't_join_desi',
				'type'       => 'text_medium',
			),
			array(
				'name'       => __( 'Gender', 'edu_text_domain' ),
				'desc'       => __( 'Select Genger', 'edu_text_domain' ),
				'id'         => 't_gender',
				'type'    => 'radio',
				'options' => array(
					'Male' => __( 'Male', 'cmb' ),
					'Female' => __( 'Female', 'cmb' ),
				),
			),
			array(
				'name'       => __( 'Permission User ID', 'edu_text_domain' ),
				'desc'       => __( 'Input Permission User id, if you want to show any pepole for view the information, but this is not require. this is optional.', 'edu_text_domain' ),
				'id'         => 't_permission_user_id',
				'type'       => 'text_small',
			),
			array(
				'name'       => __( 'Permanent Address', 'edu_text_domain' ),
				'desc'       => __( 'Input the teacher Permanent Address name', 'edu_text_domain' ),
				'id'         => 'permanent_address',
				'type'		=> ''
			),			
			array(
				'name'       => __( 'Village', 'edu_text_domain' ),
				'desc'       => __( 'Input the teacher Village name', 'edu_text_domain' ),
				'id'         => 't_per_village',
				'type'       => 'text',
			),			
			array(
				'name'       => __( 'Post Office With Post Code', 'edu_text_domain' ),
				'desc'       => __( 'Input the teacher Post Office name, example: Patuakhali-8600', 'edu_text_domain' ),
				'id'         => 't_per_post_office',
				'type'       => 'text',
			),		
			array(
				'name'       => __( 'Upzilla', 'edu_text_domain' ),
				'desc'       => __( 'Input the teacher Upzilla name', 'edu_text_domain' ),
				'id'         => 't_per_upzilla',
				'type'       => 'text',
			),	
			array(
				'name'       => __( 'District', 'edu_text_domain' ),
				'desc'       => __( 'Input the teacher District name', 'edu_text_domain' ),
				'id'         => 't_per_district',
				'type'       => 'text',
			),
			array(
				'name'       => __( 'Present Address', 'edu_text_domain' ),
				'desc'       => __( 'Input the teacher Present Address name', 'edu_text_domain' ),
				'id'         => 'Present_address',
				'type'		=> ''
			),			
			array(
				'name'       => __( 'Village', 'edu_text_domain' ),
				'desc'       => __( 'Input the teacher Village name', 'edu_text_domain' ),
				'id'         => 't_pres_village',
				'type'       => 'text',
			),			
			array(
				'name'       => __( 'Post Office With Post Code', 'edu_text_domain' ),
				'desc'       => __( 'Input the teacher Post Office name, example: Patuakhali-8600', 'edu_text_domain' ),
				'id'         => 't_post_office',
				'type'       => 'text',
			),		
			array(
				'name'       => __( 'Upzilla', 'edu_text_domain' ),
				'desc'       => __( 'Input the teacher Upzilla name', 'edu_text_domain' ),
				'id'         => 't_pres_upzilla',
				'type'       => 'text',
			),	
			array(
				'name'       => __( 'District', 'edu_text_domain' ),
				'desc'       => __( 'Input the teacher District name', 'edu_text_domain' ),
				'id'         => 't_pres_district',
				'type'       => 'text',
			),
		),
	);
	
	// Educations Metabox
	$meta_boxes['teacher_edu'] = array(
		'id'         => 'teacher_edu',
		'title'      => __( 'Teacher\'s Educations Information', 'edu_text_domain' ),
		'pages'      => array( 'teachers', ), // Post type
		'fields'     => array(
			array(
				'name'		=> __('S.S.C / Dhakhil', 'edu_text_domain'),
				'id'		=> 'ssc_edu',
				'type'		=> 'text_medium',
				'default'	=> 'S.S.C',
			),
			array(
				'name'		=> __('S.S.C Year', 'edu_text_domain'),
				'id'		=> 'ssc_year',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('S.S.C Group/Subject', 'edu_text_domain'),
				'id'		=> 'ssc_group_subject',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('S.S.C Board', 'edu_text_domain'),
				'id'		=> 'ssc_board',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('S.S.C Division / GPA', 'edu_text_domain'),
				'id'		=> 'ssc_gpa',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('H.S.C / Alim', 'edu_text_domain'),
				'id'		=> 'hsc_edu',
				'type'		=> 'text_medium',
				'default'	=> 'H.S.C',
			),
			array(
				'name'		=> __('H.S.C Year', 'edu_text_domain'),
				'id'		=> 'hsc_year',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('H.S.C Group/Subject', 'edu_text_domain'),
				'id'		=> 'hsc_group_subject',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('H.S.C Board', 'edu_text_domain'),
				'id'		=> 'hsc_board',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('H.S.C Division / GPA', 'edu_text_domain'),
				'id'		=> 'hsc_gpa',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('Honours / Fazil / Degree', 'edu_text_domain'),
				'id'		=> 'honours_edu',
				'type'		=> 'text_medium',
				'default'	=> 'Honours',
			),
			array(
				'name'		=> __('Honours / Fazil / Degree Year', 'edu_text_domain'),
				'id'		=> 'honours_year',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('Honours / Fazil / Degree Group/Subject', 'edu_text_domain'),
				'id'		=> 'honours_group_subject',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('Honours / Fazil / Degree Board', 'edu_text_domain'),
				'id'		=> 'honours_board',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('Honours / Fazil / Degree Division / GPA', 'edu_text_domain'),
				'id'		=> 'honours_gpa',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('Master\'s', 'edu_text_domain'),
				'id'		=> 'master_edu',
				'type'		=> 'text_medium',
				'default'	=> 'Master\'s',
			),
			array(
				'name'		=> __('Master\'s Year', 'edu_text_domain'),
				'id'		=> 'master_year',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('Master\'s Group/Subject', 'edu_text_domain'),
				'id'		=> 'master_group_subject',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('Master\'s Board', 'edu_text_domain'),
				'id'		=> 'master_board',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('Master\'s Division / GPA', 'edu_text_domain'),
				'id'		=> 'master_gpa',
				'type'		=> 'text_medium',
			),
			array(
				'name'		=> __('Other Education Name', 'edu_text_domain'),
				'id'		=> 'other_edu',
				'type'		=> 'text_medium',
				'desc'		=> __('This is extra field, if you need other then use this field', 'edu_text_domain'),
				'default'	=> 'Other',
			),
			array(
				'name'		=> __('Other Education Year', 'edu_text_domain'),
				'id'		=> 'other_year',
				'type'		=> 'text_medium',				
				'desc'		=> __('This is extra field, if you need other then use this field', 'edu_text_domain'),
			),
			array(
				'name'		=> __('Other Education Group/Subject', 'edu_text_domain'),
				'id'		=> 'other_group_subject',
				'type'		=> 'text_medium',				
				'desc'		=> __('This is extra field, if you need other then use this field', 'edu_text_domain'),
			),
			array(
				'name'		=> __('Other Education Board', 'edu_text_domain'),
				'id'		=> 'other_board',
				'type'		=> 'text_medium',				
				'desc'		=> __('This is extra field, if you need other then use this field', 'edu_text_domain'),
			),
			array(
				'name'		=> __('Other Education Division / GPA', 'edu_text_domain'),
				'id'		=> 'other_gpa',
				'type'		=> 'text_medium',				
				'desc'		=> __('This is extra field, if you need other then use this field', 'edu_text_domain'),
			),
		),
	);
	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
