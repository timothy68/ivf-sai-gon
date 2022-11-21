<?php
/**
 * IVF Sai Gon Final functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package IVF_Sai_Gon_Final
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ivf_sai_gon_final_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on IVF Sai Gon Final, use a find and replace
		* to change 'ivf-sai-gon-final' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ivf-sai-gon-final', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'ivf-sai-gon-final' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ivf_sai_gon_final_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ivf_sai_gon_final_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ivf_sai_gon_final_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ivf_sai_gon_final_content_width', 640 );
}
add_action( 'after_setup_theme', 'ivf_sai_gon_final_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ivf_sai_gon_final_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ivf-sai-gon-final' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ivf-sai-gon-final' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ivf_sai_gon_final_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ivf_sai_gon_final_scripts() {
	wp_enqueue_style( 'ivf-sai-gon-final-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ivf-sai-gon-final-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ivf-sai-gon-final-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ivf_sai_gon_final_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Registering Boostrap Scripts and styles

// Includes - Cau lenh
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));

// Hooks - Logic xu ly trong theme
add_action('wp_enqueue_scripts', 'ivf_enqueue_assets');
add_action('wp_head', 'i_head', 5);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//Adding active class in menu item
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

// Theme Options - ACF Option pages
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Header'),
            'menu_title'  => __('Header'),
            'redirect'    => false,
        ));

        // Add sub page.
        acf_add_options_page(array(
            'page_title'  => __('About'),
            'menu_title'  => __('About'),
            'parent_slug' => $parent['menu_slug'],
        ));
        acf_add_options_page(array(
            'page_title'  => __('Resume'),
            'menu_title'  => __('Resume'),
            'parent_slug' => $parent['menu_slug'],
        ));
        acf_add_options_page(array(
            'page_title'  => __('Services'),
            'menu_title'  => __('Services'),
            'parent_slug' => $parent['menu_slug'],
        ));
        acf_add_options_page(array(
            'page_title'  => __('Portfolio'),
            'menu_title'  => __('Portfolio'),
            'parent_slug' => $parent['menu_slug'],
        ));
        acf_add_options_page(array(
            'page_title'  => __('Contact'),
            'menu_title'  => __('Contact'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}