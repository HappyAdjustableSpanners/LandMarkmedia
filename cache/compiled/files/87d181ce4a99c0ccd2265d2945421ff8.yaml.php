<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/themes/x-corporation/blueprints/modular/home_team.yaml',
    'modified' => 1517322691,
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
                                'header.title' => [
                                    'type' => 'text',
                                    'title' => 'title',
                                    'label' => 'title'
                                ],
                                'header.subheading' => [
                                    'type' => 'text',
                                    'title' => 'Subheading',
                                    'label' => 'Subheading'
                                ],
                                'header.team' => [
                                    'type' => 'list',
                                    'title' => 'Team',
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
                                        '.name' => [
                                            'type' => 'text',
                                            'title' => 'name',
                                            'label' => 'name'
                                        ],
                                        '.position' => [
                                            'type' => 'text',
                                            'title' => 'position',
                                            'label' => 'position'
                                        ],
                                        '.description' => [
                                            'type' => 'text',
                                            'title' => 'description',
                                            'label' => 'description'
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