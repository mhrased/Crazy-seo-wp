<?php

vc_map( array(
      "name" => __( "SEO Team", "my-text-domain" ),
      "base" => "seo_team",
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
            "heading" => __( "Facebook", "my-text-domain" ),
            "param_name" => "facebook",
            "std" => __( "", "my-text-domain" ),
            "description" => __( "Type Social Network Link Here", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Twitter", "my-text-domain" ),
            "param_name" => "twitter",
            "std" => __( "", "my-text-domain" ),
            "description" => __( "Type Social Network Link Here", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Youtube", "my-text-domain" ),
            "param_name" => "youtube",
            "std" => __( "", "my-text-domain" ),
            "description" => __( "Type Social Network Link Here", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Google", "my-text-domain" ),
            "param_name" => "google",
            "std" => __( "", "my-text-domain" ),
            "description" => __( "Type Social Network Link Here", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Skype", "my-text-domain" ),
            "param_name" => "skype",
            "std" => __( "", "my-text-domain" ),
            "description" => __( "Type Social Network Link Here", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Instagram", "my-text-domain" ),
            "param_name" => "instagram",
            "std" => __( "", "my-text-domain" ),
            "description" => __( "Type Social Network Link Here", "my-text-domain" )
         ),
          array(
            "type" => "attach_images",
            "heading" => __( "Upload Team Image", "my-text-domain" ),
            "param_name" => "upload_team",
            "std" => __( "", "my-text-domain" ),
            "description" => __( "Upload Team Image", "my-text-domain" )
         ),
      )
   ) );
?>
