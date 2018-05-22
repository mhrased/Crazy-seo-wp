<?php 
add_shortcode('seo_testimonial','seo_testimonial_sortcode');
function seo_testimonial_sortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'clint_name' => '',
        'title' => '',
        'clint_image' => '',
        'desc' => '',
    ), $atts) );
    
    $testimonial_img_array = wp_get_attachment_image_src($clint_image, 'thumbnail');
    
    $seo_testimonial = '
        <div class="testimonial-single-box">
            <div class="testimonial-top">
                <div class="testimonial-img">
                    <img src="'.$testimonial_img_array[0].'" alt="'.$title.'"/></div>
                <div class="testimonial-title">
                    <h3>'.$clint_name.'<br /><span>'.$title.'</span></h3>
                </div>
            </div>
            <div class="testimonial-bottom">'.wpautop($desc).'</div>
        </div>';
    
    return $seo_testimonial;
}
