<?php

vc_map( array(
      "name" => __( "SEO Portfolio Gallary", "my-text-domain" ),
      "base" => "seo_portfolio",
      "category" => __( "SEO", "my-text-domain"),
      "params" => array(
         array(
            "type" => "dropdown",
            "heading" => __( "Theme", "my-text-domain" ),
            "param_name" => "theme",
            "std" => __( "1", "my-text-domain" ),
            "value" => array(
                'Theme One' =>'1',
                'Theme Two' =>'2',
            ),
            "description" => __( "", "my-text-domain" ),
             
         ),
      )
   ) );
?>
