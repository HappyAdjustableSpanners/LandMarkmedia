<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/LandMarkmedia/user/themes/x-corporation/blueprints/modular/about_about.yaml',
    'modified' => 1517562371,
    'data' => [
        'title' => 'About',
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
                            'title' => 'About',
                            'fields' => [
                                'header.heading1' => [
                                    'type' => 'text',
                                    'title' => 'Heading1',
                                    'label' => 'Heading1'
                                ],
                                'header.text1' => [
                                    'type' => 'editor',
                                    'title' => 'text1',
                                    'label' => 'text1'
                                ],
                                'header.heading2' => [
                                    'type' => 'text',
                                    'title' => 'Heading2',
                                    'label' => 'Heading2'
                                ],
                                'header.text2' => [
                                    'type' => 'editor',
                                    'title' => 'text2',
                                    'label' => 'text2'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
