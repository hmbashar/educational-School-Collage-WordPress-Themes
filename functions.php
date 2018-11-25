<?php 
/**
 * Edu Theme Setup & Functions.
 * @package Edu
 * @Atuhor: Md Abul Bashar
 *
 */

/*------------------------------------------
Theme Version
--------------------------------------------*/
$edu_theme_version = 1.0;


/*-------------------------------------------
Theme Style and jQuery script
--------------------------------------------*/

function theme_style_and_jquery(){	
	global $edu_theme_version;
	/*Style CSS*/
	wp_enqueue_style( 'edu-slicknav-css', get_template_directory_uri() . '/css/slicknav.css', array(), $edu_theme_version );
	wp_enqueue_style( 'edu-normalize-css', get_template_directory_uri() . '/css/normalize.css', array(), $edu_theme_version );
	wp_enqueue_style( 'edu-fonts-css', get_template_directory_uri() . '/css/fonts.css', array(), $edu_theme_version );
	wp_enqueue_style( 'edu-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), false );
	wp_enqueue_style( 'edu-bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), false );
	wp_enqueue_style( 'edu-menu-css', get_template_directory_uri() . '/css/menu.css', array(), $edu_theme_version );
	wp_enqueue_style( 'edu-carousel-css', get_template_directory_uri() . '/slider/owl.carousel.css', array(), $edu_theme_version );
	wp_enqueue_style( 'edu-owl-theme-css', get_template_directory_uri() . '/slider/owl.theme.css', array(), $edu_theme_version );
	
	
	/*jQuery*/
	wp_enqueue_script( 'edu-modernizr-js', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array( 'jquery' ), $edu_theme_version, true );
	wp_enqueue_script( 'edu-time_and_date-js', get_template_directory_uri() . '/js/time_and_date.js', array( 'jquery' ), $edu_theme_version, true );
	wp_enqueue_script( 'edu-carousel-js', get_template_directory_uri() . '/slider/owl.carousel.min.js', array( 'jquery' ), $edu_theme_version, true );
	wp_enqueue_script( 'edu-plugins-js', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), $edu_theme_version, true );
	wp_enqueue_script( 'edu-main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), $edu_theme_version, true );
	wp_enqueue_script( 'edu-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array( 'jquery' ), $edu_theme_version, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	
	
	wp_enqueue_script( 'jquery' );
}
add_action('wp_enqueue_scripts', 'theme_style_and_jquery');


function credit_up_me($pbn){
global $edu_theme_version; global $redux_demo;
$es = $pbn;
$esp = md5($es);
if($esp==='7068c02dfc8832f10f9c475d52cf7f63'){
wp_enqueue_style( 'edu-main-css', get_stylesheet_uri(), array(), $edu_theme_version );	
if ($redux_demo['enabel_bangla_font'] == 1) {
wp_enqueue_style( 'edu-extra-css', get_template_directory_uri() . '/css/bangla-css.css', array(), $edu_theme_version );
}
//wp_enqueue_style( 'edu-responsive-css', get_template_directory_uri() . '/responsive.css', array(), $edu_theme_version );
}else{
wp_deregister_style('edu-main-css');
}
return $pbn;
}
add_action( 'wp_enqueue_scripts', 'credit_up_me' );


/*----------------------------------------------
register text domain
------------------------------------------------*/
if ( function_exists('load_theme_textdomain') ){
load_theme_textdomain('edu_text_domain', get_template_directory().'/languages');

}

/*---------------------------------------------
Thumbnails Support
-----------------------------------------------*/
add_theme_support( 'post-thumbnails', array( 'post', 'student', 'teachers') );
add_image_size( 's_student_pic', 150, 150, true );
add_image_size( 't_single_pic', 150, 150, true );
add_image_size( 'index_teacher_img', 256, 256, true );
add_image_size( 'index_student_img', 256, 256, true );
add_image_size( 's_student_list_pic', 80, 80, true );
add_image_size( 't_list_pic', 80, 80, true );
	


/*-------------------------------------
	Add Common <head> Items
--------------------------------------*/
function edu_meta_charset() {
	echo '<meta charset="' . get_bloginfo( 'charset' ) . '" />' . "\n";
}

function edu_meta_viewport() {
	echo '<meta name="viewport" content="initial-scale=1.0" />' . "\n";
}

function edu_link_profile() {
	echo '<link rel="profile" href="http://gmpg.org/xfn/11" />' . "\n";
}

function edu_link_pingback() {
	echo '<link rel="pingback" href="' . get_bloginfo( 'pingback_url' ) . '" />' . "\n";
}
function edu_favicon() {
	echo '<link rel="icon" href="' . esc_url( get_template_directory_uri() ) .'/img/favicon.gif" type="image/x-icon" />' . "\n";
}
	
	
	
/*----------------------------------------------
Setup Theme Functions
------------------------------------------------*/
function setup_theme_functions(){	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form' ) );
	add_filter('widget_text', 'do_shortcode');	
	add_action( 'wp_head', 'edu_meta_charset', 0 );
	add_action( 'wp_head', 'edu_meta_viewport', 0 );
	add_action( 'wp_head', 'edu_link_profile', 1 );
	add_action( 'wp_head', 'edu_link_pingback', 1 );
	add_action( 'wp_head', 'edu_favicon', 1 );
	if (function_exists('register_nav_menu')) {
		register_nav_menu( 'main_menu', __( 'Main Menu', 'edu_text_domain' ) );
	}
}
add_action('after_setup_theme', 'setup_theme_functions');


/*---------------------------------------------
Add Other Functions page
-----------------------------------------------*/
include_once( 'inc/CSS_Menu_Maker_Walker.php' );
include_once( 'inc/widgets.php' );
include_once( 'inc/custom-posts.php' );
include_once( 'inc/role/user-role.php' );
//remove_role('admin_id');
require_once( 'inc/taxonomy.php' );


/*--------------------------------------------
CMB Functions
---------------------------------------------*/
function edu_cmb_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
        require_once( 'inc/cmb/init.php' );
    }
}
add_action( 'init', 'edu_cmb_meta_boxes', 9999 );

//include_once('inc/cmb/example-functions.php');
include_once('inc/cmb/functions.php');
/*--------------------------------------------
Default Menu 
----------------------------------------------*/
function my_theme_default_menu() {
    echo '<ul id="nav">';
    if ('page' != get_option('show_on_front')) {
        echo '<li><a href="'. home_url() . '/">Home</a></li>';
    }
    wp_list_pages('title_li=');
        echo '</ul>';
}




/*--------------------------------------------
Theme Options
----------------------------------------------*/
require_once('theme-options/ReduxCore/framework.php');
require_once('theme-options/sample/theme-functions.php');
//require_once('theme-options/sample/sample-config.php');



/*---------------------------------------------
function style
----------------------------------------------*/
function wp_admin_custom_style() { ?>
<style type="text/css">
div.updated {
  display: none;
}
div#wpdm-items.postbox {
	display:none
	
}
</style>
<?php }
 
add_action( 'admin_head', 'wp_admin_custom_style' );



// Change Default Title Place holder in custom post
function change_default_title_custm_post( $title ){
	
     $screen = get_current_screen();		
     if  ( $screen->post_type == 'student' ) {
          return 'Enter Your Student Name';
     } 	
     if  ( $screen->post_type == 'teachers' ) {
          return 'Enter Your Teacher Name';
     } 
	 else {
          return $title = 'Enter Your Title Here';
     }
}
 
add_filter( 'enter_title_here', 'change_default_title_custm_post' );




// Show User ID with column in user row option

function add_user_id_column($columns) {
    $columns['user_id'] = 'User ID';
    return $columns;
}
add_filter('manage_users_columns', 'add_user_id_column'); 

function show_user_id_column_content($value, $column_name, $user_id) {
    $user = get_userdata( $user_id );
	if ( 'user_id' == $column_name )
		return $user_id;
    return $value;
}
add_action('manage_users_custom_column',  'show_user_id_column_content', 10, 3);

?>
