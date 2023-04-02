<?php
/**
 * Plugin Name: Fancy Type Text
 * Plugin URI: https://www.freecheck.ch
 * Description: Type Text shortcode
 * Version: 1.0
 * Text Domain: fancytypetext_shortcode
 * Author: Stephan Rueegg
 * Author URI: https://www.freecheck.ch
 */
// Add Shortcode "Poppins", sans-serif, google fonts, font-weight: 400px; 
// main-wrapper: Background-image: linear-gradient(45deg, #ff61d3 10%, #ff61d3 36%, #b318ff 47%, #00f0ff 67%, #00f0ff 76%, #1e43ff);background-clip:text;   .text-container: line-height: 1.2em; margin: 0;  margin-bottom: 0px;font-weight:800;font-size: 70px;text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);


function fancytypetext($atts, $content = null, $tags='') 
{
	global $post;

	// if( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'fancy_type' ) ) 
	wp_enqueue_script('my-script77', 'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js',array('jquery'));
	wp_enqueue_script('my-script4', plugins_url('script.js?time='.time(), __FILE__,time()),array('my-script77'));
	wp_localize_script( 'my-script4', 'datastored',
	array('id' => 'heidi',//access datastored.id
		'd1' => uniqid(),
		'd2' => 'value 2')
	); 
	
	$default = array(
	'speed' => '50',
	'font' => 'Poppins',
	'font-weight' => '400',
	'font-size' => '18px',
	'loop' => '1'
	// 'background' => 'linear-gradient(45deg, #ff61d3 10%, #ff61d3 36%, #b318ff 47%, #00f0ff 67%, #00f0ff 76%, #1e43ff)',
  // 'typeSpeed' =>  0,/** *@property {number} typeSpeed type speed in milliseconds */
  // 'startDelay' =>  0,/** *@property {number} startDelay time before typing starts in milliseconds */
  // 'backSpeed' =>  0,/** *@property {number} backSpeed backspacing speed in milliseconds */
  // 'smartBackspace' =>  true, /*** @property {boolean} smartBackspace only backspace when previous not equal*/
  // 'shuffle' =>  false, /*** @property {boolean} shuffle shuffle the strings*/
  // 'backDelay' =>  700, /*** @property {number} backDelay time before backspacing in milliseconds*/
  // 'fadeOut' =>  false, /*** @property {boolean} fadeOut Fade out instead of backspace */
  // 'fadeOutClass' =>  'typed-fade-out', /***  * @property {string} fadeOutClass css class for fade animation*/
  // 'fadeOutDelay' =>  500, /*** @property {boolean} fadeOutDelay Fade out delay in milliseconds*/
  // 'loop' =>  false, /*** @property {boolean} loop loop strings */
  // 'loopCount' =>  Infinity, /*** @property {number} loopCount amount of loops */
  // 'showCursor' =>  true, /*** @property {boolean} showCursor show cursor */
  // 'cursorChar' =>  '|', /*** @property {string} cursorChar character for cursor */
    );
	$a = shortcode_atts($default, $atts);
	// $return = "<div id='typed-string'>". $content ."></div><span id='typed'></span>";
	// $return = "<div style='font-weight:".esc_attr($a['font-weight']).";'><b>". esc_attr($content) ."</b></div>";
	$return = '<div id="typed-strings" data-typespeed="250" data-loop="true" data-startdelay="20"><p>Typed.js is library.</p> <p>'. esc_attr($content) .'</p></div><span id="typed"></span>';
	return $return;
}
// plugin_dir_path( __FILE__ ); $dir = plugin_dir_path( __DIR__ )// to pass the path to javascript in hidden field or as JS variable 
add_shortcode( 'fancy_type', 'fancytypetext' );
?>
