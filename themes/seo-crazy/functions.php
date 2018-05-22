<?php
/**
 * SEO functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SEO
 */

if ( ! function_exists( 'crazy_seo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function crazy_seo_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on SEO, use a find and replace
	 * to change 'seo-crazy' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'seo-crazy', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
    add_image_size('crazy-seo-post-thumb', 750 , 450, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'seo-crazy' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'crazy_seo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'woocommerce' );

}
endif;
add_action( 'after_setup_theme', 'crazy_seo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function crazy_seo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'crazy_seo_content_width', 640 );
}
add_action( 'after_setup_theme', 'crazy_seo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function crazy_seo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'seo-crazy' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'seo-crazy' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Project Sidebar Weiget', 'seo-crazy' ),
		'id'            => 'seo_project_sidebar',
		'description'   => esc_html__( 'Add project sidebar wiget here.', 'seo-crazy' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer Weiget', 'seo-crazy' ),
		'id'            => 'seo_footer',
		'description'   => esc_html__( 'Add Footer here.', 'seo-crazy' ),
		'before_widget' => '<div class="col-md-3 col-sm-6"><div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'crazy_seo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function crazy_seo_scripts() {
    
    //wp_enqueue_style( 'seo-theme', get_template_directory_uri() . '/assets/css/docs.theme.min.css', array(), '0.1' );
    
//    wp_enqueue_style( 'seo-owl-carosol', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '0.1' );
//    
//    wp_enqueue_style( 'seo-owl-theme-carosol', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '0.1' );
    
    wp_enqueue_style( 'slick-nav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), '0.1' );
    
    wp_enqueue_style( 'seo-style', get_template_directory_uri() . '/assets/css/cssstyle.css', array(), '0.1' );
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.7' );
    
    wp_enqueue_style( 'font-awsome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0' );
    wp_enqueue_style( 'preloader-css', get_template_directory_uri() . '/assets/css/main.css', array(), '4.7.0' );
    
	wp_enqueue_style( 'crazy-seo-style', get_stylesheet_uri() );

	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true );	
	wp_enqueue_script( 'preloader', get_template_directory_uri() . '/assets/js/preloader.js', array('jquery'), '20151215', true );		
	wp_enqueue_script( 'slick-nav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '20151215', true );	
	wp_enqueue_script( 'slick-nav-active', get_template_directory_uri() . '/assets/js/active.js', array('jquery'), '20151215', true );	
	wp_enqueue_script( 'preloader', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', array('jquery'), '20151215', true );
    
//    wp_enqueue_script( 'seo-owl-carosol', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '20151215', true );
      
	wp_enqueue_script( 'crazy-seo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    
    
     $header_script = cs_get_option('header_script');
     $footer_script = cs_get_option('footer_script');
     $custom_css = cs_get_option('custom_css');
    
    wp_add_inline_script( 'slick-nav-active' , $footer_script);
    wp_add_inline_script('jquery-migrate' , $header_script);
    wp_add_inline_style('crazy-seo-style' , $custom_css);
    
    
}
add_action( 'wp_enqueue_scripts', 'crazy_seo_scripts' );




/**
 * Implement the Custom Framework feature.
 */
require get_template_directory() . '/inc/cs-framework/cs-framework.php';
require get_template_directory() . '/inc/metabox-framework.php';
require get_template_directory() . '/inc/custom-css.php';
require get_template_directory() . '/inc/required-plugin.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


if(class_exists( 'WooCommerce' )){
    // Handle cart in header fragment for ajax add to cart
    add_filter('add_to_cart_fragments', 'seo_crazy_header_add_to_cart_fragment');
    function seo_crazy_header_add_to_cart_fragment( $fragments ) {
        global $woocommerce;

        ob_start();

        seo_crazy_woocommerce_cart_link();

        $fragments['a.cart-button'] = ob_get_clean();

        return $fragments;

    }

    function seo_crazy_woocommerce_cart_link() {
        global $woocommerce;
        ?>

    <a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> <?php _e('in your shopping cart', 'woothemes'); ?>" class="cart-logo right-text"><i class="fa fa-cart-plus"></i><span class=cart-counter><?php echo sprintf(_n('%d ', '%d ', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); ?></span></a>
    <?php
    }

}


function seo_crazy_one_click_demo() {
  return array(
    array(
      'import_file_name'             => esc_html__('Demo Import 1' , 'seo-crazy'),
      'categories'                   => array( 'New category', 'Old category' ),
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo-data/demo-data.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo-data/demo-wiget.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo-data/seo-crazy-export.dat',
      'import_notice'                => esc_html__( 'A special note for this import.', 'seo-crazy' ),
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'seo_crazy_one_click_demo' );
