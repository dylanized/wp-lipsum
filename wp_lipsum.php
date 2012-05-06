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

$wplipsum_defaults = new stdClass();

$wplipsum_defaults->width = 200;
$wplipsum_defaults->height = 200;
$wplipsum_defaults->gallery_width = 960;
$wplipsum_defaults->gallery_height = 300;
$wplipsum_defaults->align = "left";

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

	function display_lipsum_template($template='basic', $repeat=1, $width=false, $height=false, $align=false) {
	
		global $wplipsum_defaults;

		// set default width
		if (!$width) {
			if ($template=='gallery' || $template=='gallery_item') $width = $wplipsum_defaults->gallery_width;
			else $width = $wplipsum_defaults->width;
		}
			
		// set default height
		if (!$height) {
			if ($template=='gallery' || $template=='gallery_item') $height = $wplipsum_defaults->gallery_height;
			else $height = $wplipsum_defaults->height;
		}		
		
		// set default align
		if (!$align) {
			$align = $wplipsum_defaults->align;
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