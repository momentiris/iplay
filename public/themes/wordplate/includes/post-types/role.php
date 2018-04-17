<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('role', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Role'),
            'edit_item' => __('Edit Role'),
            'name' => __('Roles'),
            'search_items' => __('Search Roles'),
            'singular_name' => __('Role'),
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 6,
        'public' => true,
    ]);
});
