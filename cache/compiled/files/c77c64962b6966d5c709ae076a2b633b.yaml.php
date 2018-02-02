<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/LandMarkmedia/user/themes/x-corporation/blueprints/modular/home_services.yaml',
    'modified' => 1517572693,
    'data' => [
        'title' => 'Services',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'page' => [
                            'type' => 'tab',
                            'title' => 'Text',
                            'fields' => [
                                'header.subheading' => [
                                    'type' => 'text',
                                    'title' => 'Subheading',
                                    'label' => 'Subheading'
                                ],
                                'header.services' => [
                                    'type' => 'list',
                                    'title' => 'Services',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'title' => 'text',
                                            'label' => 'text'
                                        ],
                                        '.image' => [
                                            'type' => 'filepicker',
                                            'preview_images' => true,
                                            'acccept' => [
                                                0 => '.png',
                                                1 => '.jpg',
                                                2 => '.gif'
                                            ],
                                            'label' => 'Image'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
