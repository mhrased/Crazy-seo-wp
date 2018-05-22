<?php


   vc_map( array(
      "name" => __( "SEO logo Carosol", "my-text-domain" ),
      "base" => "seo_logo_carosol",
      "category" => __( "SEO", "my-text-domain"),
      "params" => array(
         array(
            "type" => "attach_images",
            "heading" => __( "Upload Logos", "my-text-domain" ),
            "param_name" => "logos",
            "description" => __( "Upload logos to show logo Carousel", "my-text-domain" )
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Dektop Count", "my-text-domain" ),
            "param_name" => "desk_count",
            "std" => __( "5", "my-text-domain" ),
            "description" => __( "Type Number only , how many logo you want to show in Desktop.", "my-text-domain" )
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Tablet Count", "my-text-domain" ),
            "param_name" => "tab_count",
            "std" => __( "3", "my-text-domain" ),
            "description" => __( "Type Number only , how many logo you want to show in Tablet.", "my-text-domain" )
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Mobile Count", "my-text-domain" ),
            "param_name" => "mob_count",
            "std" => __( "2", "my-text-domain" ),
            "description" => __( "Type Number only , how many logo you want to show in mobile.", "my-text-domain" )
         ),
//         array(
//            "type" => "textfield",
//            "heading" => __( "Height", "my-text-domain" ),
//            "param_name" => "height",
//            "std" => __( "654", "my-text-domain" ),
//            "description" => __( "Type Logo Height in px. Number only.", "my-text-domain" )
//         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Enable Loop", "my-text-domain" ),
            "param_name" => "loop",
            "std" => __( "true", "my-text-domain" ),
            "value" => array(
                'Yes' =>'true',
                'No' =>'false',
            ),
            "description" => __( "Select Yes to Enable Loop", "my-text-domain" ),
             
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Enable Autoplay", "my-text-domain" ),
            "param_name" => "autoplay",
            "std" => __( "true", "my-text-domain" ),
            "value" => array(
                'Yes' =>'true',
                'No' =>'false',
            ),
            "description" => __( "Select Yes to Enable Autoplay", "my-text-domain" ),
             
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Autoplay Time", "my-text-domain" ),
            "param_name" => "autoplaytime",
            "std" => __( "5000", "my-text-domain" ),
            "description" => __( "Type in MS Like 5000 For 5s", "my-text-domain" ),
             "dependency" => array(
                "element" => "autoplay",
                "value" => array("true"),
             ),
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Enable NavBar", "my-text-domain" ),
            "param_name" => "nav",
            "std" => __( "true", "my-text-domain" ),
            "value" => array(
                'Yes' =>'true',
                'No' =>'false',
            ),
            "description" => __( "Select Yes to Enable Nav", "my-text-domain" ),
             
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Enable Dots", "my-text-domain" ),
            "param_name" => "dots",
            "std" => __( "true", "my-text-domain" ),
            "value" => array(
                'Yes' =>'true',
                'No' =>'false',
            ),
            "description" => __( "Select Yes to Enable Dots", "my-text-domain" ),
             
         ),
      )
   ) );
?>
