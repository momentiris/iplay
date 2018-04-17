<?php

declare(strict_types=1);

$fields = [

        acf_text([
            'name' => 'role_name',
             'label' => 'Role',
             'required' => true,
             'maxlength' => 30,
        ]),
        acf_text([
            'name' => 'superuser_sport',
             'label' => 'Sport',
             'maxlength' => 20,
        ]),
        acf_image([
               'name' => 'superuser_image',
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
