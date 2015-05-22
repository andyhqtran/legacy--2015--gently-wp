<?php
if (!isset($content_width)) {
	$content_width = 600;
}

if (!function_exists('gently_setup')):
	function gently_setup() {
		load_theme_textdomain('gently', get_template_directory() . '/languages');
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus(array(
			'primary' => __('Primary Menu', 'gently'),
		));
		add_theme_support('html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		));
		add_theme_support('post-formats', array(
			'aside', 'image', 'video', 'quote', 'link',
		));
		add_theme_support('custom-background', apply_filters('gently_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));
	}
endif;
add_action('after_setup_theme', 'gently_setup');

function gently_scripts() {
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome_css', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style('google_fonts_css', 'http://fonts.googleapis.com/css?family=Varela+Round');
	wp_enqueue_style('style_css', get_stylesheet_uri());
	wp_enqueue_script('scrollReveal_js', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.4', true);
	wp_enqueue_script('scrollReveal_js', get_template_directory_uri() . '/assets/js/scrollReveal.min.js', array('jquery'), '2.1.0', true);
	wp_enqueue_script('script_js', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'bootstrap_js'), '0.1', true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'gently_scripts');

add_post_meta(1, 'page_title', 'Page Title');
update_post_meta(1, 'page_title', 'Page Title');

add_post_meta(2, 'secondary_title', 'Secondary Title');
update_post_meta(2, 'secondary_title', 'Secondary Title');
?>