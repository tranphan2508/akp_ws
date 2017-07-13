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
 * Load theme style
 */
if(!function_exists('theme_styles')){
    function theme_styles(){
        wp_enqueue_style('bootstrap_css', THEME_URL.'/css/bootstrap.css');
        wp_enqueue_style('responsive_css', THEME_URL.'/css/responsive.css');

    }
    add_action( 'wp_enqueue_scripts', 'theme_styles' );
}

/*
 * Load theme scripts
 */
if(!function_exists('theme_js')){
    function theme_js(){
        wp_enqueue_script( 'bootstrap_js', THEME_URL.'/js/bootstrap.min.js');
    }
    add_action( 'wp_enqueue_scripts', 'theme_js');
}
