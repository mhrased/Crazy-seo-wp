<?php 
add_shortcode('seo_cta_two','seo_cta_two_sortcode');
function seo_cta_two_sortcode($atts, $content= null){
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
    
    
    $seo_cta_two = '
        <div class="seo-cta_two-box">
            <div class="cta_two-box-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <h3>'.$title.'</h3>
                            '.wpautop($desc).'
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <a href="'.$page_source.'" class="bordered-btn">'.$link_text.'</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    
    return $seo_cta_two;
}
