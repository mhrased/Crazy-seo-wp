<?php


   vc_map( array(
      "name" => __( "SEO SLIDER", "my-text-domain" ),
      "base" => "seo_slide",
      "category" => __( "SEO", "my-text-domain"),
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __( "Slide Item", "my-text-domain" ),
            "param_name" => "count",
            "value" => __( "-1", "my-text-domain" ),
            "description" => __( "You Must Write in Number. Type (-1) to show all Item", "my-text-domain" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Select Slide", "my-text-domain" ),
            "param_name" => "slider_id",
            "value" => seo_toolkit_get_slide_list(),
            "description" => __( "Select Slide As Banner", "my-text-domain" ),
             "dependency" => array(
                "element" => "count",
                "value" => array("1"),
             ),
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Height", "my-text-domain" ),
            "param_name" => "height",
            "std" => __( "654", "my-text-domain" ),
            "description" => __( "Type Slider Height in px. Number only.", "my-text-domain" )
         ),
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
             "dependency" => array(
                "element" => "count",
                "value" => array("-1","2","3", "4","5","6","7","8","9","10","11","12","13","14","15"),
             ),
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
             "dependency" => array(
                "element" => "count",
                "value" => array("-1","2","3", "4","5","6","7","8","9","10","11","12","13","14","15"),
             ),
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Autoplay Time", "my-text-domain" ),
            "param_name" => "autoplayTime",
            "std" => __( "5000", "my-text-domain" ),
            "description" => __( "Type in MS Like 5000 For 5s", "my-text-domain" ),
             "dependency" => array(
                "element" => "count",
                "value" => array("-1","2","3", "4","5","6","7","8","9","10","11","12","13","14","15"),
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
             "dependency" => array(
                "element" => "count",
                "value" => array("-1","2","3", "4","5","6","7","8","9","10","11","12","13","14","15"),
             ),
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
             "dependency" => array(
                "element" => "count",
                "value" => array("-1","2","3", "4","5","6","7","8","9","10","11","12","13","14","15"),
             ),
         ),
      )
   ) );
?>
