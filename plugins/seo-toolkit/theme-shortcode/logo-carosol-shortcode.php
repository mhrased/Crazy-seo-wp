<?php 
add_shortcode('seo_logo_carosol','seo_logo_carousel_sortcode');
function seo_logo_carousel_sortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'logos' => '',
        'desk_count' => '5',
        'tab_count' => '3',
        'mob_count' => '2',
        'loop' => 'true',
        'autoplay' => 'true',
        'autoplaytime' => 5000,
        'nav' => 'true',
        'dots' => 'true',
    ), $atts) );
    
    
    $logo_ids = explode(',', $logos);
    
    $seo_logo_carousel = '
        <script>
            jQuery(window).load(function(){
                jQuery(".seo-logo-carousel").owlCarousel({
                    margin : 30,
                    items : 5,
                    loop :'.$loop.',
                    autoplay :'.$autoplay.', 
                    autoplayTimeout :'.$autoplaytime.', 
                    nav : '.$nav.',
                    dots : '.$dots.',
                    navText : ["<i class=\'fa fa-angle-left\'></i>","<i class=\'fa fa-angle-right\'></i>"],
                });
            });
        </script>
    ';
    $seo_logo_carousel .= '
    <div class="seo-logo-carousel">';
    
    foreach($logo_ids as $logo){
         $logo_carousel_array = wp_get_attachment_image_src($logo , 'large');
         $seo_logo_carousel .= '<div class="seo-logo-able">
            <div class="seo-logo-tabelcell">
                <img src="'.$logo_carousel_array[0].'" alt="" />
            </div>
         </div>';
    }
    
    $seo_logo_carousel .= '
    </div>';
    
    return $seo_logo_carousel;
}
