<?php

function yoga_register_custom_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Main Menu' ),
			'footer-menu' => __( 'Footer Menu' ),
			'class-schedule-menu' => __( 'Class Schedule Menu' )
		)
	);
	// add_action - Hooks a function on to a specific action.
	// init runs after WordPress has finished loading but before any headers are sent.
	add_action( 'init', 'yoga_register_custom_menus' );
	
}

// Add custom menus to Dashboard > Menus when theme is active, if you have menus registered   
if ( function_exists( 'yoga_register_custom_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main Menu',
		  'footer-menu' => 'Footer Menu',
		  'class-schedule-menu' => 'Class Schedule Menu'
			 )
	);
}

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
}

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'upcoming-events-thumb', 258, 207 );
}

// Create thumbnails for excerpts using the featured image
if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 140, 140, true );
}

// Add Theme Support - Post Thumbnails
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );  // Posts only

// Add Custom Size Images
add_image_size('blog-140px-width', 140); /* 140 px width and unlimited height */
add_image_size('blog-140xauto', 140, auto); /* 140 px width and auto height */
add_image_size('home-140x140px-cropped', 140, 140, true); /* crops image to 140 x 140 px */

// Gets the caption for featured image - makes it a p tag
function get_post_thumbnail_caption() {
	if ( $thumb = get_post_thumbnail_id() )
		return get_post( $thumb )->post_excerpt;
}

// Register Sidebars
add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {
	// Register the primary sidebar.
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}
// End Register Sidebars

// Remove Inline Styles from Captions
add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');
function fixed_img_caption_shortcode($attr, $content = null) {
	
	if ( ! isset( $attr['caption'] ) ) {
		if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
			$content = $matches[1];
			$attr['caption'] = trim( $matches[2] );
		}
	}
	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
	if ( $output != '' )
		return $output;
	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> 'alignnone',
		'width'	=> '',
		'caption' => ''
	), $attr));
	if ( 1 > (int) $width || empty($caption) )
		return $content;
	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'
	. do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}

/*
SPECIAL MENU FOR HIGHER TRAINING SECTION
*/

function print_class_schedule_menu() {
	//	extract(shortcode_atts(array( 'id' => null, ), $atts));
	
	// LIST ALL ANCESTORS FOR CURRENT POST
	
	global $post;
	$ancestors = $post->ancestors;
	
	// LIST ALL MENU ITEMS FOR SPECIAL MENU (ID 5)
	
	$wpnavmenu_args = array(
		'order' => 'ASC',
		'orderby' => 'menu_order',
		'post_status' => 'publish',
		'nopaging' => true
	);
	$menu_items = wp_get_nav_menu_items(5, $wpnavmenu_args);
	
	// START OUTPUT VARIABLES
	
	$menu_list = '<div class="tab_box top-curr">';
	
	foreach ( (array) $menu_items as $key => $menu_item ) {
	    $title = $menu_item->title;
		$description = $menu_item->description;
		$url = $menu_item->url;
		$parent = $menu_item->menu_item_parent;
		
		// ONLY USE ROOT LEVEL ITEMS
		
		$menu_list .= '<div class="col-sm-3 mybox">
						<div class="title"><a href="' . $url . '">' . $title . '</a></div>
						'.(empty($key)?'':'<div class="learnmore"><a href="'.$url.'">Learn more</a></div>').'
					</div>';
		
	}
	$menu_list .= '</div>';
	
	/*
	//old
	$learn_more = '<ul class="learn_more">';
	$active_box = 0;
	
	$i = 1;
	
	// LOOP THROUGH MENU ITEMS
	foreach ( (array) $menu_items as $key => $menu_item ) {
	    $title = $menu_item->title;
		$description = $menu_item->description;
		$url = $menu_item->url;
		$parent = $menu_item->menu_item_parent;
		
		// ONLY USE ROOT LEVEL ITEMS
		
		if ($parent == 0) {
			$menu_list .= '<div class="tab_title"><a href="' . $url . '">' . $title . '</a></div>';
			$learn_more .= '<li';
			
			// IF ACTIVE POST OR ANCESTOR OF ACTIVE POST, MARK AS ACTIVE
			
			if( (get_the_ID() == $menu_item->object_id) or (in_array($menu_item->object_id, $ancestors)) ) {
				$tab_box_title = $description;
				$active_box = $i;
				$active_item = $menu_item->object_id;
				$learn_more .= ' class="active"';
			}
			
			$learn_more .= '><a href="'. $url . '">Learn more</a></li>';
			
			// EXIT LOOP, IF FOUR BOXES HAVE BEEN FILLED
			
			if(++$i > 4) break;

		}
	}
	
	$learn_more .= '</ul>';
	
	// SET TITLE BAR TEXT
	
	if ($tab_box_title == '') {
		$tab_box_title = 'Dummy Box Title';
	}
	
	$menu_list .= $learn_more . '<div class="tab_bar select' . $active_box . '">' . $tab_box_title . '</div>';
	$menu_list .= '</div>';
	*/
	//	LOAD SUBMENU
	
	if ($active_box != 0) {
	
		$i = 1;
		$sub_menu = '';
	
		foreach ( (array) $menu_items as $key => $menu_item ) {
		$title = $menu_item->title;
		$url = $menu_item->url;
		
			$pageid = get_post_meta( $menu_item->ID, '_menu_item_object_id', true );
			$parent = $menu_item->menu_item_parent;
			$parent_pageid = get_post_meta( $parent, '_menu_item_object_id', true );
		
			// ONLY USE CHILD ITEMS FOR ACTIVE MAIN ITEM
		
			if ($parent_pageid == $active_item) {
				$sub_menu .= '<li';
			
				// MARK AS ACTIVE
			
				if( get_the_ID() == $menu_item->object_id ) {
					$sub_menu .= ' class="active"';
				}
			
				$sub_menu .= '><a href="'. $url . '">' . $title . '</a></li>';
			
				// EXIT LOOP, IF FOUR BOXES HAVE BEEN FILLED
			
				if(++$i > 4) break;

			}
		}
	
		// ADD WRAPPING CODE IF SUBMENU IS NOT EMPTY
	
		if ($sub_menu != '')
		{
			$sub_menu = '<ul class="sub_nav">' . $sub_menu . '</ul>';
			$menu_list .= $sub_menu;
		}
	
	}
	
	$menu_list .= '<div class="clear"></div>';

	echo $menu_list;
}

?>