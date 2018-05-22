<?php 
add_shortcode('seo_team','seo_team_sortcode');
function seo_team_sortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'facebook' => '',
        'twitter' => '',
        'youtube' => '',
        'google' => '',
        'skype' => '',
        'instagram' => '',
        'upload_team' => '',
    ), $atts) );
    
    $team_box_bg_array = wp_get_attachment_image_src($upload_team, 'medium');
    

    
    $seo_team = '<div class="seo-team">
        <div class="seo-social-area">
            <a href="'.$facebook.'"><i class="fa fa-facebook"></i></a>
            <a href="'.$twitter.'"><i class="fa fa-twitter"></i></a>
            <a href="'.$youtube.'"><i class="fa fa-youtube"></i></a>
            <a href="'.$google.'"><i class="fa fa-google"></i></a>
            <a href="'.$skype.'"><i class="fa fa-skype"></i></a>
            <a href="'.$instagram.'"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="seo-image-area" style="background-image:url('.$team_box_bg_array[0].')">
            
        </div>
        <div class="seo-content-area">
            <h3>'.$title.'</h3>
            '.wpautop($desc).'
        </div>
    </div>';
    
    
    return $seo_team;
}
