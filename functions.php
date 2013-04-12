<?php
        // Translations can be filed in the /languages/ directory
        load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );
 
        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !function_exists(core_mods) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
			    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
				wp_enqueue_script('jquery');
			}
		}
		core_mods();
	}

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Widgetize Sidebar
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','html5reset' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

	// Read More Link
	function new_excerpt_more($more) {
	       global $post;
		return ' <a href="'. get_permalink($post->ID) . '">...</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
    
	// Post Types
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); 
	
	// Dynamically Generate Site Name
	function html5reset_head_id() {
    do_action('html5reset_head_id');
	}

	function head_id_slug() {
	 $headidslug = get_bloginfo('name');
	 $headidslug = ereg_replace("[^A-Za-z]", "", $headidslug);
	 $headidslug = strtolower($headidslug);
	 echo $headidslug; 
	}          
	add_action('html5reset_head_id','head_id_slug');  

	// Add 3.1 post format theme support.
	add_action( 'init', 'register_my_menus' );

	function register_my_menus() {
		register_nav_menus(
			array(
				'primary-menu' => __( 'Primary Menu' ),
				'secondary-menu' => __( 'Secondary Menu' ),
				'tertiary-menu' => __( 'Tertiary Menu' )
			)
		);
	
	}
	// 3.0 Post Thumbnails
	if ( function_exists( 'add_theme_support' ) ) { 
		add_theme_support( 'post-thumbnails' ); 
		set_post_thumbnail_size( 150, 150, true );
	}
	
?>