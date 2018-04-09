<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('superuser', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Superuser'),
            'edit_item' => __('Edit Superuser'),
            'name' => __('Superusers'),
            'search_items' => __('Search Superusers'),
            'singular_name' => __('Superuser'),
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 5,
        'public' => true,
    ]);
});
