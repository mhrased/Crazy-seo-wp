<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.


function seo_theme_customizer($options){
    $options = array();
}
add_filter('cs_customize_options' , 'seo_theme_customizer');


function seo_theme_shortcode($options){
    $options = array();
}
add_filter('cs_shortcode_options' , 'seo_theme_shortcode');


function seo_theme_page_metabox($options){

$options = array(); // remove old options

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
    
$options[]    = array(
    'id'        => 'seo_custom_page_options',
    'title'     => esc_html__('Custom Page Heading','seo-crazy'),
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(

        // begin: a section
        array(
        'name'  => 'seo_custom_page_heading',
        'title' => esc_html__('Page Heading','seo-crazy'),
        'icon'  => 'fa fa-star',

        // begin: fields
        'fields' => array(
            array(
                'id'    => 'heading_text_switch',
                'type'  => 'switcher',
                'title' => esc_html__('Page Heading Switcher','seo-crazy'),
                'default' => true,
                'label' => esc_html__('disable if You do not want to Show Page Heading.','seo-crazy'),
                ),
            array(
                'id'    => 'custom_heading',
                'type'  => 'text',
                'title' => esc_html__('Custom Heading','seo-crazy'),
                'dependency'   => array( 'heading_text_switch', '==', 'true' ),
                'label' => esc_html__('Custom Heading On Your Page.','seo-crazy'),
                ),
            // end: a field
            ), // end: fields
        ), // end: a section
    ),
);

// -----------------------------------------
// Slider Metabox Options                    -
// -----------------------------------------
$options[]    = array(
    'id'        => 'seo_slide_options',
    'title'     => esc_html__('Slider Option','seo-crazy'),
    'post_type' => 'slider',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(

    // begin: a section
        array(
        'name'  => 'seo_slider_heading',
        'title' => esc_html__('Customize Slider','seo-crazy'),

        // begin: fields
        'fields' => array(
            array(
                'id'    => 'seo_heading_blue_text',
                'type'  => 'text',
                'title' => esc_html__('Page Heading Coloring Text','seo-crazy'),
                'label' => esc_html__('write color text here','seo-crazy'),
                'default' =>esc_html__('We measure','seo-crazy'),
                ),
            array(
                'id'    => 'seo_heading_nblue_text_clr',
                'type'  => 'color_picker',
                'title' => esc_html__('Page Heading Coloring Text Color','seo-crazy'),
                'label' => esc_html__('Select Color Here','seo-crazy'),
                'default' =>esc_attr__('#19b5fe','seo-crazy'),
                ),
            array(
                'id'    => 'seo_heading_normal_text',
                'type'  => 'text',
                'title' => esc_html__('Page Heading Text','seo-crazy'),
                'label' => esc_html__('write Normal text here','seo-crazy'),
                'default' =>esc_html__('the social web','seo-crazy'),
                ),
            array(
                'id'    => 'seo_heading_normal_text_clr',
                'type'  => 'color_picker',
                'title' => esc_html__('Page Heading Text Color','seo-crazy'),
                'label' => esc_html__('Select Color Here','seo-crazy'),
                'default' =>esc_attr__('#141414','seo-crazy'),
                ),
            array(
                'id'    => 'enable_overlay',
                'type'  => 'switcher',
                'title' => esc_html__('Enable Overlay','seo-crazy'),
                'label' => esc_html__('Slider Overlay Active if Enable','seo-crazy'),
                'default' =>true,
                ),
            array(
                'id'    => 'overlay_text',
                'type'  => 'text',
                'title' => esc_html__('Overlay Percentage','seo-crazy'),
                'label' => esc_html__('This Percentage should be Float Number & Max value is 1.','seo-crazy'),
                'default' =>esc_attr__('.5','seo-crazy'),
                'dependency' => array( 'enable_overlay', '==', 'true' ),
                ),
            array(
                'id'    => 'overlay_color',
                'type'  => 'color_picker',
                'title' => esc_html__('Overlay Color','seo-crazy'),
                'label' => esc_html__('Select Color As Overlay','seo-crazy'),
                'default' =>esc_attr__('#bbbbbb','seo-crazy'),
                'dependency' => array( 'enable_overlay', '==', 'true' ),
                ),
            array(
                'id'              => 'Buttons',
                'type'            => 'group',
                'title'           => esc_html__('Slide Button','seo-crazy'),
                'button_title'    => esc_html__('Add New','seo-crazy'),
                'accordion_title' => esc_html__('Add New Button','seo-crazy'),
                'fields'          => array(
                    array(
                        'id'    => 'type',
                        'type'  => 'select',
                        'title' => esc_html__('Button Type','seo-crazy'),
                        'options'  => array(
                            'bordered'  => 'Bordered Button',
                            'filled'   => 'Filled Button',
                            ),
                        ),
                    array(
                        'id'    => 'Button_text',
                        'type'  => 'text',
                        'title' => esc_html__('Button Text','seo-crazy'),
                        'default' => 'Read more'
                        ),
                    array(
                        'id'    => 'button_link',
                        'type'  => 'select',
                        'title' => esc_html__('Button Link','seo-crazy'),
                        'options'  => array(
                            esc_attr__('1','seo-crazy')  => 'Page List',
                            esc_attr__('2','seo-crazy')   => 'External Link',
                            ),
                        ),
                    array(
                        'id'    => 'button_link_to_page',
                        'type'  => 'select',
                        'title' => esc_html__('Page Link','seo-crazy'),
                        'options'  => 'page',
                        'dependency' => array( 
                            'button_link', '==', '1' 
                            ),
                        ),
                    array(
                        'id'    => 'button_margin',
                        'type'  => 'select',
                        'title' => esc_html__('Button Margin Right','seo-crazy'),
                        'default' => '0px',
                        'options'  => array(
                            esc_attr__('0px','seo-crazy')  => 'none',
                            esc_attr__('10px','seo-crazy')   => '10px',
                            esc_attr__('15px','seo-crazy')   => '15px',
                            esc_attr__('20px','seo-crazy')   => '20px',
                            ),
                        'dependency' => array( 
                            'button_link', '==', '1' 
                            ),
                        ),
                    array(
                        'id'    => 'button_link_to_url',
                        'type'  => 'text',
                        'title' => esc_html__('External Link','seo-crazy'),
                        'dependency' => array( 'button_link', '==', '2' ),
                        ),
                    array(
                        'id'    => 'button_color',
                        'type'  => 'color_picker',
                        'title' => esc_html__('Button Color','seo-crazy'),
                        'label' => esc_html__('Select Color Here','seo-crazy'),
                        'default' =>esc_attr__('#ffffff','seo-crazy'),
                        ),
                    array(
                        'id'    => 'button_background',
                        'type'  => 'color_picker',
                        'title' => esc_html__('Button Background','seo-crazy'),
                        'label' => esc_html__('Select Background Here','seo-crazy'),
                        'default' =>esc_attr__('#19b5fe','seo-crazy'),
                        ),
                    ),
                ),

            // end: a field


            ), // end: fields
        ), // end: a section
    ),
);    
    return $options;
}
add_filter( 'cs_metabox_options', 'seo_theme_page_metabox' );








