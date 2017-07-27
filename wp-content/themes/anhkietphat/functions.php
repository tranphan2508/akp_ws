<?php

/**
 * @ Khai bao hang gia tri
 *      @ THEME_URL = lay duong dan theme
 *      @ CORE = lay duong dan thu muc /core
 */
define('THEME_URL', get_stylesheet_directory_uri());
define('CORE', THEME_URL . '/core');

/**
 * Nhung fiile /core/init.php
 */
//require_once( CORE . '/init.php' );

/**
 * Thiet lap chieu rong noi dung
 */
if (!isset($content_width)) {
    /*
     * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
     */
    $content_width = 620;
}

/**
 * Khai bao chuc nang cua theme
 */
if (!function_exists('theme_setup')) {


    function theme_setup()
    {
        /* Thiet lap textdomain */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('anhkietphat', $language_folder);

        /* Tu dong them link RSS len <head> */
        add_theme_support('automatic-feed-links');

        /* Them post thumnail */
        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        add_theme_support('post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ));

        /* Them custom background */
        $default_background = array('default-color' => '#e8e8e8');
        add_theme_support('custom-background', $default_background);

        /* Them menu */
        register_nav_menu('primary-menu', __('Primary Menu', 'anhkietphat'));

        /* Tao sidebar */
        $sidebar = array(
            'name' => __('Main Sidebar', 'anhkietphat'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar'),
            'class' => 'main-sidebar',
            'before_title' => '',
            'after_title' => ''
        );
        register_sidebar($sidebar);


    }

    add_action('init', 'theme_setup');

}

/*------------------
TEMPLATE FUNCTION
*/
if (!function_exists('site_name_header')) {
    function site_name_header()
    {
        ?>
        <div class="site-name">
            <?php
            if (is_home()) {
                printf('<h1><a href="%1$s" title="%2$s">%3$s</h1>', get_bloginfo('url'), get_bloginfo('description'), get_bloginfo('sitename'));
            } else {
                printf('<p><a href="%1$s" title="%2$s">%3$s</p>', get_bloginfo('url'), get_bloginfo('description'), get_bloginfo('sitename'));
            }
            ?>
        </div>
    <?php

    }
}
/*
 * Active menu when display detail content of post
 */
function my_special_nav_class($classes, $item)
{
    // Getting the current post details
    global $post;

    // Getting the post type of the current post
    $current_post_type = get_post_type_object(get_post_type($post->ID));
    $current_post_type_slug = $current_post_type->rewrite[slug];

    // Getting the URL of the menu item
    $menu_slug = strtolower(trim($item->url));

    // If the menu item URL contains the current post types slug add the current-menu-item class
    if (strpos($menu_slug, $current_post_type_slug) !== false) {
        $classes[] = 'current_page_item ';
    }

    // Return the corrected set of classes to be added to the menu item
    return $classes;
}

add_filter('nav_menu_css_class', 'my_special_nav_class', 10, 2);

/*
 * load theme css
 */
if (!function_exists('theme_scripts')) {
    function theme_scripts()
    {
        wp_enqueue_style('responsive_css', THEME_URL . "/css/responsive.css");
        wp_enqueue_style('bootstrap_css', THEME_URL . "/css/bootstrap.min.css");
        wp_enqueue_style('projects_css', THEME_URL . "/css/projects.css");
        wp_enqueue_script('jquery_js', THEME_URL . '/js/jquery.min.js');
        wp_enqueue_script('bootstrap_js', THEME_URL . '/js/bootstrap.min.js');
        wp_enqueue_script('custom_js', THEME_URL . '/js/custom.js');
    }

    add_action('wp_enqueue_scripts', 'theme_scripts');
}
wp_enqueue_style('style', get_stylesheet_uri());

/*
 * pagination
 */
if (!function_exists('pagination')) {
    function pagination()
    {
        global $wp_query;
        $big = 12345678;
        $page_format = paginate_links(array(
            //'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'prev_text'    => __('<<'),
            'next_text'    => __('>>'),
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'type' => 'array'
        ));
        if (is_array($page_format)) {
            $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
            echo '<div class="pagination row text-center"><div><ul>';
            echo '<li><span>' . $paged . ' of ' . $wp_query->max_num_pages . '</span></li>';
            foreach ($page_format as $page) {
                echo "<li>$page</li>";
            }
            echo '</ul></div></div>';
        }
    }
}

/*
 * remove default post type
 */
if (!function_exists('remove_default_post_type')) {

    function remove_default_post_type()
    {
        remove_menu_page('edit.php');
    }

    add_action('admin_menu', 'remove_default_post_type');
}

/*
 * Create new post type (projects type)
 */
if (!function_exists('create_projects_post_type')) {
    function create_projects_post_type()
    {
        $label = array(
            'name' => _('Projects'),
            'singular_name' => __('Projects'),
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New Project'),
            'edit' => __('Edit'),
            'edit_item' => __('Edit Project'),
            'new_item' => __('New Project'),
            'view' => __('View Project'),
            'view_item' => __('View Project'),
            'search_items' => __('Search Projects'),
            'not_found' => __('No Projects found'),
            'not_found_in_trash' => __('No Projects found in Trash')
        );

        $args = array(
            'labels' => $label,
            'public' => true,
            'show_ui' => true,
            'publicy_queryable' => true,
            'exclude_from_search' => false,
            'menu_position' => 5,
            'hierarchical' => true,
            'query_var' => true,
            'supports' => array(
                'title', 'editor', 'comments', 'author', 'excerpt', 'thumbnail',
                'custom-fields'
            ),
            'rewrite' => array('slug' => 'du-an', 'with_front' => false),
            'taxonomies' => array('post_tag', 'category'),
            'can_export' => true,
            //'register_meta_box_cb'  =>  'call_to_function_do_something',
            'description' => __('Projects description here.')
        );
        register_post_type('projects', $args);
        flush_rewrite_rules();
    }

    add_action('init', 'create_projects_post_type');
}

/*
 * Create new post type (news type)
 */
if (!function_exists('create_news_post_type')) {
    function create_news_post_type()
    {
        $label = array(
            'name' => _('News'),
            'singular_name' => __('News'),
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New News'),
            'edit' => __('Edit'),
            'edit_item' => __('Edit News'),
            'new_item' => __('New News'),
            'view' => __('View News'),
            'view_item' => __('View News'),
            'search_items' => __('Search News'),
            'not_found' => __('No News found'),
            'not_found_in_trash' => __('No News found in Trash')
        );

        $args = array(
            'labels' => $label,
            'public' => true,
            'show_ui' => true,
            'publicy_queryable' => true,
            'exclude_from_search' => false,
            'menu_position' => 5,
            'hierarchical' => true,
            'query_var' => true,
            'supports' => array(
                'title', 'editor', 'comments', 'author', 'excerpt', 'thumbnail',
                'custom-fields'
            ),
            'rewrite' => array('slug' => 'tin-tuc', 'with_front' => false),
            'taxonomies' => array('post_tag', 'category'),
            'can_export' => true,
            //'register_meta_box_cb'  =>  'call_to_function_do_something',
            'description' => __('News description here.')
        );
        register_post_type('news', $args);
        flush_rewrite_rules();
    }

    add_action('init', 'create_news_post_type');
}

/*
 * Create new post type (careers type)
 */
if (!function_exists('create_careers_post_type')) {
    function create_careers_post_type()
    {
        $label = array(
            'name' => _('Careers'),
            'singular_name' => __('Careers'),
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New Career'),
            'edit' => __('Edit'),
            'edit_item' => __('Edit Career'),
            'new_item' => __('New Career'),
            'view' => __('View Career'),
            'view_item' => __('View Career'),
            'search_items' => __('Search Careers'),
            'not_found' => __('No Careers found'),
            'not_found_in_trash' => __('No Careers found in Trash')
        );

        $args = array(
            'labels' => $label,
            'public' => true,
            'show_ui' => true,
            'publicy_queryable' => true,
            'exclude_from_search' => false,
            'menu_position' => 5,
            'hierarchical' => true,
            'query_var' => true,
            'supports' => array(
                'title', 'editor', 'comments', 'author', 'excerpt', 'thumbnail',
                'custom-fields'
            ),
            'rewrite' => array('slug' => 'tuyen-dung', 'with_front' => false),
            'taxonomies' => array('post_tag', 'category'),
            'can_export' => true,
            //'register_meta_box_cb'  =>  'call_to_function_do_something',
            'description' => __('Careers description here.')
        );
        register_post_type('careers', $args);
        flush_rewrite_rules();
    }

    add_action('init', 'create_careers_post_type');
}



