<?php

vc_map( array(
      "name" => __( "SEO Testimonial", "my-text-domain" ),
      "base" => "seo_testimonial",
      "category" => __( "SEO", "my-text-domain"),
      "params" => array(
        array(
            "type" => "textfield",
            "heading" => __( "Client Name", "my-text-domain" ),
            "param_name" => "clint_name",
            "std" => __( "", "my-text-domain" ),
            "description" => __( "Type Client Name Here", "my-text-domain" )
         ),
        array(
            "type" => "textfield",
            "heading" => __( "Catagory Name", "my-text-domain" ),
            "param_name" => "title",
            "std" => __( "", "my-text-domain" ),
            "description" => __( "Type Catagory Name Here", "my-text-domain" )
         ),
        array(
            "type" => "textarea",
            "heading" => __( "Testimonial", "my-text-domain" ),
            "param_name" => "desc",
            "std" => __( "", "my-text-domain" ),
            "description" => __( "Type Testimonial Description Here", "my-text-domain" )
         ),
          array(
            "type" => "attach_images",
            "heading" => __( "Upload Testimonail Image", "my-text-domain" ),
            "param_name" => "clint_image",
            "std" => __( "", "my-text-domain" ),
            "description" => __( "Upload Testimonail Image", "my-text-domain" )
         ),
      )
   ) );
?>
