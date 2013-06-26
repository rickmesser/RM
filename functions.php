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
				wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"), false);
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
    register_sidebars( 1,
		array(
			'name' => 'front-page-tagline',
			'before_widget' => '<div id="front-page-tagline">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2>',
	        'after_title' => '</h2>'
		)

		);
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


  class Walker_Nav_Menu_Bootstrap extends Walker_Nav_Menu {


  	function start_lvl( &$output, $depth ) {

  		//In a child UL, add the 'dropdown-menu' class
  		$indent = str_repeat( "\t", $depth );
  		$output	   .= "\n$indent<ul class=\"dropdown-menu\">\n";

  	}

  	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

  		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

  		$li_attributes = '';
  		$class_names = $value = '';

  		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

  		//Add class and attribute to LI element that contains a submenu UL.
  		if ($args->has_children){
  			$classes[] 		= 'dropdown';
  			$li_attributes .= 'data-dropdown="dropdown"';
  		}
  		$classes[] = 'menu-item-' . $item->ID;
  		//If we are on the current page, add the active class to that menu item.
  		$classes[] = ($item->current) ? 'active' : '';

  		//Make sure you still add all of the WordPress classes.
  		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
  		$class_names = ' class="' . esc_attr( $class_names ) . '"';

  		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
  		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

  		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

  		//Add attributes to link element.
  		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
  		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target     ) .'"' : '';
  		$attributes .= ! empty( $item->xfn ) ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
  		$attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
  		$attributes .= ($args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : ''; 

  		$item_output = $args->before;
  		$item_output .= '<a'. $attributes .'>';
  		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
  		$item_output .= ($args->has_children) ? ' <b class="caret"></b> ' : ''; 
  		$item_output .= '</a>';
  		$item_output .= $args->after;

  		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  	}

  	//Overwrite display_element function to add has_children attribute. Not needed in >= Wordpress 3.4
  	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {

  		if ( !$element )
  			return;

  		$id_field = $this->db_fields['id'];

  		//display this element
  		if ( is_array( $args[0] ) ) 
  			$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
  		else if ( is_object( $args[0] ) ) 
  			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] ); 
  		$cb_args = array_merge( array(&$output, $element, $depth), $args);
  		call_user_func_array(array(&$this, 'start_el'), $cb_args);

  		$id = $element->$id_field;

  		// descend only when the depth is right and there are childrens for this element
  		if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {

  			foreach( $children_elements[ $id ] as $child ){

  				if ( !isset($newlevel) ) {
  					$newlevel = true;
  					//start the child delimiter
  					$cb_args = array_merge( array(&$output, $depth), $args);
  					call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
  				}
  				$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
  			}
  				unset( $children_elements[ $id ] );
  		}

  		if ( isset($newlevel) && $newlevel ){
  			//end the child delimiter
  			$cb_args = array_merge( array(&$output, $depth), $args);
  			call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
  		}

  		//end this element
  		$cb_args = array_merge( array(&$output, $element, $depth), $args);
  		call_user_func_array(array(&$this, 'end_el'), $cb_args);

  	}

  }
  /* / END custom bootstrap menu walker */


    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video', 'menus')); // Add 3.1 post format theme support.

?>
