<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

// Remove "Home /" from WooCommerce breadcrumb
add_filter('woocommerce_get_breadcrumb', function ($breadcrumb) {
    if(!is_page('shop')) {
        // Check if the breadcrumb array contains the "Home" element
        if (isset($breadcrumb[0]) && $breadcrumb[0][0] === __('Home', 'woocommerce')) {
            // Remove the "Home" element from the breadcrumb array
            array_shift($breadcrumb);
        }
    
        return $breadcrumb;
    }
});

// Home -> Webbshop
add_filter('woocommerce_get_breadcrumb', function ($crumbs, $breadcrumb) {
    // Replace "shop" with the slug of the desired page
    $shop_page = get_page_by_path('shop');

    if ($shop_page) {
        $crumbs[0][0] = __('Webbshop', 'woocommerce');
        $crumbs[0][1] = get_permalink($shop_page->ID);
    }

    return $crumbs;
}, 10, 2);