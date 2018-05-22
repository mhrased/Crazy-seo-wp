<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SEO
 */


$vc_check = get_post_meta($post->ID, '_wpb_vc_js_status', true);
if($vc_check == true){
    $vc_class = '';
}else{
     $vc_class = 'single-layout-padding';
}
get_header(); ?>

    <div class="seo-breadcum">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <?php if(function_exists('bcn_display') && get_post_type() != 'project') bcn_display(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="seo-layout-single-page <?php echo esc_attr($vc_class); ?>">
        <div class="container">
            <div class="row">
                <?php if(get_post_type() == 'project') : ?>
                <div class="col-md-4">
                    <div class="custom-wigets">
                        <?php dynamic_sidebar('seo_project_sidebar'); ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="<?php if(get_post_type() == 'project') : ?><?php if(is_active_sidebar('seo_project_sidebar')) : ?>col-md-8<?php else : ?>col-md-10 col-md-offset-1<?php endif; ?><?php else : ?>col-md-8<?php endif; ?>">
                    <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', get_post_format() );
                    
                            $post_nav =cs_get_option('post_nav');
                            if(get_post_type() != 'project'){
                                if($post_nav != true){
                                    echo '';
                                }else{
                                    the_post_navigation(); 
                                }
                               
                            }
                            

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                    ?>
                </div>
                <?php if(get_post_type() != 'project') { get_sidebar(); } ?>
            </div>
        </div>
    </div>

    <?php 
get_footer();
