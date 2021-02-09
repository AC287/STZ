<?php

// function stz_resources() {
//   wp_enqueue_style('style',get_stylesheet_uri());
// }
// add_action('wp_enqueue_scripts','stz_resources');

// Enable the use of shortcodes within widgets.
add_filter( 'widget_text', 'do_shortcode' );

// Assign the tag for our shortcode and identify the function that will run.
add_shortcode( 'template_directory_uri', 'wpse61170_template_directory_uri' );

// Define function
function wpse61170_template_directory_uri() {
    return get_template_directory_uri();
}

// This get url.
function custom_rewrite_tag() {
  add_rewrite_tag('%m0%', '([^&]+)');
  add_rewrite_tag('%s1%', '([^&]+)');
  add_rewrite_tag('%s2%', '([^&]+)');
  add_rewrite_tag('%s3%', '([^&]+)');
  add_rewrite_tag('%s4%', '([^&]+)');
  add_rewrite_tag('%id%', '([^&]+)');
}
add_action('init', 'custom_rewrite_tag', 10, 0);

function stz_script_enqueue() {
  wp_enqueue_style('bootstrapcss',get_template_directory_uri().'/css/bootstrap.css',array(),null,'all');

  wp_enqueue_style('customstyle',get_template_directory_uri().'/css/stz.css', array(), '1.0.05', 'all');
  wp_enqueue_style('slickcss',get_template_directory_uri().'/css/slick.css', array(), '1.0.1', 'all');
  wp_enqueue_style('slickthemecss',get_template_directory_uri().'/css/slick-theme.css', array(), '1.0.0', 'all');
  wp_enqueue_style( 'wpb-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
  wp_enqueue_style( 'google-fonts-questrial', 'https://fonts.googleapis.com/css?family=Questrial', false);
  // wp_enqueue_style( 'bignoodletitling', get_template_directory_uri().'/fonts/big_noodle_titling.ttf', false);

  // wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.js',array('jquery'),'2.0.0',true);
  wp_enqueue_script('customjs',get_template_directory_uri().'/js/stz.js', array('jquery'), '1.0.02', true);
  wp_enqueue_script('slickjs',get_template_directory_uri().'/js/slick.js', array('jquery'), '1.0.0',true);

}

//Versioning for script and css.
//See https://medium.com/@futuremediagr/easy-versioning-for-css-and-js-files-in-wordpress-e7dad756586c for guide.
function set_custom_ver_css( $src ) {
	// style.css URI
	$style_file = get_stylesheet_directory().'/css/stz.css';

	if ( $style_file ) {
		// css file timestamp
		$version = filemtime($style_file);

		if ( strpos( $src, 'ver=' ) )
			// use the WP function add_query_arg()
			// to set the ver parameter in
			$src = add_query_arg( 'ver', $version, $src );
		return esc_url( $src );

	}
}
function set_custom_ver_js( $src ) {
	// style.css URI
	$style_file = get_stylesheet_directory().'/js/stz.js';

	if ( $style_file ) {
		// css file timestamp
		$version = filemtime($style_file);

		if ( strpos( $src, 'ver=' ) )
			// use the WP function add_query_arg()
			// to set the ver parameter in
			$src = add_query_arg( 'ver', $version, $src );
		return esc_url( $src );

	}
}
function set_custom_ver_maincss( $src ) {
	// style.css URI
	$style_file = get_stylesheet_directory().'/style.css';

	if ( $style_file ) {
		// css file timestamp
		$version = filemtime($style_file);

		if ( strpos( $src, 'ver=' ) )
			// use the WP function add_query_arg()
			// to set the ver parameter in
			$src = add_query_arg( 'ver', $version, $src );
		return esc_url( $src );

	}
}
function css_js_versioning() {
	add_filter( 'style_loader_src', 'set_custom_ver_css', 9999 ); 	// css files versioning
	add_filter( 'script_loader_src', 'set_custom_ver_js', 9999 ); // js files versioning
  add_filter( 'script_loader_src', 'set_custom_ver_maincss', 9999); // main theme css versioning
}

add_action('init', 'css_js_versioning');
// end versioning.

add_action('wp_enqueue_scripts', 'stz_script_enqueue');
// add_filter('show_admin_bar','__return_false');

add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 150, true);

function my_excerpt_length($length) {
  return 15;
}
add_filter('excerpt_length', 'my_excerpt_length');
