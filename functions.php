<?php
/**
 * maga-zine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package maga-zine
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
function maga_zine_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on maga-zine, use a find and replace
		* to change 'maga-zine' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'maga-zine', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'maga-zine' ),
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
			'maga_zine_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support('align-wide');

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
add_action( 'after_setup_theme', 'maga_zine_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function maga_zine_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'maga_zine_content_width', 640 );
}
add_action( 'after_setup_theme', 'maga_zine_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function maga_zine_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Top Header Left', 'maga-zine' ),
			'id'            => 'top-header-left',
			'description'   => esc_html__( 'Add widgets here.', 'maga-zine' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets 1', 'maga-zine' ),
			'id'            => 'footer-widgets-1',
			'description'   => esc_html__( 'Add widgets here.', 'maga-zine' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets 2', 'maga-zine' ),
			'id'            => 'footer-widgets-2',
			'description'   => esc_html__( 'Add widgets here.', 'maga-zine' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets 3', 'maga-zine' ),
			'id'            => 'footer-widgets-3',
			'description'   => esc_html__( 'Add widgets here.', 'maga-zine' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'maga-zine' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'maga-zine' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'maga_zine_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function maga_zine_scripts() {
	wp_enqueue_style( 'maga-zine-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'maga-zine-style', 'rtl', 'replace' );

	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/inc/css/custom.css' );
	wp_enqueue_style( 'slick-style', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
	wp_enqueue_style( 'slick-theme-style', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css' );
	wp_enqueue_style( 'fa-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' );

	wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'fontawesome-js' , 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'slick-js' , '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'maga-zine-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'custom-js' , get_template_directory_uri() . '/inc/js/custom.js', array('jquery'), _S_VERSION, true );

	// ajax
	wp_enqueue_script( 'ajax-script', get_template_directory_uri(). '/inc/js/ajax.js', array( 'jquery' ), _S_VERSION, true);
	wp_localize_script( 'ajax-script', 'ajax_object', array( 
		'jo_ajaxurl' => admin_url( 'admin-ajax.php' ),
		'jo_nonce' => wp_create_nonce('jo_nonce')
	));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'maga_zine_scripts' );

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Slider Shortcode
 */
function _jo_slick_slider($atts = []) {
	$output = "";
    $default = array(
        'link' => '#',
    );
    $a = shortcode_atts($default, $atts);
      
	$postslist = get_posts( array(
		'posts_per_page' => 12,
		'order'          => 'ASC',
		'orderby'        => 'date',
		'post_type'		 => 'post',
		'meta_key'      => 'editors_pick',
    	'meta_value'    => true
		//'category' => 1
	) );
	
	if ( $postslist ) { 
		$output .= '<div class="your-class">';	
		foreach ( $postslist as $post ) :
			setup_postdata( $post );
			$terms_list = wp_get_post_categories( $post->ID, array( 'fields'=>'names',  ) );
			$featured_image = get_the_post_thumbnail_url($post->ID, 'full');

			$output .= '<div class="_slick-slides" style="background-image:url('.$featured_image.')">';
				$output .= '<div class="overlay"></div>';
				$output .= '<div class="content">';
					$output .= '<ul class="categories">';
						foreach ( $terms_list as $term ) {
							$output .= '<li class="'.esc_html( strtolower($term) ).'"><a href="#">'.esc_html( $term ).'</a></li>';
						}
					$output .= '</ul>';
					$output .= '<h3><a href="#">'.$post->post_title.'</a></h3>';
				$output .= '</div>';
			$output .= '</div>';
		endforeach;
		$output .= '</div>';
		wp_reset_postdata();
	}

	return $output;
}
add_shortcode('jo_slick_slider', '_jo_slick_slider');


function _jo_recent_posts($atts = []) {
	$args = array(  
		'post_type' => 'post',
		'posts_per_page' => 6,
		'orderby' => 'date',
		'order' => 'DESC',
		'paged' => 1,
	);

	$loop = new WP_Query( $args ); 
	ob_start();
	?> 	<div class="_jo-recent-posts"> <?php
		if($loop->have_posts()):
				while ($loop->have_posts()): $loop->the_post();
					get_template_part( 'template-parts/content-custom', get_post_type() );
				endwhile;
		endif; 
	?>	</div>
		<div class="btn__wrapper">
			<a href="javascript:void(0);" class="btn btn__primary" id="load-more">
				<div class="lds-ellipsis">
					<div></div>
					<div></div>
					<div></div>
					<div></div>
				</div>
				<span>Load More</span>
			</a>
		</div> <?php
	wp_reset_postdata();

	$output = ob_get_clean();
    return $output;
}
add_shortcode('jo_recent_posts', '_jo_recent_posts');

function jo_load_more() {

	check_ajax_referer( 'jo_nonce', 'nonce' );  // This function will die if nonce is not correct.
	$paged = sanitize_text_field($_POST['paged']);

	$args = array(  
		'post_type' => 'post',
		'posts_per_page' => 6,
		'orderby' => 'date',
		'order' => 'DESC',
		'paged' => $paged,
	);

	$loop = new WP_Query( $args ); 
	if($loop->have_posts()) :
		while ( $loop->have_posts() ) : $loop->the_post(); 
			get_template_part( 'template-parts/content-custom', get_post_type() );
		endwhile; 
	endif; 

	wp_die();
  }
  add_action('wp_ajax_jo_load_more', 'jo_load_more');
  add_action('wp_ajax_nopriv_jo_load_more', 'jo_load_more');

function _jo_recent_posts_sidebar($atts = []) {
	$args = array(  
		'post_type' => 'post',
		'posts_per_page' => 4,
		'orderby' => 'date',
		'order' => 'DESC',
		'paged' => 1,
	);

	$loop = new WP_Query( $args ); 
	ob_start();
	?> 	<div class="_jo-recent-posts-sidebar"> <?php
		if($loop->have_posts()):
				while ($loop->have_posts()): $loop->the_post();
					get_template_part( 'template-parts/content-customI', get_post_type() );
				endwhile;
		endif; 
	wp_reset_postdata();

	$output = ob_get_clean();
    return $output;
}
add_shortcode('jo_recent_posts_sidebar', '_jo_recent_posts_sidebar');