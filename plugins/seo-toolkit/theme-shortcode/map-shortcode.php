<?php 
add_shortcode('seo_map','seo_map_sortcode');
function seo_map_sortcode($atts, $content= null){
    extract( shortcode_atts( array(
        'title' => 'Hello Dhaka',
        'content' => '6/A | lan 5',
        'type' => 'ROADMAP',
        'mainRoad' => '#ffffff',
        'locatRoad' => '#ffffff',
        'water' => '#EEEDEF',
        'geomatry' => '#333333',
        'height' => '500',
        'lat' => '23.8684483',
        'lng' => '90.4175927',
    ), $atts) );
    
    
    $dynamic_map_id = rand(42587942, 382947283);
    
    
    $seo_map = '
        <div class="seo-map-box">
            <div class="map" style="width:100% ; height:'.$height.'px;"></div>
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key= AIzaSyBVNBcf76pr9hogqcuinoiGx6SusXworiM&region=US"></script>
            <script>
                jQuery(document).ready(function($){
                    var seomap'.$dynamic_map_id.' = {lat: '.$lat.', lng: '.$lng.'};
                    $(".map")
                      .gmap3({
                        scrollwheel: false,
                        center: seomap'.$dynamic_map_id.',
                        zoom:15,
                        mapTypeId: "shadeOfGrey", // to select it directly
                        mapTypeControlOptions: {
                          mapTypeIds: [google.maps.MapTypeId.'.$type.', "shadeOfGrey"]
                        }
                      })
                      .marker({
                            position: seomap'.$dynamic_map_id.',
                            icon: "'.plugin_dir_url( __FILE__ ).'../assets/img/marker.png"
                        })
                        .infowindow({
                            position: seomap'.$dynamic_map_id.',
                            content: "<h4>'.$title.'</h4>'.$content.'",
                            pixelOffset: new google.maps.Size(0,-20)
                        })
                        .then(function (infowindow) {
                            infowindow.open(this.get(0)); // this.get(0) return the map (see "get" feature)
                        })
                      .styledmaptype(
                        "shadeOfGrey",
                        [
                          {"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"'.$geomatry.'"},{"lightness":40}]},
                          {"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
                          {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#E6E5E6"},{"lightness":20}]},
                          {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#E6E5E6"},{"lightness":17},{"weight":1.2}]},
                          {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#F8F6F8"},{"lightness":20}]},
                          {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#E7E7E7"},{"lightness":21}]},
                          {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"'.$mainRoad.'"},{"lightness":17}]},
                          {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},
                          {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},
                          {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"'.$locatRoad.'"},{"lightness":16}]},
                          {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#e3e3e3"},{"lightness":19}]},
                          {"featureType":"water","elementType":"geometry","stylers":[{"color":"'.$water.'"},{"lightness":17}]}
                        ],
                        {name: "Shades of Grey"}
                      );
                  });
              </script>
        </div>';
    
    return $seo_map;
}