function seo_theme_framework_setting($settings){

    $settings = array();
    
    
    $settings           = array(
        'menu_title'      => esc_html__('Theme Options','seo-crazy'),
        'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
        'menu_slug'       => 'seo-framework',
        'ajax_save'       => true,
        'show_reset_all'  => true,
        'framework_title' => esc_html__('SEO Framework - by Rased','seo-crazy'),
    );


    
    return $settings;
}
add_filter( 'cs_framework_settings', 'seo_theme_framework_setting' );






function seo_theme_options($options){

    $options = array(); // remove old options

    // -----------------------------------------
    // Page Metabox Options                    -
    // -----------------------------------------
    
$options[]    = array(
    'name'      => 'seo_header_option_settings',
    'title'     => esc_html__('Header','seo-crazy'),
    'icon'      => 'fa fa-home',
    'fields'    => array(
        array(
            'id'              => 'header_boxes',
            'type'            => 'group',
            'title'           => esc_html__('Header Right Boxes','seo-crazy'),
            'button_title'    => esc_html__('Add New','seo-crazy'),
            'accordion_title' => esc_html__('Add New Box','seo-crazy'),
            'fields'          => array(
                array(
                    'id'    => 'header_box_icon',
                    'type'  => 'icon',
                    'title' => esc_html__('Select Icon','seo-crazy'),
                    ),
                array(
                    'id'    => 'header_box_text',
                    'type'  => 'text',
                    'title' => esc_html__('Header Text','seo-crazy'),
                    ),
                array(
                    'id'        => 'header_box_text_color',
                    'type'      => 'color_picker',
                    'title'     => esc_html__('Header Text Color','seo-crazy'),
                    'default'   => esc_attr__('#ffffff','seo-crazy'),
                    ),
                array(
                    'id'    => 'boxes_link',
                    'type'  => 'text',
                    'title' => esc_html__('Link','seo-crazy'),
                    ),
                ),
            ),
        array(
            'id'              => 'header_social_box',
            'type'            => 'group',
            'title'           => esc_html__('Header Left Social Icon','seo-crazy'),
            'button_title'    => esc_html__('Add New','seo-crazy'),
            'accordion_title' => esc_html__('Add New Social Icon','seo-crazy'),
            'fields'          => array(
                array(
                    'id'    => 'header_social_icon',
                    'type'  => 'icon',
                    'title' => esc_html__('Select Icon','seo-crazy'),
                    ),
                array(
                    'id'    => 'header_social_text',
                    'type'  => 'text',
                    'title' => esc_html__('Header Icon Link','seo-crazy'),
                    ),
                ),
            ),
        array(
            'id'           => 'header_top_bg_color',
            'type'         => 'color_picker',
            'title'        => esc_html__('Header_bg','seo-crazy'),
            'default'      => esc_attr__('#19b2fa','seo-crazy'),
            ),
        )
    ); 
    
    
$options[]    = array(
    'name'      => 'seo_logo_option_settings',
    'title'     => esc_html__('Logo','seo-crazy'),
    'icon'      => 'fa fa-home',
    'fields'    => array(
        array(
            'id'           => 'logo_image',
            'type'         => 'switcher',
            'title'        => esc_html__('If switcher mode ON','seo-crazy'),
            'default'      => true,
            ),
        array(
            'id'           => 'logo_image_upload',
            'type'         => 'image',
            'title'        => esc_html__('Upload Logo Image','seo-crazy'),
            'dependency'   => array( 'logo_image', '==', 'true' ),
            ),
        array(
            'id'           => 'logo_text',
            'type'         => 'text',
            'title'        => esc_html__('Logo Text','seo-crazy'),
            'dependency'   => array( 'logo_image', '==', 'false' ),
            ),
        )
    );    
    
$options[]    = array(
    'name'      => 'seo_typography_option_settings',
    'title'     => esc_html__('Typography','seo-crazy'),
    'icon'      => 'fa fa-home',
    'fields'    => array(
        array(
            'id'        => 'body_font',
            'type'      => 'typography',
            'title'     => esc_html__('Body Font','seo-crazy'),
            'default'   => array(
                'family'  => esc_html__('Roboto','seo-crazy'),
                'variant' => esc_attr__('regular','seo-crazy'),
                'font'    => 'google', // this is helper for output
                ),
            ),
        array(
            'id'       => 'body_font_variant',
            'type'     => 'checkbox',
            'title'    => esc_html__('Body Font  Type','seo-crazy'),
            'options'  => array(
                '100'  => '100',
                '100i'   => '100i',
                '200' => '200',
                '200i'    => '200i',
                '300'  => '300',
                '300i'  => '300i',
                '400'  => '400',
                '400i'   => '400i',
                '500' => '500',
                '500i'    => '500i',
                '700'  => '700',
                '700i'  => '700i',
                '900'  => '900',
                '900i'  => '900i',
                ),
            'default'  => array( '400', '400i' , '700', '700i' , )
            ),
        array(
            'id'        => 'heading_font',
            'type'      => 'typography',
            'title'     => esc_html__('Heading Font','seo-crazy'),
            'default'   => array(
                'family'  => esc_html__('Roboto','seo-crazy'),
                'variant' => esc_attr__('700','seo-crazy'),
                'font'    => 'google', // this is helper for output
                ),
            ),
        array(
            'id'       => 'heading_font_variant',
            'type'     => 'checkbox',
            'title'    => esc_html__('Heading Font  Type','seo-crazy'),
            'options'  => array(
                '100'  => '100',
                '100i'   => '100i',
                '200' => '200',
                '200i'    => '200i',
                '300'  => '300',
                '300i'  => '300i',
                '400'  => '400',
                '400i'   => '400i',
                '500' => '500',
                '500i'    => '500i',
                '700'  => '700',
                '700i'  => '700i',
                '900'  => '900',
                '900i'  => '900i',
                ),
            'default'  => array( '400', '400i' , '700', '700i' , )
            ),
        )
    );  
    
$options[]    = array(
    'name'      => 'seo_styling_option_settings',
    'title'     => esc_html__('Style','seo-crazy'),
    'icon'      => 'fa fa-home',
    'fields'    => array(
        array(
            'id'           => 'theme_color',
            'type'         => 'color_picker',
            'title'        => esc_html__('Theme Color','seo-crazy'),
            'default'      => esc_attr__('#19b2fa','seo-crazy'),
            ),
        array(
            'id'           => 'theme_secendary_color',
            'type'         => 'color_picker',
            'title'        => esc_html__('Theme Secendary Color','seo-crazy'),
            'default'      => esc_attr__('#19b2fa','seo-crazy'),
            ),
        array(
            'id'           => 'preloader_style',
            'type'         => 'switcher',
            'title'        => esc_html__('Preloader','seo-crazy'),
            'default'      => true,
            ),
        array(
            'id'           => 'seo_boxed_style',
            'type'         => 'switcher',
            'title'        => esc_html__('Boxed Style','seo-crazy'),
            'default'      => false,
            ),
        array(
            'id'           => 'body_bac_color',
            'type'         => 'color_picker',
            'title'        => esc_html__('Body Background Color','seo-crazy'),
            'dependency'   => array( 
                'seo_boxed_style', '==', 'true' 
                ),
            ),
        array(
            'id'           => 'body_bac_image',
            'type'         => 'image',
            'title'        => esc_html__('Body Background Image','seo-crazy'),
            'dependency'   => array( 
                'seo_boxed_style', '==', 'true' 
                ),
            ),
        array(
            'id'           => 'body_bac_image_repeat',
            'type'         => 'select',
            'default'      => esc_attr__('repeat','seo-crazy'),
            'title'        => esc_html__('Background Image Repeat','seo-crazy'),
            'options'      => array(
                'repeat'          => 'Repeat',
                'no-repeat'       => 'No Repeat',
                'cover'           => 'Cover',
                ),
            'dependency'   => array( 
                'seo_boxed_style', '==', 'true' 
                ),
            ),
        array(
            'id'           => 'body_bac_image_attatchment',
            'type'         => 'select',
            'default'      => esc_attr__('scroll','seo-crazy'),
            'title'        => esc_html__('Background Image Attatchment','seo-crazy'),
            'options'      => array(
                'scroll'          => 'Scroll',
                'fixed'           => 'Fixed',
                ),
            'dependency'   => array( 
                'seo_boxed_style', '==', 'true' 
                ),
            ),
        )
    );
    
$options[]    = array(
    'name'      => 'seo_blog_option_settings',
    'title'     => esc_html__('Blog','seo-crazy'),
    'icon'      => 'fa fa-home',
    'fields'    => array(
        array(
            'id'           => 'post_by',
            'type'         => 'switcher',
            'title'        => esc_html__('Display Post By','seo-crazy'),
            'default'      => true,
            ),
        array(
            'id'           => 'post_date',
            'type'         => 'switcher',
            'title'        => esc_html__('Display Post Date','seo-crazy'),
            'default'      => true,
            ),
        array(
            'id'           => 'post_comment_count',
            'type'         => 'switcher',
            'title'        => esc_html__('Display Post comment Count','seo-crazy'),
            'default'      => true,
            ),
        array(
            'id'           => 'post_catagory',
            'type'         => 'switcher',
            'title'        => esc_html__('Display Post Catagory','seo-crazy'),
            'default'      => true,
            ),
        array(
            'id'           => 'post_tag',
            'type'         => 'switcher',
            'title'        => esc_html__('Display Post Tag','seo-crazy'),
            'default'      => true,
            ),
        array(
            'id'           => 'post_nav',
            'type'         => 'switcher',
            'title'        => esc_html__('Display Post Nav','seo-crazy'),
            'default'      => true,
            ),
        )
    );

$options[]    = array(
    'name'      => 'seo_footer_option_settings',
    'title'     => esc_html__('Footer','seo-crazy'),
    'icon'      => 'fa fa-home',
    'fields'    => array(
        array(
            'id'           => 'footer_background_color',
            'type'         => 'color_picker',
            'title'        => esc_html__('Footer Background Color','seo-crazy'),
            'default'      => esc_attr__('#131313','seo-crazy'),
            ),
        array(
            'id'           => 'footer_background_image',
            'type'         => 'image',
            'title'        => esc_html__('Footer Background Iamge','seo-crazy'),
            ),
        array(
            'id'           => 'footer_background_image_attatchment',
            'type'         => 'select',
            'options'      => array(
                'repeat'          => 'Repeat',
                'no-repeat'       => 'No Repeat',
                'cover'           => 'Cover',
                ),
            'title'        => esc_html__('Footer Background Iamge Attatchment','seo-crazy'),
            ),
        array(
            'id'           => 'footer_text_color',
            'type'         => 'color_picker',
            'title'        => esc_html__('Footer Text Color','seo-crazy'),
            'default'      => esc_attr__('#9d9d9d','seo-crazy'),
            ),
        array(
            'id'           => 'footer_heading_color',
            'type'         => 'color_picker',
            'title'        => esc_html__('Footer Heading Color','seo-crazy'),
            'default'      => esc_attr__('#ffffff','seo-crazy'),
            ),
        array(
            'id'           => 'footer_copy_text',
            'type'         => 'text',
            'title'        => esc_html__('Footer Copy Right Text','seo-crazy'),
            ),
        )
    );
    
$options[]    = array(
    'name'      => 'seo_script_option_settings',
    'title'     => esc_html__('Script','seo-crazy'),
    'icon'      => 'fa fa-home',
    'fields'    => array(
        array(
            'id'           => 'header_script',
            'type'         => 'textarea',
            'title'        => esc_html__('Header Script Add','seo-crazy'),
            'sanitize'     => false,
            ),
    
        array(
            'id'           => 'custom_css',
            'type'         => 'textarea',
            'title'        => esc_html__('Custom CSS','seo-crazy'),
            'sanitize'     => false,
            ),
        array(
            'id'           => 'footer_script',
            'type'         => 'textarea',
            'title'        => esc_html__('footer Script Add','seo-crazy'),
            'sanitize'     => false,
            ),
        )
    );
        
    return $options;
}
add_filter( 'cs_framework_options', 'seo_theme_options' );
