<?php 
add_shortcode('seo_cta','seo_cta_sortcode');
function seo_cta_sortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'link_text' => 'See More',
        'type' => 1,
        'link_to_page' => '',
        'external_link' => ''
    ), $atts) );
    
    if($type == 1){
        $page_source = get_page_link($link_to_page);
    }else{
        $page_source = $external_link;
    }
    
    
    $seo_cta = '
        <div class="seo-cta-box">
            <div class="cta-box-content">
                <h3>'.$title.'</h3>
                '.wpautop($desc).'
                <a href="'.$page_source.'" class="filled-btn">'.$link_text.'</a>
            </div>
        </div>';
    
    return $seo_cta;
}
