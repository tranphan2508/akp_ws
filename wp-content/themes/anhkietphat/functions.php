<?php
	// Create responsive menu in wordpress
	require_once('wp_bootstrap_navwalker.php');
	add_theme_support('menus');
	register_nav_menus(array(
		'top' => 'Main menu',
		'footer' => 'Menu 2',
	));
?>

<?php
	//This function is used to active menu when display detail content of post
	function my_special_nav_class( $classes, $item ) {
		// Getting the current post details
		global $post;
		
		// Getting the post type of the current post
		$current_post_type = get_post_type_object(get_post_type($post->ID));
		$current_post_type_slug = $current_post_type->rewrite[slug];
		
		// Getting the URL of the menu item
		$menu_slug = strtolower(trim($item->url));
		
		// If the menu item URL contains the current post types slug add the current-menu-item class
		if (strpos($menu_slug,$current_post_type_slug) !== false) {
		   $classes[] = 'active';
		}
		
		// Return the corrected set of classes to be added to the menu item
		return $classes;
	}
	add_filter( 'nav_menu_css_class', 'my_special_nav_class', 10, 2 ); 
	 
	// highlight active custom post page in nav
	// add_filter( 'nav_menu_css_class', 'namespace_menu_classes', 10, 2 );
	// function namespace_menu_classes( $classes , $item ){
		// if ( get_post_type() == 'whyvinasaver' ) {
			// // remove unwanted classes if found
			// $classes = str_replace( 'active', '', $classes );
			// // find the url you want and add the class you want
			// if ( $item->url == '/competitive-cost' ) {
				// $classes = str_replace( 'menu-item', 'menu-item current_page_parent', $classes );
			// }
		// }
		// return $classes;
	// }
?>

<?php
	//Create other post type (custom post type)
	function create_news_post_type() {
		$label = array(
			'name' => _('News'),
			'singular_name' =>  __('News'),
			'add_new' =>  __('Add New'),
			'add_new_item'  =>  __('Add New News'),
			'edit'  =>  __('Edit'),
			'edit_item' =>  __('Edit News'),
			'new_item'  =>  __('New News'),
			'view'  =>  __('View News'),
			'view_item' =>  __('View News'),
			'search_items' =>  __('Search News'),
			'not_found' =>  __('No News found'),
			'not_found_in_trash'  =>  __('No News found in Trash')
		);
		
		$args = array(
			'labels' => $label,
			'public'  =>  true,
			'show_ui' =>  true,
			'publicy_queryable' =>  true,
			'exclude_from_search' =>  false,
			'menu_position' => 5,
			'hierarchical'  => true,
			'query_var' =>  true,
			'supports'  =>  array(
				'title', 'editor', 'comments', 'author', 'excerpt', 'thumbnail',
				'custom-fields'
			),
			'rewrite' =>  array('slug'  =>  'news', 'with_front' =>  false),
			'taxonomies' =>  array('post_tag', 'category'),
			'can_export'  =>  true,
			//'register_meta_box_cb'  =>  'call_to_function_do_something',
			'description' =>  __('News description here.')
		);
		register_post_type('news', $args);
		flush_rewrite_rules();
	}
	add_action('init', 'create_news_post_type');
	
	function create_products_post_type() {
		$label = array(
			'name' => _('Products'),
			'singular_name' =>  __('Products'),
			'add_new' =>  __('Add New'),
			'add_new_item'  =>  __('Add New Products'),
			'edit'  =>  __('Edit'),
			'edit_item' =>  __('Edit Products'),
			'new_item'  =>  __('New Products'),
			'view'  =>  __('View Products'),
			'view_item' =>  __('View Products'),
			'search_items' =>  __('Search Products'),
			'not_found' =>  __('No Products found'),
			'not_found_in_trash'  =>  __('No Products found in Trash')
		);
		
		$args = array(
			'labels' => $label,
			'public'  =>  true,
			'show_ui' =>  true,
			'publicy_queryable' =>  true,
			'exclude_from_search' =>  false,
			'menu_position' => 5,
			'hierarchical'  => true,
			'query_var' =>  true,
			'supports'  =>  array(
				'title', 'editor', 'comments', 'author', 'excerpt', 'thumbnail',
				'custom-fields'
			),
			'rewrite' =>  array('slug'  =>  'products', 'with_front' =>  false),
			'taxonomies' =>  array('post_tag', 'category'),
			'can_export'  =>  true,
			//'register_meta_box_cb'  =>  'call_to_function_do_something',
			'description' =>  __('Products description here.')
		);
		register_post_type('products', $args);
		flush_rewrite_rules();
	}
	add_action('init', 'create_products_post_type');
