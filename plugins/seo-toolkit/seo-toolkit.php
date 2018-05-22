<?php
/*
Plugin Name: SEO Helper
Description: Drag and drop page builder for WordPress. Take full control over your WordPress site, build any layout you can imagine – no programming knowledge required.
Version: 1.0
Author: Hasan Rased
Author URI: http://rased.xyz
*/

// Exit if accessed directly
 
if ( ! defined('ABSPATH')){
    exit;
}
 
// Define
define('SEO_ACC_URL', WP_PLUGIN_URL .'/'. plugin_basename( dirname( __FILE__ )) .'/' );
define( 'SEO_ACC_PATH', plugin_dir_path( __FILE__ ) );



//Get Slider As List
function seo_toolkit_get_slide_list(){
    $args =wp_parse_args(array(
        'post_type' => 'Slider',
        'numberposts' => -1,
        
    ));
    
    $posts = get_posts($args);
    
    $post_options = array(esc_html__('-- Select Slide --','seo-toolkit') => '');
    
    if($posts){
        foreach($posts as $post){
            $post_options[$post->post_title] = $post->ID;
        }
    }
    return $post_options;
    
}

//Get Page As List
function seo_toolkit_get_psot_list(){
    $args =wp_parse_args(array(
        'post_type' => 'page',
        'numberposts' => -1,
        
    ));
    
    $posts = get_posts($args);
    
    $post_options = array(esc_html__('-- Select Post --','seo-toolkit') => '');
    
    if($posts){
        foreach($posts as $post){
            $post_options[$post->post_title] = $post->ID;
        }
    }
    return $post_options;
    
}



// ADD Custom Post

add_action( 'init', 'seo_slider_custom_post' );
function seo_slider_custom_post() {
    register_post_type( 'slider',
        array(
            'labels' => array(
                'name' => esc_html__( 'Slider','seo-toolkit' ),
                'singular_name' => esc_html__( 'Slider' ,'seo-toolkit'),
                 'new_item'     => esc_html__('Add New Slide','seo-toolkit')
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui'=> true
        )
    );
    
    //custom post Rejister For PROJECT
    register_post_type( 'project',
        array(
            'labels' => array(
                'name' => esc_html__( 'Project' ,'seo-toolkit'),
                'singular_name' => esc_html__( 'project' ,'seo-toolkit'),
                 'new_item'     => esc_html__('Add New Project','seo-toolkit')
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
        )
    );
}


//Custom Taxonomi / Catagory For Project Area

function seo_toolkit_custom_post_taxonomy() {
    register_taxonomy(
        'project_cat',  
        'project',                  
        array(
            'hierarchical'          => true,
            'label'                 => 'Project Category',  
            'query_var'             => true,
            'show_admin_column'     => true,
            'rewrite'               => array(
                'slug'              => 'project-category', 
                'with_front'    => true 
                )
            )
    );
}
add_action( 'init', 'seo_toolkit_custom_post_taxonomy');



 
//Print shortcodes in widgets
add_filter('widget_text', 'do_shortcode');
 


// Loading VC addons
require_once( SEO_ACC_PATH . 'vc-addon/vc_addon_shortcode.php');
 


// Theme shortcodes
require_once( SEO_ACC_PATH . 'theme-shortcode/slide-shortcode.php' );
require_once( SEO_ACC_PATH . 'theme-shortcode/logo-carosol-shortcode.php' );
require_once( SEO_ACC_PATH . 'theme-shortcode/service-shortcode.php' );
require_once( SEO_ACC_PATH . 'theme-shortcode/service-shortcode-two.php' );
require_once( SEO_ACC_PATH . 'theme-shortcode/testimonial-shortcode.php' );
require_once( SEO_ACC_PATH . 'theme-shortcode/cta-shortcode.php' );
require_once( SEO_ACC_PATH . 'theme-shortcode/team-shotcode.php' );
require_once( SEO_ACC_PATH . 'theme-shortcode/counter-btn-shortcode.php' );
require_once( SEO_ACC_PATH . 'theme-shortcode/counter-shortcode.php' );
require_once( SEO_ACC_PATH . 'theme-shortcode/map-shortcode.php' );
require_once( SEO_ACC_PATH . 'theme-shortcode/tile-gallery-shortcode.php' );
require_once( SEO_ACC_PATH . 'theme-shortcode/promo-box-shortcode.php' );
require_once( SEO_ACC_PATH . 'theme-shortcode/cta-two-shortcode.php' );
require_once( SEO_ACC_PATH . 'theme-shortcode/portfolio-shortcode.php' );
 


// Shortcodes depended on Visual Composer
include_once( ABSPATH . 'wp-admin/includes/plugin.php');
if (is_plugin_active('js_composer/js_composer.php')){
    //require_once( SEO_ACC_PATH . 'theme-shortcode/staff-shortcode.php' );
}
 



// Registering stock toolkit files
add_action('wp_enqueue_scripts', 'seo_toolkit_files');
function seo_toolkit_files(){
wp_enqueue_style('owl-carousel', plugin_dir_url( __FILE__ ) . 'assets/css/owl.carousel.css');
wp_enqueue_style('seo-toolkit', plugin_dir_url( __FILE__ ) . 'assets/css/seo-toolkit.css');
wp_enqueue_script( 'owl-carousel', plugin_dir_url( __FILE__) . 'assets/js/owl.carousel.min.js', array('jquery'),'20120206', true);
wp_enqueue_script( 'google-map', plugin_dir_url( __FILE__) . 'assets/js/gmap3.min.js', array('jquery'),'20120206', true);
wp_enqueue_script( 'isotope', plugin_dir_url( __FILE__) . 'assets/js/isotope-3.0.4.min.js', array('jquery'),'20120206', true);
}
