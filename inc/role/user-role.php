<?php 
// //Student Role
// $user_capabilities = array(
	// 'read'			=> true,
	// 'comments'		=> false,
// );

// //Admin Capabilities
// $data_capabilities = array(
	// 'read'			=> true,
	// 'comments'		=> false,
	// 'delete_others_pages' 	=> true,
	// 'manage_categories' 	=> true,
	// 'publish_posts' 	=> true,
	// 'remove_users' 	=> true,
	// 'read_students'	=> true,
    // 'read_student' => true,
    // 'read_private_students' => true,
    // 'edit_students' => true,
    // 'edit_private_students' => true,
    // 'edit_published_students' => true,
    // 'edit_others_students' => true,
    // 'publish_students' => true,
    // 'delete_students' => true,
    // 'delete_private_students' => true,
    // 'delete_published_students' => true,
    // 'delete_others_students' => true,
	
// );


// add_role('data_id', __('Data', 'edu_text_domain'), $data_capabilities );

// //add_role('student_id', 'Student', $user_capabilities );

// //remove_role('admin_id');

//Computer Operator Access
include_once('computer_operator.php');



// Data Entry Worker
include_once('data-entry.php');
//remove_role('student_dataentry_manager');


// Teacher Panel Access
include_once('teachers.php');
//remove_role('student_teacher_panel_manager');


include_once('students.php');







