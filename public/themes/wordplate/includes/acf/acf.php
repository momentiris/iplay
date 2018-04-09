<?php

declare(strict_types=1);

$fields = [
    acf_image(['name' => 'image', 'label' => 'Image']),
    acf_text(['name' => 'title', 'label' => 'Title']),
];

$location = [
    [
        acf_location('post_type', 'page')
    ],
];

acf_field_group([
    'title' => 'Home',
    'fields' => $fields,
    'style' => 'seamless',
    'location' => $location,
]);
