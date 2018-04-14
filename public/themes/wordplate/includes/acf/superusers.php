<?php

declare(strict_types=1);

$fields = [

        acf_text([
            'name' => 'superuser_name',
             'label' => 'Name',
             'required' => true,
             'maxlength' => 30,
        ]),
        acf_text([
            'name' => 'superuser_quote',
             'label' => 'Quote',
             'maxlength' => 75,
        ]),
        acf_image([
               'name' => 'icon',
               'label' => 'Image',
               // 'required' => true,
               'return_format' => 'url',
             ]),

];

$location = [[acf_location('post_type', 'superuser')]];

acf_field_group([
  'title' => 'superusers',
  'fields' => $fields,
  'style' => 'seamless',
  'location' => $location,
  'hide_on_screen' => [0 => 'the_content']
]);
