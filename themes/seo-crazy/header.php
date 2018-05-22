<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SEO
 */

?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">



        <?php
        
        $header_boxes = cs_get_option('header_boxes');
        $header_social_box = cs_get_option('header_social_box');
        $logo_image = cs_get_option('logo_image');
        $logo_image_upload = cs_get_option('logo_image_upload');
        $logo_text = cs_get_option('logo_text');
        $preloader_style = cs_get_option('preloader_style');
        $seo_boxed_style = cs_get_option('seo_boxed_style');

        wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php if($preloader_style == true) : ?>
        <!-- preloader -->
        <script>
            jQuery(window).load(function() {
                jQuery("#loader-wrapper").fadeOut();
            });

        </script>
        <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        <?php endif; ?>

        <div id="page" class="site<?php if($seo_boxed_style == true) : ?> seo-boxed-layout<?php endif; ?>">

            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="socil-icon">
                                <?php if(!empty($header_social_box)) : ?>
                                <ul>
                                    <?php foreach($header_social_box as $icon) : ?>
                                    <li>
                                        <a href="<?php echo esc_url($icon['header_social_text']); ?>">
                                           <i class="<?php echo esc_attr($icon['header_social_icon']); ?>"></i>
                                       </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 heading-right">
                            <?php if(!empty($header_boxes)) : ?>
                            <div class="header-right">
                                <?php foreach($header_boxes as $box) : ?>
                                <?php if(!empty($box['boxes_link'])) : ?>
                                <a href="<?php echo esc_url($box['boxes_link']); ?>" <?php else : ?>
                                    <div <?php endif; ?>
                                        class="right-one">
                                        <i class="<?php echo esc_attr($box['header_box_icon']); ?>"></i>
                                        <p>
                                            <?php echo esc_html($box['header_box_text']); ?>
                                        </p>
                                        <?php if(!empty($box['boxes_link'])) : ?>
                                </a>
                                <?php else : ?>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; ?>

                            </div>
                            <?php endif; ?>
                            <?php if(class_exists( 'WooCommerce' )) {
                                seo_crazy_woocommerce_cart_link();
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="site-logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <?php if($logo_image == true && !empty($logo_image_upload)) : $img_logo_src= wp_get_attachment_image_src($logo_image_upload , 'large', false); ?>


                                    <img src="<?php echo esc_url($img_logo_src[0]); ?>" alt="<?php echo esc_html(bloginfo('name')); ?>">

                                    <?php elseif($logo_image == false && !empty($logo_text)) : ?>

                                    <h2 class="logo-text">
                                        <?php echo esc_html($logo_text); ?>
                                    </h2>

                                    <?php else : ?>

                                    <img src="http://crazyupload.online/wp-content/uploads/2017/03/logo.png" alt="<?php echo esc_html(bloginfo('name')); ?>">

                                    <?php endif; ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="seo-responsive-menu"></div>
                            <div class="main-menu">
                                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
