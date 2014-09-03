<?php
/**
 * mopdog functions and definitions
 *
 * @package mopdog
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'mopdog_setup' ) ) :


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mopdog_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mopdog, use a find and replace
	 * to change 'mopdog' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mopdog', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'mopdog' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mopdog_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // mopdog_setup
add_action( 'after_setup_theme', 'mopdog_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function mopdog_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'mopdog' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'mopdog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mopdog_scripts() {

	//wp_enqueue_style( 'kube', get_template_directory_uri() . '/css/kube.css');
	//wp_enqueue_style( 'mopdog-style', get_template_directory_uri() . '/less/master.css' );

	wp_enqueue_script( 'scripts' , get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1', false);

	wp_enqueue_script( 'prefixfree' , get_template_directory_uri() . '/js/prefixfree.min.js', array('jquery'), '1', false);

	wp_enqueue_script( 'mopdog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'mopdog_scripts' );

//LESS Enqueue ||COMMENT FOR LIVE SITE||
function less_scripts() {

wp_enqueue_style('less',get_template_directory_uri() .'/less/master.less');
add_filter('style_loader_tag', 'my_style_loader_tag_function');

wp_enqueue_script('less',get_template_directory_uri() .'/js/less.js', false);

}

add_action('wp_enqueue_scripts','less_scripts', 1);

// LESS Enqueue */

function my_style_loader_tag_function($tag){
  //do stuff here to find and replace the rel attribute    
  return preg_replace("/='stylesheet' id='less-css'/", "='stylesheet/less' id='less-css'", $tag);
}
/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
