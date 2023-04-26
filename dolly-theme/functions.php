<?php
if (class_exists( 'Attachments' ) ) {
    require_once "lib/attachments.php";

}


function theme_init(){

   load_theme_textdomain("nahid");

   add_theme_support("title_tag");

   add_theme_support("custom-header");
   
   add_theme_support("post-thumbnails");

   register_nav_menu( "topmenu",__("Top Menu","nahid"));

   register_nav_menu( "footermenu",__("Footer Menu","nahid"));

   $nahid_custom_logo_defaults = array(

            "width"=>'100',
            "height"=>'100'
   );
   
   add_theme_support("custom-logo",$nahid_custom_logo_defaults);

   add_theme_support("post-formats",array("image","video","audio","quote","link"));
   
}
add_action('after_setup_theme','theme_init');


function css_js(){

wp_enqueue_style('nahid', get_stylesheet_uri(  ));

wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',null,'v1.0.1','all');

wp_enqueue_style("featherlight-css","//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css");

//wp_enqueue_script('test-script',get_template_directory_uri().'/js/javascript.js',null,'v1.0.2','false');

wp_enqueue_style( "tns-style","//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css");


wp_enqueue_script("featherlight-js","//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js", array("jquery"),"0.0.1",true);   


wp_enqueue_script("nahid-main",get_template_directory_uri()."/assets/js/main.js",null,"0.0.1",true);

wp_enqueue_script("tns-js","//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js",null,"0.0.1",false);

//wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
}
add_action('wp_enqueue_scripts','css_js');

function about_page_template_banner(){
   if(is_front_page()) {
      if(current_theme_supports( "custom-header" )) {
         ?>
         <style>
             .header{
               background-image: url(<?php echo header_image();?>);
               margin-bottom: 50px;
             }
         </style>   

          <?php  
      }
   }
}

add_action("wp_head","about_page_template_banner",1.1);


function nahid_menu_item_class($classes, $item) {
   $classes [] ="list-item-title";
   return $classes;
}
add_filter("nav_menu_css_class","nahid_menu_item_class",10,2 );


