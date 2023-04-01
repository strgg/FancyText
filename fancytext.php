<?php
/**
 * Plugin Name: Fancy Type Text
 * Plugin URI: https://www.test.ch
 * Description: Type Text shortcode
 * Version: 1.0
 * Text Domain: fancytypetext_shortcode
 * Author: Stephan Rueegg
 * Author URI: https://www.test.ch
 */
// Add Shortcode "Poppins", sans-serif, google fonts, font-weight: 400px; 
// main-wrapper: Background-image: linear-gradient(45deg, #ff61d3 10%, #ff61d3 36%, #b318ff 47%, #00f0ff 67%, #00f0ff 76%, #1e43ff);background-clip:text;   .text-container: line-height: 1.2em; margin: 0;  margin-bottom: 0px;font-weight:800;font-size: 70px;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);

function fancytypetext($atts) 
{
	wp_enqueue_script('my-script7733', 'https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js');
	wp_enqueue_script('my-script4', plugins_url('script.js?time='.time(), __FILE__,time()));
	wp_localize_script( 'my-script4', 'datastored',
	array( 
		'id' => 'heidi',
		'data_var_1' => 'value 1',
		'data_var_2' => 'value 2',
	)
	); //access datastored.id
	
	$default = array(
	'text' => 'Hello World',
	'speed' => '50',
	'font' => 'Poppins',
	'font-weight' => '400',
	'font-size' => '18px',
	'background' => 'linear-gradient(45deg, #ff61d3 10%, #ff61d3 36%, #b318ff 47%, #00f0ff 67%, #00f0ff 76%, #1e43ff)'
    );
	$a = shortcode_atts($default, $atts);
	$return = "<div id='typed-string'>". $a['text'] ."></div><span id='typed'></span>";
}
// plugin_dir_path( __FILE__ ); $dir = plugin_dir_path( __DIR__ )// to pass the path to javascript in hidden field or as JS variable 
add_shortcode( 'fancy_type', 'fancytypetext' );
?>
