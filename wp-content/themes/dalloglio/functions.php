<?php

function dalloglio_wp_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('css', get_stylesheet_uri());
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', ['jquery'], null, true);
    wp_enqueue_script('matchHeight', get_template_directory_uri() . '/assets/jquery-match-height/dist/jquery.matchHeight-min.js', ['jquery'], null, true);
    wp_enqueue_script('js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true);
}

function register_menu() {
    register_nav_menu('header-menu', __('Menu Principal'));
}

add_action('wp_enqueue_scripts', 'dalloglio_wp_scripts');
add_action( 'init', 'register_menu' );

add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 300, true);

function dalloglio_lastest_posts($post_not_id = [], $posts_per_page = 3)
{
    return new WP_Query(['post_type' => 'post', 'posts_per_page' => $posts_per_page, 'post__not_in' => $post_not_id]);
}

function dalloglio_paginate_links()
{
    global $wp_query;
    $big = 999999999;
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
    $current = max(1, $paged);

    $pagination = paginate_links([
        'current' => $current,
        'total' => $wp_query->max_num_pages,
        'type' => 'array',
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
    ]);

    $links = '';
    if (is_array($pagination)) {
        $links .= '<nav aria-label="Page navigation">';
        $links .= '<ul class="pagination">';
        foreach($pagination as $link) {
            if (strpos($link, 'current') !== false) {
                $links .= '<li class="active">' . $link . '</li>';
            } else {
                $links .= '<li>' . $link . '</li>';
            }
        }
        $links .= '</ul>';
        $links .= '</nav>';
    }
    echo $links;
}
