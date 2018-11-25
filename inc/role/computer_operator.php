<?php 

/****************************************Computer Role ********************************/

/**
 * We declare a constant here just to make it portable. Just edit the constant value to make changes.
 */
if( !defined( 'edu_custom_role' ) ) {
    define( 'edu_custom_role', 'student', 'teachers' );
}
 
/**
 * First we create a new user role
 */
 
add_action( 'init', 'add_computer_operator_role' );
 
if( !function_exists( 'add_computer_operator_role' ) ) {
    function add_computer_operator_role() {
 
        // The default capabilities for our role. Modify it as per needed
        $default_capabilities = array(
            'read' => true,
            'edit_posts' => true,
            'delete_posts' => true,
            'publish_posts' => true,
            'upload_files' => true,
            'manage_categories' => true,
            'list_users' => true,
            'create_users' => true,
        );
 
        add_role( edu_custom_role . '_manager',
            __( 'Computer Operator', 'edu_text_domain' ),
            $default_capabilities
        );
    }
}

 
/**
 * Now we should add our custom capabilities to the user role
 */
add_action( 'admin_init', 'add_computer_operator_role_caps' );
 
if( !function_exists( 'add_computer_operator_role_caps' ) ) {
    function add_computer_operator_role_caps() {
 
        // By default, we add the capabilities to the custom role and administrator. You can allow more roles like editors or more custom roles to do these actions. Just simply include them into this array.
        $roles = array( edu_custom_role . '_manager', 'administrator' );
 
        foreach( $roles as $role ) {
 
            $role = get_role( $role );
 
            $role->add_cap( 'read' );
            $role->add_cap( 'read_' . edu_custom_role );
            $role->add_cap( 'read_private_' . edu_custom_role );
            $role->add_cap( 'edit_' . edu_custom_role );
            $role->add_cap( 'edit_' .edu_custom_role . 's' );
            $role->add_cap( 'edit_others_' . edu_custom_role . 's' );
            $role->add_cap( 'edit_published_' . edu_custom_role . 's' );
            $role->add_cap( 'publish_' . edu_custom_role . 's' );
            $role->add_cap( 'delete_others_' . edu_custom_role . 's' );
            $role->add_cap( 'delete_private_' . edu_custom_role . 's' );
            $role->add_cap( 'delete_published_' . edu_custom_role . 's' );
			
			
 
            $role->add_cap( 'read_page' );
            $role->add_cap( 'read_private_page' );
            $role->add_cap( 'edit_page' );
            $role->add_cap( 'edit_pages' );
            $role->add_cap( 'edit_others_pages' );
            $role->add_cap( 'edit_published_pages' );
            $role->add_cap( 'publish_pages' );
            $role->add_cap( 'delete_others_pages' );
            $role->add_cap( 'delete_private_pages' );
            $role->add_cap( 'delete_published_pages' );
			
			
			
        }
    }
}














