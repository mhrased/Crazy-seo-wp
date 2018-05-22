<?php


   vc_map( array(
      "name" => __( "SEO Tile Gallery", "my-text-domain" ),
      "base" => "seo_tile_gallery",
      "category" => __( "SEO", "my-text-domain"),
      "params" => array(
         array(
            "type" => "attach_images",
            "heading" => __( "Upload Images", "my-text-domain" ),
            "param_name" => "images",
            "description" => __( "Upload Images to show Tile Gallery", "my-text-domain" )
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Height", "my-text-domain" ),
            "param_name" => "height",
            "std" => __( "310", "my-text-domain" ),
            "description" => __( "Type Number only , how many logo you want to show in Desktop.", "my-text-domain" )
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Size", "my-text-domain" ),
            "param_name" => "br_size",
            "std" => __( "large", "my-text-domain" ),
            "value" => array(
                'Large' =>'large',
                'Small' =>'small',
                'Thumbnail' =>'thumbnail',
            ),
         ),
      )
   ) );
?>
