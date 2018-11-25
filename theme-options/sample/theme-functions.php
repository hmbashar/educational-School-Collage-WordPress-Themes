<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_demo";


    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();

    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /*
     *
     * --> Action hook examples
     *
     */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');


    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => false,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Edu Theme', 'redux-framework-demo' ),
        'page_title'           => __( 'Edu Theme Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'create_users',
        // Permissions needed to access the options panel.
        'menu_icon'            => 'dashicons-admin-tools',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'edu_theme_option',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => false,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
         'footer_credit'     => 'Developed by <a href="http://www.linuxhostlab.com" target="_blank">Linux Host Lab &amp; Coding Bank</a>',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'system_info'          => false,
        // REMOVE

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => '#',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://fb.linuxhostlab.com',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/hmbashar',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/hmbashar',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Header Fields
	Redux::setSection ($opt_name, array(
		'title' 	=> __('Header', 'edu_text_domain'),		
		'id'		=> 'header-section',
		//'desc' 		=> __('Header Option in your website theme, Left Logo, School Name, School Slowgan, Right Logo', 'edu_text_domain'),
		'icon'		=> 'el el-home',		
	));
	Redux::setSection ($opt_name, array(
		'title'		=> __('Logo', 'edu_text_domain'),
		'id'		=> 'left-logo-upload',
		'subsection'=> true,
		'subtitle'	=> __('change your logo left and right, both.', 'edu_text_domain'),		
		'fields'	=> array(		
			array(
				'title'		=> __('Left Logo', 'edu_text_domain'),
				'subtitle'	=> __('Change left logo.', 'edu_text_domain'),
				'type'		=> 'media',
				'id'		=> 'left-logo-upload',
				'desc'	=> __('upload your logo left side, better view size: 150x150px', 'edu_text_domain'),
				'default'	=> array(
					'url'	=> get_template_directory_uri().'/img/logo.png',
				),
				'compiler'	=> true,
			),
			array(
				'title'		=> __('Right Logo', 'edu_text_domain'),
				'subtitle'	=> __('Change Right logo.', 'edu_text_domain'),
				'type'		=> 'media',
				'id'		=> 'right-logo-upload',
				'desc'		=> __('upload your logo right side, better view size: 150x150px', 'edu_text_domain'),
				'default'	=> array(
					'url'	=> get_template_directory_uri().'/img/logo.png',
				),
				'compiler'	=> true,
			),
		),
	));
	Redux::setSection($opt_name, array(
		'title'		=>__('School Name', 'edu_text_domain'),
		'id'		=> 'school-name-section',
		'subsection'=> true,
		'desc'		=> __('change your school name', 'edu_text_domain'),
		'fields'	=> array(
			array(
				'title'		=> __('School Name', 'edu_text_domain'),
				'type'		=> 'text', 
				'id'		=> 'school-full-name',
				'subtitle'	=> __('Change School Name', 'edu_text_domain'),
				'desc'		=> __('Change your school name.', 'edu_text_domain'),
				'default'	=> __('Bangladesh Gov\'t High School', 'edu_text_domain'),
				'hint'      => array(
                'title'     => __('What is this?', 'edu_text_domain'),
				'content'   => __('Input your school name.', 'edu_text_domain'),
               )
			),
			array(
				'title'		=> __('School Slowgan', 'edu_text_domain'),
				'type'		=> 'text', 
				'id'		=> 'school-slowgan',
				'subtitle'	=> __('Change School slowgan', 'edu_text_domain'),
				'desc'		=> __('Change your school slowgan.', 'edu_text_domain'),
				'hint'      => array(
					'title'     => __('What is this?' ,'edu_text_domain'),
					'content'   => __('Input your school Slowgan.', 'edu_text_domain'),
				),
				'default'	=> __('High School slowgan', 'edu_text_domain'),
			),
		),
	));
	Redux::setSection($opt_name, array(
		'title'		=> __('On/Off Switch', 'edu_text_domain'),
		'id'		=> 'switch-section',
		'icon'		=> 'el el-off',
		'fields'	=> array(
			array(				
				'title'		=> __('Logo Left', 'edu_text_domain'),
				'id'		=> 'left-logo',
				'desc'	=> __('if you want left logo off in your index, then select off and click save.', 'edu_text_domain'),
				'type'		=> 'button_set', 
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Logo Right', 'edu_text_domain'),
				'id'		=> 'right-logo',
				'desc'	=> __('if you want right logo off in your index, then select off and click save.', 'edu_text_domain'),
				'type'		=> 'button_set', 
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('School Name', 'edu_text_domain'),
				'id'		=> 'school-name-switch',
				'desc'	=> __('if you want school name off in your header, then select off and click save.', 'edu_text_domain'),
				'type'		=> 'button_set', 
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('School Slowgan', 'edu_text_domain'),
				'id'		=> 'school-slowgan-switch',
				'desc'	=> __('if you want school name off in your header, then select off and click save.', 'edu_text_domain'),
				'type'		=> 'button_set', 
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Time', 'edu_text_domain'),
				'id'		=> 'header-time',
				'desc'	=> __('if you want Time off in your header, then select off and click save.', 'edu_text_domain'),
				'type'		=> 'button_set', 
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Date', 'edu_text_domain'),
				'id'		=> 'header-date',
				'desc'	=> __('if you want Date off in your header, then select off and click save.', 'edu_text_domain'),
				'type'		=> 'button_set', 
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Notice Switch', 'edu_text_domain'),
				'id'		=> 'notice-board',
				'desc'	=> __('if you want notice section off, then select off and click save.', 'edu_text_domain'),
				'type'		=> 'button_set', 
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Slider Switch', 'edu_text_domain'),
				'id'		=> 'slider-switch',
				'type'		=> 'button_set', 
				'desc'	=> __('if you want slider section off, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Online Admission Switch', 'edu_text_domain'),
				'id'		=> 'online-admission',
				'type'		=> 'button_set', 
				'desc'	=> __('if you want online admission sidebar off, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Login Panel Switch', 'edu_text_domain'),
				'id'		=> 'login-panel',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want Login Panel off in sidebar, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Webmail Switch', 'edu_text_domain'),
				'id'		=> 'webmail',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want webmail option off in sidebar, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Important link', 'edu_text_domain'),
				'id'		=> 'important-link',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want important link option off in sidebar, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('School Name &amp; District', 'edu_text_domain'),
				'id'		=> 'school-name-dis',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want School Name &amp; District section off in index, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Download Corner', 'edu_text_domain'),
				'id'		=> 'download-corner',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want Download Corner section off in index, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Notice Corner', 'edu_text_domain'),
				'id'		=> 'notice-corner',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want Notice Corner section off in index, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('J.S.C Corner', 'edu_text_domain'),
				'id'		=> 'jsc-corner',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want J.S.C Corner section off in index, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('S.S.C Corner', 'edu_text_domain'),
				'id'		=> 'ssc-corner',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want S.S.C Corner section off in index, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Students Corner', 'edu_text_domain'),
				'id'		=> 'students-corner',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want Students Corner section off in index, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Guardian Corner', 'edu_text_domain'),
				'id'		=> 'guardian-corner',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want Guardian Corner section off in index, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Teachers Corner', 'edu_text_domain'),
				'id'		=> 'teacher-corner',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want Teachers Corner section off in index, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Students A+', 'edu_text_domain'),
				'id'		=> 'students-a-plus',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want Students A+ section off in index, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Photo Gallery', 'edu_text_domain'),
				'id'		=> 'photo-gallery-switch',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want Photo Gallery section off in index, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Video Gallery', 'edu_text_domain'),
				'id'		=> 'video-gallery-switch',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want Video Gallery section off in index, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Head Master', 'edu_text_domain'),
				'id'		=> 'head-master-switch',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want Head Master section off in index, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Latest Update Sidebar', 'edu_text_domain'),
				'id'		=> 'latest-update-sidebar',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want Latest Update off your sidebar, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('S.S.C Sidebar', 'edu_text_domain'),
				'id'		=> 'ssc-sidebar',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want S.S.C Sidebar off your sidebar, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('J.S.C Sidebar', 'edu_text_domain'),
				'id'		=> 'jsc-sidebar',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want J.S.C Sidebar off your sidebar, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Useful Link', 'edu_text_domain'),
				'id'		=> 'usfull-link-sidebar',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want Useful Link Sidebar off your sidebar, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
			array(				
				'title'		=> __('Footer Widget', 'edu_text_domain'),
				'id'		=> 'footer-widget-switch',
				'type'		=> 'button_set', 
				'desc'	=> __('If you want Footer Widget off in your sidebar, then select off and click save changes.', 'edu_text_domain'),
				'options'	=> array(
					'1'		=> 'ON',
					'2'		=> 'OFF',
				),
				'default'	=> '1',
			),
		),
	));

	Redux::setSection($opt_name, array(
		'title'		=> __('Meddle Conent', 'edu_text_domain'),
		'id'		=> 'meddle-option-section',
		'icon'		=> 'el el-website',
	));
	Redux::setSection ($opt_name, array(
		'title'			=> __('School Name &amp; About', 'edu_text_domain'), 
		'id'			=> 'school-meddle-content',
		'subsection'	=> true,
		'icon'			=> 'el el-pencil',
		'fields'		=> array(
			array(
				'title'		=> __('School Name &amp; District', 'edu_text_domain'),
				'id'		=> 'school-name-and-district',
				'type'		=> 'text',
				'default'	=> 'School Name and District'
				
			),
			array(
				'title'		=> __('School Gate Image', 'edu_text_domain'),
				'id'		=> 'school-gate-image',
				'type'		=> 'media',
				'desc'		=> __('Upload your school/collage gate image, required image size 550x250px', 'edu_text_domain'),
				'default'	=> array(
					'url'	=> get_template_directory_uri().'/img/school_gate.jpg'
				)
				
			),
			array(
				'title'		=> __('About School', 'edu_text_domain'),
				'id'		=> 'school-about',
				'type'		=> 'editor',
				'desc'		=> __('input your information about school, better view 80 word text.', 'edu_text_domain'),
				'default'	=> 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33',
				'args'    => array(
                    'media_buttons' => false,                 
                    'quicktags'     => false,
                ),
				
			),		
			array(
				'title'		=> __('About School Full Text link', 'edu_text_domain'),
				'id'		=> 'school-about-full-link',
				'type'		=> 'text',
				'desc'		=> __('input your full information link about school.', 'edu_text_domain'),
				'default'	=> esc_url(site_url()).'/about-us'
				
			),
		
		),
		
	
	));
	Redux::setSection($opt_name,array(
		'title'			=> __('Photo Gallery', 'edu_text_domain'),
		'id'			=> 'photo_gallery_section',
		'icon'			=> 'el el-picture',
		'subsection'	=>true,
		'fields'		=> array(
			array(
				'title'		=> __('Photo Gallery', 'edu_text_domain'),
				'type'		=> 'slides',
				'id'		=> 'photo-gallery-slider',
				'subtitle'		=> __('Upload photo required size 572x350px', 'edu_text_domain'),
			),
			array(
				'title'		=> __('More Gallery Link', 'edu_text_domain'),
				'type'		=> 'text',
				'id'		=> 'photo-gallery-more-link',
				'desc'		=> __('input your all photo gallery link', 'edu_text_domain'),
			),
		
		),
	));
	Redux::setSection($opt_name,array(
		'title'			=> __('Video Gallery', 'edu_text_domain'),
		'id'			=> 'video_gallery_section',
		'icon'			=> 'el el-video',
		'subsection'	=>true,
		'fields'		=> array(
			array(
				'title'		=> __('Video Gallery', 'edu_text_domain'),
				'type'		=> 'slides',
				'id'		=> 'video-gallery-slider',
				'subtitle'		=> __('imput your youtube video id example if your youtube link "https://www.youtube.com/watch?v=jmmeKXM-wq4" then use only jmmeKXM-wq4 without https://www.youtube.com/watch?v=', 'edu_text_domain'),
				'placeholder'	=> array(
					'title'			=> __('Video Title', 'edu_text_domain'),
					'Description'	=> __('Video Description (optional)', 'edu_text_domain'),
					'url'			=> __('Video ID', 'edu_text_domain'),
				),
			),
			array(
				'title'		=> __('More Gallery Link', 'edu_text_domain'),
				'type'		=> 'text',
				'id'		=> 'video-gallery-more-link',
				'desc'		=> __('input your all video gallery link', 'edu_text_domain'),
			),
		
		),
	));
	Redux::setSection($opt_name, array(
		'title'		=> __('Right Sidebar', 'edu_text_domain'),
		'id'		=> 'right-sidebar-area',
		'icon'		=> 'el el-th-list',
	
	));
	Redux::setSection($opt_name, array(
		'title'		=> __('Head Master', 'edu_text_domain'),
		'id'		=> 'head-master-content',
		'subsection'=> true,
		'fields'	=> array(
			array(
				'title'		=> __('Head Master Name', 'edu_text_domain'), 
				'id'		=> 'meadmaster-name',
				'type'		=> 'text',
				'desc'		=> __('Type Head Master Name of your school.', 'edu_text_domain'),
				'default'	=> __('Head Master Name', 'edu_text_domain'),
			),
			array(
				'title'		=> __('Head Master image', 'edu_text_domain'), 
				'id'		=> 'headmaster-image',
				'type'		=> 'media',
				'desc'		=> __('Type Head Master image of your school. required size width 255px, height auto','edu_text_domain'),
				'default'	=> array(
					'url'	=> get_template_directory_uri().'/img/headmaster.jpg'
				),
			),
			array(
				'title'		=> __('Head Master Webmail', 'edu_text_domain'), 
				'id'		=> 'headmaster-webmail',
				'type'		=> 'text',
				'desc'		=> __('Type Head Master contact email of your school.','edu_text_domain'),
			),
			array(
				'title'		=> __('Head Master Mobile', 'edu_text_domain'), 
				'id'		=> 'meadmaster-phone',
				'type'		=> 'text',
				'desc'		=> __('Type Head Master contact Mobile Number of your school.','edu_text_domain'),
				'default'	=> __('+88017123456789', 'edu_text_domain'),
			),
			array(
				'title'		=> __('Ex Headmasters', 'edu_text_domain'), 
				'id'		=> 'ex-meadmaster',
				'type'		=> 'text',
				'desc'		=> __('Input url Ex Headmasters of your school. required http://','edu_text_domain'),
				'default'	=> esc_url(site_url()).'/ex-headmasters',
			),
			array(
				'title'		=> __('The Headmaster\'s opinion', 'edu_text_domain'), 
				'id'		=> 'headmaster-opinion',
				'type'		=> 'text',
				'desc'		=> __('input url Headmaster\'s opinion of your school. required http://','edu_text_domain'),
				'default'	=> esc_url(site_url()).'/the-headmasters-opinion/',
			),
		),
	));
	
	//Slider Options
	
	Redux::setSection($opt_name, array(
		'title'			=> __('Slider', 'edu_text_domain'),
		'id'			=> 'slider-option',		
		'icon'			=> 'el el-indent-left',
		'desc'			=> __('Upload your Slider image, only required image, and other option is optional, example: title, description, url, etc. slider image size required only 1170x300px.', 'edu_text_domain'),
		'fields'		=> array(
			array(
				'title'		=> __('Home Page Slider', 'edu_text_domain'),
				'id'		=> 'home-slider',
				'subtitle'	=> 'Only upload image.',
				'type'		=> 'slides',	
				'placeholder' => array(
					'title'           => __('Title (Optional)', 'edu_text_domain'),
					'description'     => __('Description (Optional)', 'edu_text_domain'),
					'url'             => __('URL (Optional)!', 'edu_text_domain'),
				),				
			),
		),
	));
	Redux::setSection($opt_name, array(
		'title'			=> __('Info View Page', 'edu_text_domain'),
		'id'			=> 'student-info-id', 
		'icon'			=> 'el el-user',
		'fields'		=> array(
			array(
				'title'		=> __('Post Office', 'edu_text_domain'),
				'id'		=> 'std-info-post-office',
				'type'		=> 'text',
				'desc'		=> __('Type school post office name', 'edu_text_domain'),
				'default'	=> __('Patuakhali', 'edu_text_domain'),
			),
			array(
				'title'		=> __('Upzilla Name', 'edu_text_domain'),
				'id'		=> 'std-info-upzilla',
				'type'		=> 'text',
				'desc'		=> __('Type school Upzilla name', 'edu_text_domain'),
				'default'	=> __('Patuakhali', 'edu_text_domain'),
			),
			array(
				'title'		=> __('District Name', 'edu_text_domain'),
				'id'		=> 'std-info-district',
				'type'		=> 'text',
				'desc'		=> __('Type school District name', 'edu_text_domain'),
				'default'	=> __('Patuakhali', 'edu_text_domain'),
			),
			array(
				'title'		=> __('Placed Year', 'edu_text_domain'),
				'id'		=> 'std-info-placed',
				'type'		=> 'text',
				'desc'		=> __('Type school Placed Year', 'edu_text_domain'),
				'default'	=> __('1971', 'edu_text_domain'),
			),
			array(
				'title'		=> __('Upzilla Code', 'edu_text_domain'),
				'id'		=> 'std-info-upzillacode',
				'type'		=> 'text',
				'desc'		=> __('Type school Upzilla Code', 'edu_text_domain'),
				'default'	=> __('200', 'edu_text_domain'),
			),
			array(
				'title'		=> __('Zilla Code', 'edu_text_domain'),
				'id'		=> 'std-info-zillacode',
				'type'		=> 'text',
				'desc'		=> __('Type school Zilla Code', 'edu_text_domain'),
				'default'	=> __('24', 'edu_text_domain'),
			),
			array(
				'title'		=> __('School Code', 'edu_text_domain'),
				'id'		=> 'std-info-schoolcode',
				'type'		=> 'text',
				'desc'		=> __('Type school Code', 'edu_text_domain'),
				'default'	=> __('4524', 'edu_text_domain'),
			),
			array(
				'title'		=> __('EIIN Code', 'edu_text_domain'),
				'id'		=> 'std-info-eiincode',
				'type'		=> 'text',
				'desc'		=> __('Type school EIIN Code', 'edu_text_domain'),
				'default'	=> __('114706', 'edu_text_domain'),
			),
			array(
				'title'		=> __('School Email', 'edu_text_domain'),
				'id'		=> 'std-info-email',
				'type'		=> 'text',
				'desc'		=> __('Type school Contact Email', 'edu_text_domain'),
				'default'	=> __('admin@yoursite.com', 'edu_text_domain'),
			),
			
		),
		
	));
	/*************************Contact Page **************************/
	Redux::setSection($opt_name, array(
		'title'			=> __('Contact Page', 'edu_text_domain'),
		'id'			=> 'contact-page',
		'icon'			=> 'el el-phone', 
		'fields'		=> array(
			array(
				'title'			=> __('School Address', 'edu_text_domain'),
				'id'			=> 'school-address',
				'type'			=> 'editor',
				'default'		=> __('<p>Kowme Madrasha,sonlogno,</p><p>Soto Chowrasta,</p><p>Patuakhali-8600, Bangladesh.</p>', 'edu_text_domain'),
				'desc'			=> __('Type your school address in 3 line.', 'edu_text_domain'),
				'args'    => array(
                    'media_buttons' => false,                 
                    'quicktags'     => false,
                ),
			),
			array(
				'title'			=> __('School Email', 'edu_text_domain'),
				'id'			=> 'school-contact-email',
				'type'			=> 'editor',
				'default'		=> __('<p>admin@linuxhostlab.com</p><p>support@linuxhostlab.com</p>	<p>skype: shaplahost</p>	', 'edu_text_domain'),
				'desc'			=> __('Type your school contact email address', 'edu_text_domain'),
				'args'    => array(
                    'media_buttons' => false,                 
                    'quicktags'     => false,
                ),
			),
			array(
				'title'			=> __('School Phone Number', 'edu_text_domain'),
				'id'			=> 'school-contact-phone',
				'type'			=> 'editor',
				'default'		=> __('<p>+880 1611 744 993</p><p>+880 1511 744 993</p><p>+880 1713 566 533</p>', 'edu_text_domain'),
				'desc'			=> __('Type your school contact phone number', 'edu_text_domain'),
				'args'    => array(
                    'media_buttons' => false,                 
                    'quicktags'     => false,
                ),
			),
			
		),
	
	));
	/***********Bangla Support ************/
	Redux::setSection($opt_name, array(
		'title'			=> __('Bangla Support', 'edu_text_domain'),
		'id'			=> 'bangla_support',
		'icon'			=> 'dashicons dashicons-translation',
		'desc'			=> __('If you want to use bangla language, then just enable this option, if you don\'t enable this option then don\'t have problem, but if you enable this option then loocking batter, example: font, and font size, etc...', 'edu_text_domain'),
		'fields'		=> array(
			array(
				'title'			=> __('Enable Bangla font and size', 'edu_text_domain'),
				'id'			=> 'enabel_bangla_font',				
				'type'			=> 'button_set', 
				'options'		=> array(
					'1'			=> 'Enable',
					'2'			=> 'Disable',
				),
				'default'	=> '2',
			),
		),
		
	));
	
    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    function compiler_action( $options, $css, $changed_values ) {
        echo '<h1>The compiler hook has run!</h1>';
        echo "<pre>";
        print_r( $changed_values ); // Values that have changed since the last save
        echo "</pre>";
        //print_r($options); //Option values
        //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $return['error'] = $field;
                $field['msg']    = 'your custom error message';
            }

            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = 'your custom warning message';
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    function dynamic_section( $sections ) {
        //$sections = array();
        $sections[] = array(
            'title'  => __( 'Section via hook', 'redux-framework-demo' ),
            'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
            'icon'   => 'el el-paper-clip',
            // Leave this as a blank section, no options just some intro text set above.
            'fields' => array()
        );

        return $sections;
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    function change_arguments( $args ) {
        //$args['dev_mode'] = true;

        return $args;
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    function change_defaults( $defaults ) {
        $defaults['str_replace'] = 'Testing filter hook!';

        return $defaults;
    }

    // Remove the demo link and the notice of integrated demo from the redux-framework plugin
    function remove_demo() {

        // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
        if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
            remove_filter( 'plugin_row_meta', array(
                ReduxFrameworkPlugin::instance(),
                'plugin_metalinks'
            ), null, 2 );

            // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
            remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
        }
    }
