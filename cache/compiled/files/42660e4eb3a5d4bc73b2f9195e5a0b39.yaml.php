<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/LandMarkmedia/user/themes/x-corporation/blueprints/modular/hero-image.yaml',
    'modified' => 1517473116,
    'data' => [
        'title' => 'Hero-Image',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'map' => [
                            'type' => 'tab',
                            'title' => 'Image',
                            'fields' => [
                                '.image' => [
                                    'type' => 'filepicker',
                                    'preview_images' => true,
                                    'acccept' => [
                                        0 => '.png',
                                        1 => '.jpg',
                                        2 => '.gif'
                                    ],
                                    'label' => 'Image'
                                ],
                                'header.heading' => [
                                    'type' => 'text',
                                    'title' => 'Heading',
                                    'label' => 'heading'
                                ],
                                'header.subheading' => [
                                    'type' => 'text',
                                    'title' => 'Subheading',
                                    'label' => 'subheading'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
