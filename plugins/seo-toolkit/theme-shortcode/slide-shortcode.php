<?php


add_shortcode('seo_slide', 'seo_slides_shortcode');  
function seo_slides_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => -1,
        'height' => '754',
        'slider_id' =>'',
        'loop' => 'true',
        'autoplay' => 'true',
        'autoplayTime' => 5000,
        'nav' => 'true',
        'dots' => 'true',
    ), $atts) );
     
    if($count == 1){
        $q = new WP_Query(array('posts_per_page' => $count,'post_type' => 'slider', 'p' => $slider_id)); 
    }else{
        $q = new WP_Query(
            array(
                'posts_per_page' => $count,
                  'post_type' => 'slider',
            )
        ); 
    }
         
    if($count == 1){
        $list ='';
    }else{
        $list = '
        <script>
            jQuery(window).load(function(){
                jQuery(".seo-slider").owlCarousel({
                    items : 1,
                    loop :'.$loop.',
                    autoplay :'.$autoplay.', 
                    autoplayTimeout :'.$autoplayTime.', 
                    nav : '.$nav.',
                    dots : '.$dots.',
                    navText : ["<i class=\'fa fa-angle-left\'></i>","<i class=\'fa fa-angle-right\'></i>"],
                });
                jQuery(".preloader-wrapper").fadeOut();
            });
        </script>';
    }  
    
    
    $list .= '<div style="height:'.$height.'px" class="seo-preloader-wrapper">';
    $preloader_style = cs_get_option('preloader_style');
    if($preloader_style != true){
        $list .= '
            <div class="preloader-wrapper">
                <div class="loader">Loading...</div>
            </div>';
    }
    $list .= '
    <div class="seo-slider">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
    
        if(get_post_meta($idd, 'seo_slide_options', true)){
            $meta_slide = get_post_meta($idd, 'seo_slide_options', true);
        }else{
            $meta_slide = array();
        }
    
        if(get_the_post_thumbnail($idd , 'thumbnail')){
            $image_p = get_the_post_thumbnail($idd , 'thumbnail');
        }else{
            $meta_slide = array();
        }
    
        if(array_key_exists('enable_overlay' , $meta_slide)){
            $enable_overlay = $meta_slide['enable_overlay'];
        }else{
            $enable_overlay = true;
        }
    
        if(array_key_exists('overlay_text' , $meta_slide)){
            $overlay_text = $meta_slide['overlay_text'];
        }else{
            $overlay_text = .5;
        }
    
        if(array_key_exists('overlay_color' , $meta_slide)){
            $overlay_color = $meta_slide['overlay_color'];
        }else{
            $overlay_color = '#bbbbbb';
        }
    
        if(array_key_exists('seo_heading_nblue_text_clr' , $meta_slide)){
            $text_clr = $meta_slide['seo_heading_nblue_text_clr'];
        }else{
            $text_clr = '#19b5fe';
        }
    
        if(array_key_exists('seo_heading_normal_text_clr' , $meta_slide)){
            $normal_text = $meta_slide['seo_heading_normal_text_clr'];
        }else{
            $normal_text = '#141414';
        }
    
    
        $post_content = get_the_content();
        $list .= '
            <div style="background-image:url('.get_the_post_thumbnail_url($idd , 'large').'); height:'.$height.'px" class="seo-slider-item">';
            if($enable_overlay == true){
                $list.='<div style="background:'.$overlay_color.'; opacity:'.$overlay_text.'" class="seo-slide-overlay"></div>';
            }

            $list.='
                <div class="seo-table">
                    <div class="seo-tableCell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                <div class="seo-slider-content">
                                    <h4 class="seo-slider-heading">'.get_the_title($idd).'</h4>
                                    <h2 style="color:'.$text_clr.'">'.$meta_slide['seo_heading_blue_text'].'&nbsp;<span style="color:'.$normal_text.'">'.$meta_slide['seo_heading_normal_text'].'</span></h2>
                                    '.wpautop($post_content).'';
    
                                    if(!empty($meta_slide['Buttons'])){
                                        $list .='<div class="seo-slide-btton">';
                                        
                                        foreach($meta_slide['Buttons'] as $button){
                                            if($button['type'] == 1){
                                                $btn_link = get_the_link($button['button_link_to_page']);
                                            }else{
                                                $btn_link = $button['button_link_to_url'];
                                            }
                                            
                                            $list .='<a style="margin-right:'.$button['button_margin'].';color:'.$button['button_color'].';background:'.$button['button_background'].'" class="'.$button['type'].'-btn seo-slide-btn" href="'.$btn_link.'">'.$button['Button_text'].'</a>';
                                        }
                                        
                                        $list .='</div>';
                                    }
    
    $list .='
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';        
    endwhile;
    $list.= '</div></div>';
   
    wp_reset_query();
   
    return $list;
}
