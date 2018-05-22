<?php 
add_shortcode('seo_service_two','seo_service_two_sortcode');
function seo_service_two_sortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'link_text' => 'Read More',
        'type' => 1,
        'link_to_page' => '',
        'external_link' => '',
        'icon' => 2,
        'upload_icon' => '',
        'choose_icon' => '',
    ), $atts) );
    
    if($type == 1){
        $page_source = get_page_link($link_to_page);
    }else{
        $page_source = $external_link;
    }
    

    
    $seo_service_two = '<div class="service-box-two">
        <div class="service-icon-two">';
    
        if($icon == 1){
            $service_icon_array = wp_get_attachment_image_src($upload_icon, 'thumbnail');
            $seo_service_two .= '<img src="'.$service_icon_array[0].'" alt="" />';
        }else{
            $seo_service_two .= '<i class="'.$choose_icon.'"></i>';
        }
    
    $seo_service_two .='        
        </div>  
        <div class="service-content-two">
            <h3>'.$title.'</h3>
            '.wpautop($desc).'
            <a href="'.$page_source.'">'.$link_text.'</a>
        </div>    
    </div>';
    
    
    return $seo_service_two;
}
