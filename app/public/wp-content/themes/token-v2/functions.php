<?php
/**
 * My default template functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package token-v2
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

remove_filter( 'the_content', 'wpautop' );
remove_action( 'wp_head', 'wlwmanifest_link' );/* remove <meta name="generator" content="WordPress 4.4.2" > */

/**
 * Enqueue scripts and styles.
 */
function token_scripts() {
	/*
	 Script */
	// wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4', true );
	// wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'slim', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array( 'jquery' ), '3.2.1', true );
	wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js', array( 'jquery' ), '1.12.9', true );
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_script( 'bootstrap_ekkolightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js', array( 'jquery' ), '5.3.0', true );
	wp_enqueue_script( 'script', get_theme_file_uri( '/assets/js/script.js' ), array( 'jquery' ), filemtime( get_theme_file_path( '/assets/js/script.js' ) ), 'all' );

	/* Style */
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '3.3.6', 'all' );
	wp_enqueue_style( 'bootstrap_ekkolightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css', array(), '5.3.0', 'all' );
	wp_enqueue_style( 'style', get_theme_file_uri( '/style.css' ), array(), filemtime( get_theme_file_path( '/style.css' ) ), 'all' );
	wp_enqueue_style( 'print', get_theme_file_uri( '/assets/css/print.css' ), array(), filemtime( get_theme_file_path( '/assets/css/print.css' ) ), 'print' );
}

add_action( 'wp_enqueue_scripts', 'token_scripts' );

load_theme_textdomain( 'token-v2', get_template_directory() . '/languages' );


/** Widgets */
function token_widgets_init() {
	register_sidebar(
		array(
			'name'        => esc_html__( 'Language switch', 'token-v2' ),
			'id'          => 'language-switch',
			'description' => esc_html__( 'Add widgets here.', 'token-v2' ),
		)
	);
}
add_action( 'widgets_init', 'token_widgets_init' );


/** Setup theme */
function token_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'menu-1'   => esc_html__( 'Primary', 'token-v2' ),
			'sidemenu' => esc_html__( 'Side Menu', 'token-v2' ),
		)
	);

	add_image_size( 'product_thumb', 9999, 60, false );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 50,
			'width'       => 180,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'token_setup' );

/** Custom_gallery_shortcode */
function custom_gallery_shortcode( $attr ) {
	global $post;
	static $instance = 0;
	$instance++;
	// Allow plugins/themes to override the default gallery template.
	$output = apply_filters( 'post_gallery', '', $attr );
	if ( $output != '' ) {
		return $output;
	}
	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( ! $attr['orderby'] ) {
			unset( $attr['orderby'] );
		}
	}
	extract(
		shortcode_atts(
			array(
				'order'   => 'DESC',
				'orderby' => 'menu_order ID',
				'id'      => $post->ID,
				'columns' => 3,
				'size'    => 'thumbnail',
				'include' => '',
				'exclude' => '',
				'limit'   => 10000,
			),
			$attr
		)
	);
	if ( $ids ) {
		$include = $ids;
	}
	$ids     = explode( ',', $attr['ids'] );
	$output  = '';
	$output .= "
		<div class='gallery'>
			<ul class='box-thumbnail'>
	";
	$i       = 0;
	foreach ( $ids as $i ) {
		$a          = get_posts(
			array(
				'include'        => $i,
				'ids'            => $ids,
				'post_status'    => 'inherit',
				'post_type'      => 'attachment',
				'post_mime_type' => 'image',
				'order'          => $order,
				'orderby'        => $orderby,
				'limit'          => 10000,
			)
		);
		$attachment = $a[0];
		$link       = isset( $attr['link'] ) && 'file' == $attr['link'] ? wp_get_attachment_link( $id, $size, false, false ) : wp_get_attachment_link( $id, $size, true, false );
		// $link=str_replace('<a ','<a class="fancybox" rel="group" ', $link);
		$large_image_url         = wp_get_attachment_image_src( $attachment->ID, 'large' );
		$medium_image_url        = wp_get_attachment_image_src( $attachment->ID, 'medium' );
		$thumbnail_image_url     = wp_get_attachment_image_src( $attachment->ID, 'thumbnail' );
		$postthumbnail_image_url = wp_get_attachment_image_src( $attachment->ID, 'postthumbnail' );
		$post_title              = wptexturize( $attachment->post_title );
		$post_caption            = wptexturize( $attachment->post_excerpt );
		$post_content            = wptexturize( $attachment->post_content );

		$output .= "
				<!-- #{$id} -->
				<li class='col-xs-6 col-sm-4 col-md-3 box-img4v'>
					<a href='{$large_image_url[0]}' title='{$post_title}' data-title='{$post_title} - {$post_caption}' data-footer='{$post_content}' data-toggle='lightbox'>
						<img class='img-responsive center-block box-img4v-crop' src='{$thumbnail_image_url[0]}'>
					</a>
					<h3>{$post_title}</h3>
					<div class='_text'>
						<p class='_caption'>{$post_caption}</p>
						<p class='_content'>{$post_content}</p>
					</div>
				</li>
			";
	}

	$output .= '
			</ul>
		</div>
	';

	return $output;
}
remove_shortcode( 'gallery', 'gallery_shortcode' );
add_shortcode( 'gallery', 'custom_gallery_shortcode' );

/** Widget_submenu */
function widget_submenu( $params = array() ) {
	ob_start();
	include get_theme_root() . '/' . get_template() . '/widget_submenu.php';
	return ob_get_clean();
}

/** Widget_submenu en */
function widget_submenu_en( $params = array() ) {
	ob_start();
	include get_theme_root() . '/' . get_template() . '/widget_submenu_en.php';
	return ob_get_clean();
}

