<?php 
add_shortcode('seo_tile_gallery','seo_tile_gallery_sortcode');
function seo_tile_gallery_sortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'images' => '',
        'height' => '310',
        'br_size' => 'large',
    ), $atts) );
    
    
    $image_ids = explode(',', $images);
    $image_count = count($image_ids);
    $image_no = 0 ;
    
    if(!empty($images)){
            $seo_tile_gallery ='<div class="seo-tile-gallery tile-gallery-'.$image_count.'">';
            
        
            foreach($image_ids as $images){
            $image_array = wp_get_attachment_image_src($images , $br_size);
            $image_no++;
            $seo_tile_gallery .='<div style="background-image:url('.$image_array[0].'); height:'.$height.'px;" class="tile-gallery-block tile-gallery-block'.$image_no.'"></div>';
            }
            
            $seo_tile_gallery .='</div>';
    }else{
        $seo_tile_gallery ='';
    }
    
    return $seo_tile_gallery;
}
