<?php
define('ATTACHMENTS_SETTINGS_SCREEN',false);
add_filter('attachments_default_instance', '__return_false');

function nahid_attachments($attachments){
$fields=array(
array(
    'name'    => 'title',
    'type'    => 'text',
    'label'   => __('Title','nahid'),

  ),
);

$args = array(

	'label'        => 'Featered Slider',
	'post_type'    =>  array('post','page'),
	'filetype'     =>  array('image'),
	'note'         => 'Add Slider Images',
	'button_text'  => __('Attach Files','nahid'),
	'fields'       => $fields,



);

$attachments ->register('slider', $args);
}
add_action('attachments_register', 'nahid_attachments');