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

get_header(); while ( have_posts() ) : the_post(); 

if(get_post_meta($post->ID, 'seo_custom_page_options', true)){
    $post_meta = get_post_meta($post->ID, 'seo_custom_page_options', true);
}else{
    $post_meta = array();
}


if(array_key_exists('heading_text_switch', $post_meta)){
    $heading_text_switch = $post_meta['heading_text_switch'] ;
}else{
    
    $heading_text_switch = true;
}

if(array_key_exists('custom_heading', $post_meta)){
    $custom_heading = $post_meta['custom_heading'] ;
}else{
    
    $custom_heading = '';
}

$vc_check = get_post_meta($post->ID, '_wpb_vc_js_status', true);
if($vc_check == true){
    $vc_class = '';
}else{
     $vc_class = 'single-layout-padding';
}
?>
    <?php if($heading_text_switch == true) : ?>
    <div class="seo-breadcum">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        <?php if(!empty($custom_heading)) { echo $custom_heading; }else{ the_title(); } ?>
                    </h1>
                    <?php if(function_exists('bcn_display')) bcn_display(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="seo-layout-single <?php echo esc_attr($vc_class); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        get_template_part( 'template-parts/content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                     // End of the loop.
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; get_footer();
