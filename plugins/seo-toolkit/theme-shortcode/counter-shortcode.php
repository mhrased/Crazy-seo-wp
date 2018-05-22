<?php 
add_shortcode('seo_counter','seo_counter_sortcode');
function seo_counter_sortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'counter_number' => '',
        'number_plus' => '',
        'desc' => ''
    ), $atts) );
    

    $seo_counter = '
        <div class="seo-counter-box">
            <h3>'.$counter_number.'<span> '.$number_plus.'</span></h3>
            <p>'.$desc.'</p>
        </div>';
    
    return $seo_counter;
}
