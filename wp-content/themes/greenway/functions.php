<?php

//adding options page
require_once('options_page.php');

// integrity and crossorigin
function add_font_awesome_cdn_attributes( $html, $handle ) {
    if ( 'FontAwesome' === $handle ) {
        return str_replace( "media='all'", "media='all' integrity='sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu' crossorigin='anonymous'", $html );
    }
    return $html;
}

add_filter( 'style_loader_tag', 'add_font_awesome_cdn_attributes', 10, 2 );

add_action('wp_enqueue_scripts', 'greenway_assets');

function greenway_assets() {

	// font awesome
	// wp_register_style('FontAwesome', 'https://use.fontawesome.com/releases/v5.15.2/css/all.css', array(), null, 'all' );

	// wp_enqueue_style('FontAwesome');
	
	//main css file
	wp_enqueue_style('maincss', get_template_directory_uri().'/css/main.css');
    
    wp_enqueue_style('maincss', get_template_directory_uri().'/css/single.css');
	
	// wp_enqueue_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD3Eu6mrK0SwjyuQS8DL-yRkrnQpqVizik', false, null, true );
	
	wp_deregister_script( 'jquery' );
	
	wp_register_script( 'jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js", false, null, true );
	
	wp_enqueue_script( 'jquery' );

	// wp_enqueue_script('fancybox', get_template_directory_uri() . '/libs/fancybox/fancybox.min.js', false, null, true );
	
	 wp_enqueue_script('slick', get_template_directory_uri() . '/assets/slick.css', false, null, true );
	
	// wp_enqueue_script('inputmask', get_template_directory_uri() . '/libs/inputmask/inputmask.min.js', false, null, true );
	
	// wp_enqueue_script('selectfield', get_template_directory_uri() . '/libs/selectfield/selectfield.min.js', false, null, true );
	
	// wp_enqueue_script('commonjs', get_template_directory_uri() . '/js/common.js', false, null, true );
	
	// wp_enqueue_script('mapjs', get_template_directory_uri() . '/js/map.js', false, null, true );
	
	// wp_enqueue_script('calculator', get_template_directory_uri() . '/js/calculator.min.js', false, null, true );
	
	wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', false, null, true );

}

// add post thumb
add_theme_support( 'post-thumbnails' ); // for all post types

// add menu support
add_theme_support( 'menus' ); 

 // register the nav
 function register_my_menu() {
  register_nav_menu('topnav',__( 'topnav' ));
 }
 add_action( 'init', 'register_my_menu' );

// let's add "*active*" as a class to the li
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

function menu_set_dropdown( $sorted_menu_items, $args ) {
    $last_top = 0;
    foreach ( $sorted_menu_items as $key => $obj ) {
        // it is a top lv item?
        if ( 0 == $obj->menu_item_parent ) {
            // set the key of the parent
            $last_top = $key;
        } else {
            $sorted_menu_items[$last_top]->classes['menu__item--list'] = 'menu__item--list';
        }
    }
    return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );

class Header_Walker extends Walker_Nav_Menu {

    // add classes to ul sub-menus
	function start_lvl( &$output, $depth ) {
		// depth dependent classes
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $indent .= '<svg class="header__hover-icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#353535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>';
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'header__hover',
			// ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
			// ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
			// 'menu-depth-' . $display_depth
			);
		$class_names = implode( ' ', $classes );

		// build html
		$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}

	// add main/sub classes to li's and links
    function start_el( &$output, $item, $depth, $args ) {
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		// depth dependent classes
		$depth_classes = array(
			( $depth == 0 ? 'menu__item' : 'header__hover-item' ),
			// ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
			// ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
			// 'menu-item-depth-' . $depth
		);
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

		// build html
		$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

		// link attributes
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class=" ' . ( $depth > 0 ? 'header__hover-link' : 'menu__link' ) . '"';

		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after,
			$args->after
		);

		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }

function remove_core_updates(){
    global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');

//allow webp uploading
add_filter( 'upload_mimes', 'my_myme_types', 1, 1 );
function my_myme_types( $mime_types ) {
  $mime_types['webp'] = 'image/webp';     // Adding .webp extension
  
//  unset( $mime_types['xls'] );  // Remove .xls extension
//  unset( $mime_types['xlsx'] ); // Remove .xlsx extension
  
  return $mime_types;

}
