<?php
function theme_init(){
   add_theme_support('title-tag');
   
   add_theme_support( 'post-thumbnails' );

   add_image_size('post-thumb', 600, 400, true);
}
add_action('after_setup_theme','theme_init');


function css_js(){
wp_enqueue_style('test-style',get_template_directory_uri().'/css/test.css',null,'v1.0.1','all');

wp_enqueue_script('test-script',get_template_directory_uri().'/js/javascript.js',null,'v1.0.2','false');

//wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
}
add_action('wp_enqueue_scripts','css_js');

function widgets(){

register_sidebar(array(
'name'=> 'First Widget',
'id'=> 'first_wid'
));

/*register_sidebar(array(
'name'=> 'Second Widget',
'id'=> 'second_wid'
));*/

}
add_action('widgets_init','widgets');
