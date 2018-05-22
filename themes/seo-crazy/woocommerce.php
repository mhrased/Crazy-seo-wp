<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SEO
 */

get_header(); ?>

    <div class="seo-breadcum">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        <?php echo esc_html_e('SHOP','seo-crazy') ; ?>
                    </h1>
                    <?php if(function_exists('bcn_display')) bcn_display(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="seo-layout-single single-layout-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        woocommerce_content();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer();