add_shortcode( 'submenu', 'widget_submenu' );
add_shortcode( 'submenu_en', 'widget_submenu_en' );


if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page(
		array(
			'page_title' => 'Web setting',
			'menu_title' => 'Web setting',
			'menu_slug'  => 'web-setting',
			'capability' => 'edit_posts',
			'redirect'   => false,
			'position'   => '2',
			'icon_url'   => 'dashicons-admin-site',
		)
	);
}

add_filter(
	'get_the_archive_title',
	function ( $title ) {
		if ( is_category() ) {
			$title = single_cat_title( '', false );
		} elseif ( is_tag() ) {
			$title = single_tag_title( '', false );
		} elseif ( is_author() ) {
			$title = '<span class="vcard">' . get_the_author() . '</span>';
		} elseif ( is_tax() ) { // for custom post types
			$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
		} elseif ( is_post_type_archive() ) {
			$title = post_type_archive_title( '', false );
		}
		return $title;
	}
);


function mytheme_custom_excerpt_length( $length ) {
	$length = 250;
	return $length;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

// Register Custom Post Type
function create_dict_posttype() {

	$labels  = array(
		'name'                  => _x( 'บัญชีคำศัพท์ / Dictionary', 'Post Type General Name', 'token' ),
		'singular_name'         => _x( 'บัญชีคำศัพท์ / Dictionary', 'Post Type Singular Name', 'token' ),
		'menu_name'             => __( 'บัญชีคำศัพท์ / Dictionary', 'token' ),
		'name_admin_bar'        => __( 'บัญชีคำศัพท์ / Dictionary', 'token' ),
		'archives'              => __( 'Dictionary Archives', 'token' ),
		'attributes'            => __( 'Dictionary Attributes', 'token' ),
		'parent_item_colon'     => __( 'Parent Dictionary:', 'token' ),
		'all_items'             => __( 'All Dictionaries', 'token' ),
		'add_new_item'          => __( 'Add New Dictionary', 'token' ),
		'add_new'               => __( 'Add New', 'token' ),
		'new_item'              => __( 'New Dictionary', 'token' ),
		'edit_item'             => __( 'Edit Dictionary', 'token' ),
		'update_item'           => __( 'Update Dictionary', 'token' ),
		'view_item'             => __( 'View Dictionary', 'token' ),
		'view_items'            => __( 'View Dictionaries', 'token' ),
		'search_items'          => __( 'Search Dictionary', 'token' ),
		'not_found'             => __( 'Not found', 'token' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'token' ),
		'featured_image'        => __( 'Featured Image', 'token' ),
		'set_featured_image'    => __( 'Set featured image', 'token' ),
		'remove_featured_image' => __( 'Remove featured image', 'token' ),
		'use_featured_image'    => __( 'Use as featured image', 'token' ),
		'insert_into_item'      => __( 'Insert into Dictionary', 'token' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Dictionary', 'token' ),
		'items_list'            => __( 'Dictionary list', 'token' ),
		'items_list_navigation' => __( 'Dictionary list navigation', 'token' ),
		'filter_items_list'     => __( 'Filter Dictionary list', 'token' ),
	);
	$rewrite = array(
		'slug'       => 'dict',
		'with_front' => true,
		'pages'      => true,
		'feeds'      => false,
	);
	$args    = array(
		'label'               => __( 'บัญชีคำศัพท์ / Dictionary', 'token' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor' ),
		'taxonomies'          => array( 'dictionary_category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-book',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
	);
	register_post_type( 'dictionary', $args );

}
add_action( 'init', 'create_dict_posttype', 0 );

// Register Custom Taxonomy
function create_dictionary_category_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Dictionary Categories', 'Taxonomy General Name', 'token' ),
		'singular_name'              => _x( 'Dictionary Category', 'Taxonomy Singular Name', 'token' ),
		'menu_name'                  => __( 'Dictionary Category', 'token' ),
		'all_items'                  => __( 'All Dictionary Categories', 'token' ),
		'parent_item'                => __( 'Parent Dictionary Category', 'token' ),
		'parent_item_colon'          => __( 'Parent Dictionary Category:', 'token' ),
		'new_item_name'              => __( 'New Dictionary Category Name', 'token' ),
		'add_new_item'               => __( 'Add New Dictionary Category', 'token' ),
		'edit_item'                  => __( 'Edit Dictionary Category', 'token' ),
		'update_item'                => __( 'Update Dictionary Category', 'token' ),
		'view_item'                  => __( 'View Dictionary Category', 'token' ),
		'separate_items_with_commas' => __( 'Separate dictionary categories with commas', 'token' ),
		'add_or_remove_items'        => __( 'Add or remove dictionary categories', 'token' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'token' ),
		'popular_items'              => __( 'Popular Dictionary Categories', 'token' ),
		'search_items'               => __( 'Search Dictionary Categories', 'token' ),
		'not_found'                  => __( 'Not Found', 'token' ),
		'no_terms'                   => __( 'No Dictionary Categories', 'token' ),
		'items_list'                 => __( 'Dictionary Categories list', 'token' ),
		'items_list_navigation'      => __( 'Dictionary Categories list navigation', 'token' ),
	);
	$args   = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud'     => false,
		'query_var'         => 'dictionary_category',
		'show_in_rest'      => true,
	);
	register_taxonomy( 'dictionary_category', array( 'dictionary' ), $args );

}
add_action( 'init', 'create_dictionary_category_custom_taxonomy', 0 );


// Require files
require get_theme_file_path( '/inc/acf.php' );
require get_theme_file_path( '/inc/product.php' );
