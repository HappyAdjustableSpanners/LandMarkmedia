<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/themes/x-corporation/blueprints/modular/services_custom.yaml',
    'modified' => 1516794048,
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
                        'services' => [
                            'type' => 'tab',
                            'title' => 'THEME_X_CORPORATION.ADMIN.SERVICES.LABEL',
                            'fields' => [
                                'header.description' => [
                                    'type' => 'text',
                                    'label' => 'Title'
                                ],
                                'header.services' => [
                                    'name' => 'services',
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'THEME_X_CORPORATION.ADMIN.SERVICES.LABEL',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'THEME_X_CORPORATION.ADMIN.SERVICES.TITLE.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.SERVICES.TITLE.HELP'
                                        ],
                                        '.description' => [
                                            'type' => 'textarea',
                                            'label' => 'THEME_X_CORPORATION.ADMIN.SERVICES.DESCRIPTION.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.SERVICES.DESCRIPTION.HELP'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'THEME_X_CORPORATION.ADMIN.SERVICES.URL.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.SERVICES.URL.HELP'
                                        ],
                                        '.image' => [
                                            'type' => 'filepicker',
                                            'preview_images' => true,
                                            'acccept' => [
                                                0 => '.png',
                                                1 => '.jpg',
                                                2 => '.gif'
                                            ],
                                            'label' => 'THEME_X_CORPORATION.ADMIN.SERVICES.IMAGE.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.SERVICES.IMAGE.HELP'
                                        ],
                                        '.points' => [
                                            'name' => 'points',
                                            'type' => 'list',
                                            'style' => 'vertical',
                                            'label' => 'Bullet points',
                                            'fields' => [
                                                '.text' => [
                                                    'type' => 'text',
                                                    'label' => 'Bullet point'
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
        ]
    ]
];
