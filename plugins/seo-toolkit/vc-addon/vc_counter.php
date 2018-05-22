<?php

vc_map( array(
      "name" => esc_html__( "SEO Counter", "seo-toolkit" ),
      "base" => "seo_counter",
      "category" => esc_attr__( "SEO", "seo-toolkit"),
      "params" => array(
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Number", "seo-toolkit" ),
            "param_name" => "counter_number",
            "std" => esc_html__( "", "seo-toolkit" ),
            "description" => esc_html__( "Type Counter Number", "seo-toolkit" )
         ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Number Extenction", "seo-toolkit" ),
            "param_name" => "number_plus",
            "std" => esc_html__( "", "seo-toolkit" ),
            "description" => esc_html__( "Type Extra text Here", "seo-toolkit" )
         ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Counter Text", "seo-toolkit" ),
            "param_name" => "desc",
            "std" => esc_html__( "", "seo-toolkit" ),
            "description" => esc_html__( "Type Counter Title Here", "seo-toolkit" )
         ),
      )
   ) );
?>
