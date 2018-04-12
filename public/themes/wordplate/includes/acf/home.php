<?php

declare(strict_types=1);

$fields = [
    acf_text([
        'name' => 'hero_header',
         'label' => 'Hero header slogan',
         'required' => true,
         'maxlength' => 100,
    ]),
    acf_text([
        'name' => 'under_hero_header',
         'label' => 'Underneath hero header',
         'required' => true,
         'maxlength' => 100,
    ]),
];

$location = [[acf_location('page_template', 'page-templates/home.php')]];

acf_field_group([
  'title' => 'home',
  'fields' => $fields,
  'style' => 'seamless',
  'location' => $location,
  'hide_on_screen' => [0 => 'the_content']
]);
