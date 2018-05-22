<?php

vc_map( array(
      "name" => __( "SEO Service Two", "my-text-domain" ),
      "base" => "seo_service_two",
      "category" => __( "SEO", "my-text-domain"),
      "params" => array(
        array(
            "type" => "textfield",
            "heading" => __( "Title", "my-text-domain" ),
            "param_name" => "title",
            "std" => __( "", "my-text-domain" ),
            "description" => __( "Type Service Title Here", "my-text-domain" )
         ),
        array(
            "type" => "textarea",
            "heading" => __( "Content", "my-text-domain" ),
            "param_name" => "desc",
            "std" => __( "", "my-text-domain" ),
            "description" => __( "Type Service Content Here", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Link Text", "my-text-domain" ),
            "param_name" => "link_text",
            "std" => __( "Read More", "my-text-domain" ),
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
         ),
        array(
            "type" => "dropdown",
            "heading" => __( "Choose Icon Type", "my-text-domain" ),
            "param_name" => "icon",
            "std" => __( "2", "my-text-domain" ),
            "value" => array(
                'Upload' =>'1',
                'Fontawsome Icon' =>'2',
            ),
            "description" => __( "", "my-text-domain" ),
             
         ),
         array(
            "type" => "attach_images",
            "heading" => __( "Upload Icon", "my-text-domain" ),
            "param_name" => "upload_icon",
             "dependency" => array(
                "element" => "icon",
                "value" => array("1"),
             ),
            "description" => __( "", "my-text-domain" )
         ),
         array(
            "type" => "iconpicker",
            "heading" => __( "Pick Icon", "my-text-domain" ),
            "param_name" => "choose_icon",
             "dependency" => array(
                "element" => "icon",
                "value" => array("2"),
             ),
            "description" => __( "", "my-text-domain" )
         ),
      )
   ) );
?>