?>

<?php
	//Create other post type (career type)
	function create_career_post_type() {
		$label = array(
			'name' => _('Career'),
			'singular_name' =>  __('Career'),
			'add_new' =>  __('Add New'),
			'add_new_item'  =>  __('Add New Career'),
			'edit'  =>  __('Edit'),
			'edit_item' =>  __('Edit Career'),
			'new_item'  =>  __('New Career'),
			'view'  =>  __('View Career'),
			'view_item' =>  __('View Career'),
			'search_items' =>  __('Search Career'),
			'not_found' =>  __('No Career found'),
			'not_found_in_trash'  =>  __('No Career found in Trash')
		);
		
		$args = array(
			'labels' => $label,
			'public'  =>  true,
			'show_ui' =>  true,
			'publicy_queryable' =>  true,
			'exclude_from_search' =>  false,
			'menu_position' => 5,
			'hierarchical'  => true,
			'query_var' =>  true,
			'supports'  =>  array(
				'title', 'editor', 'comments', 'author', 'excerpt', 'thumbnail',
				'custom-fields'
			),
			'rewrite' =>  array('slug'  =>  'recruitment', 'with_front' =>  false),
			'taxonomies' =>  array('post_tag', 'category'),
			'can_export'  =>  true,
			//'register_meta_box_cb'  =>  'call_to_function_do_something',
			'description' =>  __('Career description here.')
		);
		register_post_type('career', $args);
		flush_rewrite_rules();
	}
	add_action('init', 'create_career_post_type');
?>

<?
	add_filter ('__after_header', 'qtrans_lang_chooser');
	function qtrans_lang_chooser() {
		if (function_exists('qtrans_generateLanguageSelectCode')) {
			ob_start();
			echo qtrans_generateLanguageSelectCode('image');
			$output = ob_get_contents();
			ob_end_clean();
			echo $output;
		}
	}
?>

<?php
	if(function_exists('register_sidebar')){
		register_sidebar(array('name' =>'sidebar',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
			'before_widget' => "<div class='boxes'>",
			'after_widget' => '</div>'
		));
	}
?>

<?php 
	add_action('admin_menu','remove_default_post_type');

	function remove_default_post_type() {
		remove_menu_page('edit.php');
	}
?>

<?php
//	function remove_parent_templates() {
	//remove_template( array( "competitive_cost.php", "flexible_progress.php", "scalable_resource_pool.php" ) );
//}
	/* function be_remove_genesis_page_templates( $page_templates ) {
		unset( $page_templates['news.php'] );
		unset( $page_templates['flexible_progress.php'] );
		unset( $page_templates['scalable_resource_pool.php'] );
		return $page_templates;
	}
	add_filter( 'theme_page_templates', 'be_remove_genesis_page_templates' ); */
?>

<?php 
if ( ! function_exists( 'wplift_pagination' ) ) { 
	function wplift_pagination() { 
		global $wp_query; 
		$big = 999999999;
		//echo get_pagenum_link( $big ) ;
		echo '<div class="pager">'; 
		echo paginate_links( array( 
			'base' =>'%_%',
			'format' => '?paged=%#%',
			'prev_text'    => __('<<'),
			'next_text'    => __('>>'),
			'current' => max( 1, get_query_var('paged') ), 
			'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>',
			'total' => $wp_query->max_num_pages ) ); 
		
		echo '</div>'; 
		} 
	}
?>