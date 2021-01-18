<?php

/***** Fetch Theme Data *****/

$mh_magazine_lite_data = wp_get_theme('mh-magazine-lite');
$mh_magazine_lite_version = $mh_magazine_lite_data['Version'];
$mh_campusmag_data = wp_get_theme('mh-campusmag');
$mh_campusmag_version = $mh_campusmag_data['Version'];

/***** Load Google Fonts *****/

function mh_campusmag_fonts() {
	wp_dequeue_style('mh-google-fonts');
	wp_enqueue_style('mh-campusmag-fonts', 'https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i%7cLusitana:400,700', array(), null);
}
add_action('wp_enqueue_scripts', 'mh_campusmag_fonts', 11);

/***** Load Stylesheets *****/

function mh_campusmag_styles() {
	global $mh_magazine_lite_version, $mh_campusmag_version;
    wp_enqueue_style('mh-magazine-lite', get_template_directory_uri() . '/style.css', array(), $mh_magazine_lite_version);
    wp_enqueue_style('mh-campusmag', get_stylesheet_uri(), array('mh-magazine-lite'), $mh_campusmag_version);
    if (is_rtl()) {
		wp_enqueue_style('mh-magazine-lite-rtl', get_template_directory_uri() . '/rtl.css', array(), $mh_magazine_lite_version);
	}
}
add_action('wp_enqueue_scripts', 'mh_campusmag_styles');

/***** Load Translations *****/

function mh_campusmag_theme_setup(){
	load_child_theme_textdomain('mh-campusmag', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'mh_campusmag_theme_setup');

/***** Change Defaults for Custom Colors *****/

function mh_campusmag_custom_colors() {
	remove_theme_support('custom-header');
	remove_theme_support('custom-background');
	add_theme_support('custom-header', array('default-image' => '', 'default-text-color' => 'ffffff', 'width' => 1080, 'height' => 250, 'flex-width' => true, 'flex-height' => true));
	add_theme_support('custom-background', array('default-color' => 'f7f7f7'));
}
add_action('after_setup_theme', 'mh_campusmag_custom_colors');

/***** Display Posts on Archives as Grid - Override Pluggable Function from Parent Theme *****/

if (!function_exists('mh_magazine_lite_loop_layout')) {
	function mh_magazine_lite_loop_layout() {
		global $wp_query;
		$counter = 1;
		$max_posts = $wp_query->post_count;
		while (have_posts()) : the_post();
			if ($counter === 1) {
				echo '<div class="mh-row mh-posts-grid mh-clearfix">' . "\n";
			}
			if ($counter >= 1) {
				echo '<div class="mh-col-1-2 mh-posts-grid-col mh-clearfix">' . "\n";
					get_template_part('content', 'grid');
				echo '</div>' . "\n";
			}
			if ($counter % 2 === 0 && $counter != $max_posts) {
				echo '</div>' . "\n";
				echo '<div class="mh-row mh-posts-grid mh-posts-grid-more mh-clearfix">' . "\n";
			}
			if ($counter >= 1 && $counter === $max_posts) {
				echo '</div>' . "\n";
			}
			$counter++;
		endwhile;
	}
}
?>