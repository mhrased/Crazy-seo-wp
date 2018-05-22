<?php

vc_map( array(
      "name" => __( "SEO Map", "my-text-domain" ),
      "base" => "seo_map",
      "category" => __( "SEO", "my-text-domain"),
      "params" => array(
        array(
            "type" => "textfield",
            "heading" => __( "Title", "my-text-domain" ),
            "param_name" => "title",
            "std" => __( "Hello Dhaka", "my-text-domain" ),
            "description" => __( "Type Map Title Here", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Content", "my-text-domain" ),
            "param_name" => "content",
            "std" => __( "36/A | lan 5", "my-text-domain" ),
            "description" => __( "Type Map Content Here", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Type", "my-text-domain" ),
            "param_name" => "type",
            "std" => __( "ROADMAP", "my-text-domain" )
         ),
        array(
            "type" => "colorpicker",
            "heading" => __( "Main Road Color", "my-text-domain" ),
            "param_name" => "mainRoad",
            "std" => __( "#ffffff", "my-text-domain" ),
            "description" => __( "Type Map Main Road Color Here", "my-text-domain" )
         ),
        array(
            "type" => "colorpicker",
            "heading" => __( "Local Road Color", "my-text-domain" ),
            "param_name" => "locatRoad",
            "std" => __( "#ffffff", "my-text-domain" ),
            "description" => __( "Type Map Local Road Color Here", "my-text-domain" )
         ),
        array(
            "type" => "colorpicker",
            "heading" => __( "Water Color", "my-text-domain" ),
            "param_name" => "water",
            "std" => __( "#EEEDEF", "my-text-domain" ),
            "description" => __( "Type Map Water Color Here", "my-text-domain" )
         ),
        array(
            "type" => "colorpicker",
            "heading" => __( "Geomatry Color", "my-text-domain" ),
            "param_name" => "geomatry",
            "std" => __( "#333333", "my-text-domain" ),
            "description" => __( "Type Map Geomatry Color Here", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Height", "my-text-domain" ),
            "param_name" => "height",
            "std" => __( "500", "my-text-domain" ),
            "description" => __( "Type Map Height Here", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Lat", "my-text-domain" ),
            "param_name" => "lat",
            "std" => __( "23.8684483", "my-text-domain" ),
            "description" => __( "Type Map Lat Here", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Lng", "my-text-domain" ),
            "param_name" => "lng",
            "std" => __( "90.4175927", "my-text-domain" ),
            "description" => __( "Type Map Lng Here", "my-text-domain" )
         ),
      )
   ) );
?>
