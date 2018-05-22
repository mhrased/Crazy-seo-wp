<?php
/**
 * The template for displaying archive pages
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
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                    </h1>
                    <?php if(function_exists('bcn_display')) bcn_display(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="seo-layout-single single-layout-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
                    if ( have_posts() ) : ?>

                        <!-- .page-header -->

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();

                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', get_post_format() );

                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif; ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

    <?php
get_footer();
