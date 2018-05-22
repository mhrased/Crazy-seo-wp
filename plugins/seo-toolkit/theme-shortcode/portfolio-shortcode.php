<?php 
add_shortcode('seo_portfolio','seo_portfolio_sortcode');
function seo_portfolio_sortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'theme' => '1',
    ), $atts) );
    
    
    $categories = get_terms( 'project_cat' );
    $dynamic_num = rand(1353637 ,1862723);
    
    $seo_portfolio = '
        <script>
             jQuery(document).ready(function ($) {
                $(".portfolio-list-item ul li").click(function () {
                    $(".portfolio-list-item ul li").removeClass("active");
                    $(this).addClass("active");
                    var selector = $(this).attr("data-filter");
                    $(".prortfolio-list-'.$dynamic_num.'").isotope({
                        filter: selector
                    });
                });
            });


            jQuery(window).load(function () {
                jQuery(".prortfolio-list-'.$dynamic_num.'").isotope();
            });
            
        </script>';
    
        
         
        if($theme == 1){
            $project_colmn = 'col-md-12';
            $project_colmn_gallery = 'col-md-12';
            $project_inner_colmn_gallery = 'col-md-3';
        }else{
            $project_colmn =  'col-md-3';
            $project_colmn_gallery =  'col-md-9';
            $project_inner_colmn_gallery =  'col-md-4';
        }
        
        
        $seo_portfolio .= ' 
        <div class="row">
            <div class="'.$project_colmn.'">
                <div class="portfolio-list-item portfolio-list-item-'.$theme.'">
                    <ul>
                        <li class="active" data-filter="*">All</li>';
    
                        if ( ! empty( $categories ) && ! is_wp_error( $categories ) ){
                            foreach ( $categories as $term ) {
                                $seo_portfolio .= '<li data-filter=".'. $term->slug .'">'. $term->name .'</li>';
                            }  
                        }
    
    $seo_portfolio .= '                    
                    </ul>
                </div>
            </div>
            <div class="'.$project_colmn_gallery.'">
                <div class="row portfolio-galarry prortfolio-list-'.$dynamic_num.'">';
           
    
                   $q = new WP_Query(array( 'posts_per_page' => -1 , 'post_type' => 'project' ) );
                    while($q->have_posts()) : $q->the_post();
                    
                    $terms = get_the_terms( get_the_ID(), 'project_cat' );
                    if($terms && ! is_wp_error( $terms )){
                        $portfolio_list = array();
                        foreach($terms as $catagory){
                            $portfolio_list[] = $catagory->slug;
                        }
                         $portfolio_assigned_list = join( " ", $portfolio_list );
                    }else{
                        $portfolio_assigned_list = '';
                    }
    
   $seo_portfolio .= '<div class="'.$project_inner_colmn_gallery.' '.$portfolio_assigned_list.'">
                        <div class="single-portfolio-list">
                            <div class="portfolio-bg" style="background-image: url('.get_the_post_thumbnail_url(get_the_ID(), 'large').')">
                                <a class="portfoli0link" href"#"><i class="fa fa-link"></i></a>
                                <a class="view-btn" href="'.get_permalink().'">View</a>
                                <h2>'.get_the_title().'</h2>
                            </div>
                        </div>
                    </div>';
    endwhile;
    wp_reset_query();
    
                    
   $seo_portfolio .= '                  
                </div>
            </div>
        </div>
    ';
    
    return $seo_portfolio;
}
