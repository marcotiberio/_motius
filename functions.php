<?php
/**
 * _motius functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _motius
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( '_motius_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function _motius_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _motius, use a find and replace
		 * to change '_motius' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( '_motius', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', '_motius' ),
				'footer-menu' => esc_html__( 'Footer', '_motius' ),
				'secondary-footer-menu' => esc_html__( 'Secondary Footer', '_motius' ),
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
				'_motius_custom_background_args',
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
add_action( 'after_setup_theme', '_motius_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _motius_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_motius_content_width', 640 );
}
add_action( 'after_setup_theme', '_motius_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _motius_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', '_motius' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', '_motius' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', '_motius_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _motius_scripts() {
	wp_enqueue_style( '_motius-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( '_motius-style', 'rtl', 'replace' );

	wp_deregister_script( 'jquery' );
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);

	wp_enqueue_script( 'flickityjs', get_template_directory_uri() . '/js/flickity.pkgd.min.js', array( 'jquery' ), '1.9.0', true );
	wp_enqueue_script( 'flickityjs-init', get_template_directory_uri(). '/js/flickity-docs.min.js', array( 'flickityjs' ), '1.9.0', true );
		
	wp_enqueue_style( 'flickitycss', get_template_directory_uri() . '/css/flickity.min.css', 'all');
	
	wp_enqueue_script( '_motius-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( '_motius-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_motius_scripts' );


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

add_filter('body_class','add_category_to_single');
  function add_category_to_single($classes) {
    if (is_single() ) {
      global $post;
      foreach((get_the_category($post->ID)) as $category) {
        // add category slug to the $classes array
        $classes[] = $category->category_nicename;
      }
    }
    // return the $classes array
    return $classes;
  }


/*
* Creating a function to create our Success Stories Posts
*/
 
function custom_post_type_successstories() {
 
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Success Stories', 'Post Type General Name', '_motius' ),
			'singular_name'       => _x( 'Success Story', 'Post Type Singular Name', '_motius' ),
			'menu_name'           => __( 'Success Stories', '_motius' ),
			'parent_item_colon'   => __( 'Parent Success Story', '_motius' ),
			'all_items'           => __( 'All Success Stories', '_motius' ),
			'view_item'           => __( 'View Success Story', '_motius' ),
			'add_new_item'        => __( 'Add New Success Story', '_motius' ),
			'add_new'             => __( 'Add New', '_motius' ),
			'edit_item'           => __( 'Edit Success Story', '_motius' ),
			'update_item'         => __( 'Update Success Story', '_motius' ),
			'search_items'        => __( 'Search Success Story', '_motius' ),
			'not_found'           => __( 'Not Found', '_motius' ),
			'not_found_in_trash'  => __( 'Not found in Trash', '_motius' ),
		);
		 
	// Set other options for Custom Post Type
		 
		$args = array(
			'label'               => __( 'success-stories', '_motius' ),
			'description'         => __( 'Success Story news and reviews', '_motius' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'  => array( 'category' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/ 
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	 
		);
		 
		// Registering your Custom Post Type
		register_post_type( 'success-stories', $args );
	 
	}
	 
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	 
	add_action( 'init', 'custom_post_type_successstories', 0 );

/*
* Creating a function to create our Insights Posts
*/
 
function custom_post_type_insights() {
 
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Insights', 'Post Type General Name', '_motius' ),
			'singular_name'       => _x( 'Insight', 'Post Type Singular Name', '_motius' ),
			'menu_name'           => __( 'Insights', '_motius' ),
			'parent_item_colon'   => __( 'Parent Insight', '_motius' ),
			'all_items'           => __( 'All Insights', '_motius' ),
			'view_item'           => __( 'View Insight', '_motius' ),
			'add_new_item'        => __( 'Add New Insight', '_motius' ),
			'add_new'             => __( 'Add New', '_motius' ),
			'edit_item'           => __( 'Edit Insight', '_motius' ),
			'update_item'         => __( 'Update Insight', '_motius' ),
			'search_items'        => __( 'Search Insight', '_motius' ),
			'not_found'           => __( 'Not Found', '_motius' ),
			'not_found_in_trash'  => __( 'Not found in Trash', '_motius' ),
		);
		 
	// Set other options for Custom Post Type
		 
		$args = array(
			'label'               => __( 'insights', '_motius' ),
			'description'         => __( 'Insight news and reviews', '_motius' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			'taxonomies'          => array('topics', 'category' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/ 
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,
	 
		);
		 
		// Registering your Custom Post Type
		register_post_type( 'insights', $args );
	 
	}
	 
	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	 
	add_action( 'init', 'custom_post_type_insights', 0 );