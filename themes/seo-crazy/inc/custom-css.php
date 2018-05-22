<?php

if ( ! function_exists( 'seo_fonts_url' ) ) :
/**
 * Register Google fonts.
 *
 * @return string Google fonts URL for the theme.
 */
function seo_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $body_font_variant = cs_get_option('body_font_variant');
    $body_font_variant_proceed = implode(',' , $body_font_variant);
    $body_subsets   = ':'.$body_font_variant_proceed.'';
    
    $heading_font_variant = cs_get_option('heading_font_variant');
    $heading_font_variant_proceed = implode(',' , $heading_font_variant);
    $heading_subsets   = ':'.$heading_font_variant_proceed.'';

    $body_font = cs_get_option('body_font')['family'];
    $body_font .= $body_subsets;
    
    $heading_font = cs_get_option('heading_font')['family'];
    $heading_font .= $heading_subsets;
    
    /* translators: If there are characters in your language that are not supported by this font, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== esc_html_x( 'on', 'Karla font: on or off', 'seo-crazy' ) ) {
        $fonts[] = $body_font;
    }

    /* translators: If there are characters in your language that are not supported by this font, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== esc_html_x( 'on', 'Lato font: on or off', 'seo-crazy' ) ) {
        $fonts[] = $heading_font;
    }

    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
        ), 'https://fonts.googleapis.com/css' );
    }

    return $fonts_url;
}
endif;


/**
 * Enqueue scripts and styles.
 */
function seo_scripts() {

    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'seo-fonts', seo_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'seo_scripts' );




function seo_styles_method() {
	wp_enqueue_style(
		'custom-style',
		get_template_directory_uri() . '/assets/css/custom_script.css'
	);
        $body_font = cs_get_option('body_font')['family'];
        $body_font_variant = cs_get_option('body_font')['variant'];
    
        $heading_font = cs_get_option('heading_font')['family'];
        $heading_font_variant = cs_get_option('heading_font')['variant'];
    
        $seo_boxed_style = cs_get_option('seo_boxed_style');
        $body_bac_color = cs_get_option('body_bac_color');
        $body_bac_image = cs_get_option('body_bac_image');
        $body_bac_image_array = wp_get_attachment_image_src( $body_bac_image, $size = 'large', $icon = false );
        $body_bac_image_repeat = cs_get_option('body_bac_image_repeat');
        $body_bac_image_attatchment = cs_get_option('body_bac_image_attatchment');
    
        $footer_background_color = cs_get_option('footer_background_color');
        $footer_heading_color = cs_get_option('footer_heading_color');
        $footer_text_color = cs_get_option('footer_text_color');
        $theme_color = cs_get_option('theme_color');
        $theme_secendary_color = cs_get_option('theme_secendary_color');
    
        $custom_css = '
            body{ font-family: '.esc_html($body_font).' ; font-weight: '.esc_attr($body_font_variant).'}
            h1, h2 , h3 , h4 , h5 ,h6, .menu li a {font-family: '.esc_html($heading_font).'; font-weight: '.esc_attr($heading_font_variant).'}
        ';
    
        if($seo_boxed_style == true){
            if(!empty($body_bac_color)){
                $custom_css .= '
                    body{ background-color: '.esc_attr($body_bac_color).'; }
                ';
            }
            if(!empty($body_bac_image)){
                $custom_css .= '
                    body{ background-image: url('.esc_ulr($body_bac_image_array[0]).'); }
                ';
            }
            if(!empty($body_bac_image_repeat)){
                $custom_css .= '
                    body{ background-repeat: '.esc_attr($body_bac_image_repeat).'; }
                ';
            }
            if(!empty($body_bac_image_attatchment)){
                $custom_css .= '
                    body{ background-attachment: '.esc_attr($body_bac_image_attatchment).'; }
                ';
            }
        }
        if(!empty($footer_background_color)){
            $custom_css .= '
                .site-footer {
                    background: '.esc_attr($footer_background_color).';
                }
            ';
        }
        if(!empty($footer_heading_color)){
            $custom_css .= '
                .widget-title  {
                    color: '.esc_attr($footer_heading_color).';
                }
            ';
        }
        if(!empty($footer_text_color)){
            $custom_css .= '
                .textwidget {
                    color: '.esc_attr($footer_text_color).';
                }
                .textwidget a{
                    color: '.esc_attr($footer_text_color).';
                }
            ';
        }
        if(!empty($theme_color)){
            $custom_css .= '
                .header-top , .seo-slider .owl-nav div:hover i , .seo-slider .owl-dots .active , .seo-social-area a , .vc_btn3.vc_btn3-color-grey.vc_btn3-style-modern , .vc_btn3.vc_btn3-color-juicy-pink, .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-flat , .custom-head-ing::before , .seo-contact-form2 , .seo-breadcum , .preloader-wrapper , .menu li ul{ background-color:'.esc_attr($theme_color).'}
                .header-top , .menu li a:hover , .service-content-two a::after , .cta_two-box-content a.bordered-btn , a:hover{ color:'.esc_attr($theme_color).'}
            ';
        }
        if(!empty($theme_secendary_color)){
            $custom_css .= '
                .filled-btn::after {
                    background-color: '.esc_attr($theme_secendary_color).';
                }
            ';
        }
    
        wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'seo_styles_method' );


?>
