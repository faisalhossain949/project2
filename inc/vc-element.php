<?php //banner section

vc_map( array(
	"name" => __( "Main Slider", "project2" ), 
	"base" => "main_slider",
	"category" => __( "project2", "project2"),
	"params" => array(

	
		array(
		"type" => "textfield",
		"heading" => __( "Give Title", "project2" ),
		"param_name" => "slider_title",
		), 
		
		array(
		"type" => "textarea",
		"heading" => __( "Content", "project2" ),
		"param_name" => "slider_cont",
		), 
	


),

) );


// for magna work


vc_map(array(

'name'			=>	__('molls','project2'),
'description'	=>	'this is icon',
'base'			=>	'molls_work',
'category'		=>	'project2',
'icon'			=>	'fa fa-map',
'params'		=> array(
	
		array(
	'param_name'		=>	'molls_work_p',
	'type'				=>	'textfield',
	'heading'			=>	'heading recent text'
	),
	)
));
// for Feugiat work


vc_map(array(

'name'			=>	__('Feugiat','project2'),
'description'	=>	'this is icon',
'base'			=>	'Feugiat_work',
'category'		=>	'project2',
'icon'			=>	'fa fa-map',
'params'		=> array(
		array(
	'param_name'		=>	'Feugiat_work_t',
	'type'				=>	'textfield',
	'heading'			=>	'heading recent text'
	),	array(
	'param_name'		=>	'Feugiat_work_c',
	'type'				=>	'textfield',
	'heading'			=>	'heading recent text'
	),
		array(
	'param_name'		=>	'Feugiat_work_count',
	'type'				=>	'textfield',
	'heading'			=>	'heading recent text'
	),
	)
));


// for feugat work


vc_map(array(

'name'			=>	__('team','project2'),
'description'	=>	'this is icon',
'base'			=>	'comodo_work',
'category'		=>	'project2',
'icon'			=>	'fa fa-map',
'params'		=> array(
	
		array(
	'param_name'		=>	'comot_heading',
	'type'				=>	'textfield',
	'heading'			=>	'heading icon text'
	),
		array(
	'param_name'		=>	'comod_des',
	'type'				=>	'textarea',
	'heading'			=>	'des icon text'
	),
		array(
	'param_name'		=>	'como_work_p',
	'type'				=>	'textfield',
	'heading'			=>	'heading recent text'
	),
	)
));

// for Nuchil work


vc_map(array(

'name'			=>	__('Nucil','project2'),
'description'	=>	'this is icon',
'base'			=>	'nucil_work',
'category'		=>	'project2',
'icon'			=>	'fa fa-map',
'params'		=> array(
	
		array(
	'param_name'		=>	'nucil_heading',
	'type'				=>	'textfield',
	'heading'			=>	'heading icon text'
	),
		array(
	'param_name'		=>	'nucil_des',
	'type'				=>	'textarea',
	'heading'			=>	'des icon text'
	),
		array(
	'param_name'		=>	'nucilwork_p',
	'type'				=>	'textfield',
	'heading'			=>	'heading recent text'
	),
	)
));


// for genric work


vc_map(array(

'name'			=>	__('generic','project2'),
'description'	=>	'this is icon',
'base'			=>	'generic_work',
'category'		=>	'project2',
'icon'			=>	'fa fa-map',
'params'		=> array(
	
		array(
	'param_name'		=>	'generic_heading',
	'type'				=>	'textfield',
	'heading'			=>	'heading icon text'
	),
		array(
	'param_name'		=>	'genric_des',
	'type'				=>	'textarea',
	'heading'			=>	'des icon text'
	),
		array(
	'param_name'		=>	'genric_con',
	'type'				=>	'textarea',
	'heading'			=>	'des icon text'
	),
		array(
	'param_name'		=>	'generic_p',
	'type'				=>	'textfield',
	'heading'			=>	'heading recent text'
	),
	)
));


