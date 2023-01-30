<?php
/*Enque styles and scripts */

if (!function_exists('bootstrap_theme_setup')) {

    function bootstrap_theme_setup()
    {
        load_theme_textdomain('bootstraptheme', get_template_directory() . '/languages');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
        add_theme_support(
            'customize-selective-refresh-widgets'
        );
        add_theme_support(
            'responsive-embeds'
        );
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'bootstrap'),
        ));
        add_theme_support('custom-logo', array(
            'height'      => 60,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        ));
    }
}

add_action('after_setup_theme', 'bootstrap_theme_setup');

function bootstrap_assets()
{

    /*css */
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('boostrap', get_theme_file_uri('assets/css/bootstrap.min.css'), array(), filemtime(get_template_directory() . '/assets/css/bootstrap.min.css'), 'all');
    wp_enqueue_style('flaticon', get_theme_file_uri('assets/font/flaticon.css'), array(), false, 'all');

    // Main CSS File
    wp_enqueue_style('bootstrap2wordpress', get_stylesheet_uri(), array(), '1.0', 'all');

    /*js*/

    wp_enqueue_script('bootstrap-js', get_theme_file_uri('assets/js/bootstrap.min.js'), array(), false, true);
    wp_enqueue_script('main-js', get_theme_file_uri('assets/js/main-script.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectmenu', true), '1.0', true);


    // Threaded comment reply styles.
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'bootstrap_assets');


function bootstrap_change_read_more($more)
{
    return ' ...';
}

add_filter('excerpt_more', 'bootstrap_change_read_more');

/* Custom pagination */

function bootstrap_pagination()
{

    global $wp_query;
    $links = paginate_links(
        array(
            'current'   => max(1, get_query_var('paged')),
            'total'     => $wp_query->max_num_pages,
            'type'      => 'list',
            'prev_text' => '<-',
            'next_text' =>  '->'
        )
    );
    $links = '<nav class="b2w-pagination">' . $links;
    $links .= '</nav>';
    echo wp_kses_post($links);
}
