<?php

/*
 * Copyright (c) 2023 яαvoroηα
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of
 *  this software and associated documentation files (the "Software"), to deal in
 *  the Software without restriction, including without limitation the rights to
 *  use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 *  the Software, and to permit persons to whom the Software is furnished to do so,
 *  subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 *  FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *  COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 *  IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 *  CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace App;
add_action('init', function() {
    // Portfolio Images
    register_post_type('portfolio_image', [
        'supports' => ['title', 'thumbnail'],
        'public' => true,
        'has_archive' => true,
        'labels' => [
            'name' => __('Portfolio Images', 'mimir'),
            'add_new_item' => __('Add New Portfolio Image', 'mimir'),
            'edit_item' => __('Edit Portfolio Image', 'mimir'),
            'all_items' => __('All Portfolio Images', 'mimir'),
            'singular_name' => __('Portfolio Image', 'mimir'),
        ],
        'menu_icon' => 'dashicons-format-gallery'
    ]);
    
    register_taxonomy('portfolio_category', 'portfolio_image', [
        'label' => __('Portfolio Categories', 'mimir'),
        'rewrite' => ['slug' => 'portfolio_category'],
        'hierarchical' => true,
        'show_admin_column' => true
    ]);
    
    // Dog Pedigree
    register_post_type('dog_pedigree', [
        'supports' => ['title'],
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'labels' => [
            'name' => __('Dog Pedigrees', 'mimir'),
            'add_new_item' => __('Add New Dog Pedigree', 'mimir'),
            'edit_item' => __('Edit Dog Pedigree', 'mimir'),
            'all_items' => __('All Dog Pedigrees', 'mimir'),
            'singular_name' => __('Dog Pedigree', 'mimir')
        ],
        'menu_icon' => 'dashicons-pets'
    ]);

    register_taxonomy('dog_breed', 'dog_pedigree', [
        'label' => __('Dog Breed', 'mimir'),
        'rewrite' => ['slug' => 'dog_breed'],
        'hierarchical' => true
    ]);

    register_taxonomy('dog_titles', 'dog_pedigree', [
        'label' => __('Dog Titles', 'mimir'),
        'rewrite' => ['slug' => 'dog_titles'],
        'hierarchical' => true
    ]);

    // Upcoming Events
    register_post_type('upcoming_events', [
        'map_meta_cap' => true,
        'supports' => ['title'],
        'rewrite' => ['slug' => 'events'],
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'labels' => [
            'name' => __('Upcoming Events', 'mimir'),
            'add_new_item' => __('Add New Event', 'mimir'),
            'edit_item' => __('Edit Event', 'mimir'),
            'all_items' => __('All Events', 'mimir'),
            'singular_name' => __('Upcoming Event', 'mimir')
        ],
        'menu_icon' => 'dashicons-calendar'
    ]);
});

// Remove comments
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});
