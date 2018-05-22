<?php

vc_map( array(
      "name" => __( "SEO Filled Button", "my-text-domain" ),
      "base" => "seo_btn",
      "category" => __( "SEO", "my-text-domain"),
      "params" => array(
        array(
            "type" => "textfield",
            "heading" => __( "Link Text", "my-text-domain" ),
            "param_name" => "link_text",
            "std" => __( "See More", "my-text-domain" ),
            "description" => __( "Type Service Link Text Here", "my-text-domain" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Link Text Url", "my-text-domain" ),
            "param_name" => "type",
            "std" => __( "1", "my-text-domain" ),
            "value" => array(
                'Page' =>'1',
                'External Link' =>'2',
            ),
            "description" => __( "", "my-text-domain" ),
             
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Page Link", "my-text-domain" ),
            "param_name" => "link_to_page",
            "value" => seo_toolkit_get_psot_list(),
            "dependency" => array(
                "element" => "type",
                "value" => array("1"),
             ),
         ),
         array(
            "type" => "textfield",
            "heading" => __( "External Link", "my-text-domain" ),
            "param_name" => "external_link",
            "std" => __( "", "my-text-domain" ),
             "dependency" => array(
                "element" => "type",
                "value" => array("2"),
             ),
            "description" => __( "", "my-text-domain" )
         )
      )
   ) );
?>
