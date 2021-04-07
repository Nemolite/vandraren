<?php

/**
 * vandraren functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vandraren
 */
 
/**
 *  Настройка плагина OptionTree
 *  Required: set 'ot_theme_mode' filter to true. * 
 */

add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );//Для консоли админки 
add_filter( 'ot_show_pages', '__return_true' );

/**
 * Required: include OptionTree.
 * Подключение OptionTree плагина в режиме разработки
 */
require( trailingslashit( get_template_directory() ) . '/option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . '/meta-boxes/meta-boxes.php' );
require( trailingslashit( get_template_directory() ) . '/meta-boxes/theme-options.php' );

	
/* Использование
  в любом месте сайта подключаем с помощью этой функции
  <?php echo ot_get_option( $option, $default ); ?>
*/
		

 
 
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'vandraren_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vandraren_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on vandraren, use a find and replace
		 * to change 'vandraren' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vandraren', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'vandraren' ),
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
				'vandraren_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'vandraren_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vandraren_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'vandraren_content_width', 640 );
}
add_action( 'after_setup_theme', 'vandraren_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vandraren_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vandraren' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vandraren' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title widget-title-news">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vandraren_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vandraren_scripts() {
	
	  /* main style*/
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'vegas-style', get_template_directory_uri() . '/vendor/css/vegas.css');
	wp_enqueue_style( 'stylename-style', get_template_directory_uri() . '/vendor/css/stylename.css');
	wp_enqueue_style( 'norma-style', get_template_directory_uri() . '/vendor/css/norma.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/vendor/css/style.css'); 
	wp_enqueue_style( 'fix-wp-style', get_template_directory_uri() . '/vendor/css/fix-wp.css');  
	
	
	wp_enqueue_style( 'single', get_template_directory_uri() . '/vendor/css/single.css'); 
	wp_enqueue_style( 'news', get_template_directory_uri() . '/vendor/css/news.css');
	wp_enqueue_style( 'portfolio', get_template_directory_uri() . '/vendor/css/portfolio.css');
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/vendor/css/footer.css');
	/* native style*/
	/*
	wp_enqueue_style( 'vandraren-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'vandraren-style', 'rtl', 'replace' );
   	*/
	
	 /* main script*/
	wp_enqueue_script( 'jquery341', get_template_directory_uri() . '/vendor/js/jquery-3.4.1.min.js', array(), _S_VERSION, true ); 
	wp_enqueue_script( 'vegas-js', get_template_directory_uri() . '/vendor/js/vegas.js', array(), _S_VERSION, true );  
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/vendor/js/main.js', array('jquery341'), _S_VERSION, true );  
	
	 /* main script*/
	wp_enqueue_script( 'vandraren-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'vandraren-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vandraren_scripts' );

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

/**
 * My Function
 */
require get_template_directory() . '/inc/my_functions.php';




