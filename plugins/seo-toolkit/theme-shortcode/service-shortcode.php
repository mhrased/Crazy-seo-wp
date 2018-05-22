<?php 
add_shortcode('seo_service','seo_service_sortcode');
function seo_service_sortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'link_text' => 'See More',
        'type' => 1,
        'link_to_page' => '',
        'external_link' => '',
        'icon' => 2,
        'upload_icon' => '',
        'choose_icon' => '',
        'box_bac' => '',
    ), $atts) );
    
    if($type == 1){
        $page_source = get_page_link($link_to_page);
    }else{
        $page_source = $external_link;
    }
    
    $service_box_bg_array = wp_get_attachment_image_src($box_bac, 'medium');
    
    $seo_service = '
        <div class="seo-service-box">
            <div style="background:url('.$service_box_bg_array[0].')" class="service-box-icon">
                <div class="service-box-table">
                    <div class="service-box-tableCell">';
                        
                        if($icon == 1){
                            $service_icon_array = wp_get_attachment_image_src($upload_icon, 'thumbnail');
                            $seo_service .= '<img src="'.$service_icon_array[0].'" alt="" />';
                        }else{
                            $seo_service .= '<i class="'.$choose_icon.'"></i>';
                        }
    
            $seo_service .= '
                    </div>
                </div>
            </div>
            <div class="service-box-content">
                <h3>'.$title.'</h3>
                '.wpautop($desc).'
                <a href="'.$page_source.'">'.$link_text.'</a>
            </div>
        </div>';
    
    return $seo_service;
}
