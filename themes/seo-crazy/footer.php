<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SEO
 */

 $footer_copy_text = cs_get_option('footer_copy_text');
 $fooer_copyright_text_allow_text = array(
                                    'a' => array(
                                        'href' => array(),
                                        'title' => array()
                                    ),
                                    'img' => array(
                                        'alt' => array(),
                                        'src' => array()
                                    ),
                                    'br' => array(),
                                    'em' => array(),
                                    'strong' => array(),
                                );
?>


    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-weiget">
            <div class="container">
                <?php if(is_active_sidebar('seo_footer')) : ?>
                <div class="row">
                    <?php dynamic_sidebar('seo_footer'); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="footer-bottom">
                        <div class="col-md-12">
                            <?php
                                if(!empty($footer_copy_text)){
                                    echo wp_kses($footer_copy_text , $fooer_copyright_text_allow_text);
                                }else{
                                    esc_html_e('Copyright @ 2016 - All Rights Reserved','seo-crazy'); 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- #colophon -->
    </div>
    <!-- #page -->

    <?php wp_footer(); ?>


    </body>

    </html>
