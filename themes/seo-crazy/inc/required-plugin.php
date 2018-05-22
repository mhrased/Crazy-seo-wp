<?php

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'seo_theme_register_required_plugins' );


function seo_theme_register_required_plugins() {

	$plugins = array(

		array(
			'name'               => esc_html__('SEO Helper','seo-crazy'), 
			'slug'               => 'seo-toolkit', 
			'source'             => get_stylesheet_directory() . '/inc/plugins/seo-toolkit.zip',
			'required'           => true,
			'version'            => esc_html__('1.0', 'seo-crazy'), 
			'force_activation'   => true, 
			'force_deactivation' => true, 
		),
		array(
			'name'               => esc_html__('WPBakery Visual Composer', 'seo-crazy'), 
			'slug'               => 'js_composer', 
			'source'             => get_stylesheet_directory() . '/inc/plugins/js_composer.zip',
			'required'           => true,
			'version'            => esc_html__('5.1', 'seo-crazy'), 
			'force_activation'   => false, 
			'force_deactivation' => false, 
		),

        array(
			'name'      => esc_html__('Contact Form 7','seo-crazy'), 
			'slug'      => 'contact-form-7',
			'required'  => false,
            'version'   => esc_html__('4.8', 'seo-crazy'), 
		),
        
        array(
			'name'      => esc_html__('One Click Demo Import','seo-crazy'), 
			'slug'      => 'one-click-demo-import',
			'required'  => false,
            'version'   => esc_html__('2.1', 'seo-crazy'), 
		),
        
        array(
			'name'      => esc_html__('Breadcrumb NavXT','seo-crazy'), 
			'slug'      => 'breadcrumb-navxt',
			'required'  => true,
            'version'    => esc_html__('5.7', 'seo-crazy'), 
		),

	);


	$config = array(
		'id'           => 'seo-crazycafe',                 
		'default_path' => '',                      
		'menu'         => 'seo-install-plugins', 
		'has_notices'  => true,                    
		'dismissable'  => true,                    
		'dismiss_msg'  => '',                      
		'is_automatic' => false,                   
		'message'      => '',                      
	);

	tgmpa( $plugins, $config );
}
