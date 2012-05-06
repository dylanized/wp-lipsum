<?php
/*
Plugin Name: WP Lipsum
Plugin URI: http://bedrocktheme.com/
Description: Dummy content plugin for WordPress
Author: Dylan Hassinger
Version: 1.4
Author URI: http://dylanhassinger.net/
*/

define('LIPSUMPATH', ABSPATH . 'wp-content/plugins/' . dirname(plugin_basename(__FILE__)) . '/');
define('LIPSUMTEMPLATES', LIPSUMPATH . 'templates/');
define('LIPSUMWEBPATH', '/wp-content/plugins/' . dirname(plugin_basename(__FILE__)) . '/');

// lipsum function

	function display_lipsum($atts) {
	
		extract( shortcode_atts( array(
			'template' => false,
			'repeat' => false,
			't' => false,			
			'r' => false,
			'width' => false,
			'height' => false,
			'w' => false,
			'h' => false,
			'align' => false,
			'a' => false
		), $atts ) );	

		// check for shortcut syntax		
		if ($t) $template = $t;
		if ($r) $repeat = $r;
		
		// check for image shortcuts
		if ($w) $width = $w;
		if ($h) $height = $h;		
		if ($a) $align = $a;
		
		// parse shortcode
		if (!$template && !$repeat) {
			// no template, no num
			$template = "basic";
			$repeat = 1;	
		} elseif (!$template && $repeat) {		
			// no template, but given a num
			$template = "p";
		} elseif ($template && !$repeat) {
			// given template, but no num
			$repeat = 1;
		}
		
		display_lipsum_template($template, $repeat, $width, $height, $align);			
	
	}		

	function display_lipsum_template($template='basic', $repeat=1, $width=false, $height=false, $align='left') {

		// set default width
		if (!$width) {
			if ($template=='gallery' || $template=='gallery_item') $width = 960;
			else $width = 200;
		}
			
		// set default height
		if (!$height) {
			if ($template=='gallery' || $template=='gallery_item') $height = 300;
			else $height = 200;
		}		

		$path = LIPSUMTEMPLATES . "$template.php";
		for ($i = 1; $i <= $repeat; $i++) {
			if (file_exists($path)) {
				include($path);						
			}
		}
	}
					
	// [lipsum] shortcode
	add_shortcode('lipsum', 'display_lipsum');

?>