<?php

return [
    'rooms' => [
        [   
            'id' => 1,
            'name' => 'Lakosztály',
            'description' => '2-4 vendég',
            'price' => '50.000-tól',
            'image' => [
                'name' => 'lakosztaly',
                'alt' => 'Lakosztály',
                'title' => 'Lakosztály'
            ],
            'route' => 'pages.suite',
            'href' => 'lakosztaly',
            'label' => 1,
        ],
        [
            'id' => 2,
            'name' => 'Szoba',
            'description' => '2 vendég',
            'price' => '35.000-tól',
            'image' => [
                'name' => 'szoba',
                'alt' => 'Szoba',
                'title' => 'Szoba'
            ],
            'route' => 'pages.room',
            'href' => 'szoba',
            'label' => 0,
        ],
    ],
];