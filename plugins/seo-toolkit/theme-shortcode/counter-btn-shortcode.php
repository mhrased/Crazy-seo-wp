<?php 
add_shortcode('seo_btn','seo_btn_sortcode');
function seo_btn_sortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'link_text' => esc_html__('See More' , 'seo-toolkit'),
        'type' => 1,
        'link_to_page' => '',
        'external_link' => ''
    ), $atts) );
    
    if($type == 1){
        $page_source = get_page_link($link_to_page);
    }else{
        $page_source = $external_link;
    }
    
    
    $seo_btn = '
        <div class="counter-filled-btn">
            <a href="'.esc_url($page_source , 'seo-toolkit').'" class="filled-btn">'.esc_html($link_text , 'seo-toolkit').'</a>
        </div>';
    
    return $seo_btn;
}
