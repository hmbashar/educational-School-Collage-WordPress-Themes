<?php 

/****************************************Data Entry Worker Role ********************************/

/**
 * We declare a constant here just to make it portable. Just edit the constant value to make changes.
 */
if( !defined( 'edu_custom_role' ) ) {
    define( 'edu_custom_role', 'student', 'teachers' );
}
 
/**
 * First we create a new user role
 */
 
add_action( 'init', 'add_dataentry_worker_role' );
 
if( !function_exists( 'add_dataentry_worker_role' ) ) {
    function add_dataentry_worker_role() {
 
        // The default capabilities for our role. Modify it as per needed
        $default_capabilities = array(
            'read' => true,
            'edit_posts' => false,
            'delete_posts' => false,
            'publish_posts' => false,
            'upload_files' => true,
            'manage_categories' => false,
        );
 
        add_role( edu_custom_role . '_dataentry_manager',
            __( 'Data Entry Worker', 'edu_text_domain' ),
            $default_capabilities
        );
    }
}

 
/**
 * Now we should add our custom capabilities to the user role
 */
add_action( 'admin_init', 'add_dataentry_worker_role_caps' );
 
if( !function_exists( 'add_dataentry_worker_role_caps' ) ) {
    function add_dataentry_worker_role_caps() {
 
        // By default, we add the capabilities to the custom role and administrator. You can allow more roles like editors or more custom roles to do these actions. Just simply include them into this array.
        $roles = array( edu_custom_role . '_dataentry_manager', 'administrator' );
 
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
			

			
        }
    }
}














