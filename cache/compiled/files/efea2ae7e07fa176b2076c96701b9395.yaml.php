<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/LandMarkmedia/user/themes/x-corporation/blueprints/modular/team_team.yaml',
    'modified' => 1517579748,
    'data' => [
        'title' => 'Team',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'members' => [
                            'type' => 'tab',
                            'title' => 'THEME_X_CORPORATION.ADMIN.MEMBERS.LABEL',
                            'fields' => [
                                'header.members' => [
                                    'name' => 'members',
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'THEME_X_CORPORATION.ADMIN.MEMBERS.LABEL',
                                    'fields' => [
                                        '.name' => [
                                            'type' => 'text',
                                            'label' => 'THEME_X_CORPORATION.ADMIN.MEMBERS.NAME.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.MEMBERS.NAME.HELP'
                                        ],
                                        '.position' => [
                                            'type' => 'text',
                                            'label' => 'THEME_X_CORPORATION.ADMIN.MEMBERS.POSITION.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.MEMBERS.POSITION.HELP'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'THEME_X_CORPORATION.ADMIN.MEMBERS.URL.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.MEMBERS.URL.HELP'
                                        ],
                                        '.image' => [
                                            'type' => 'filepicker',
                                            'preview_images' => true,
                                            'acccept' => [
                                                0 => '.png',
                                                1 => '.jpg',
                                                2 => '.gif'
                                            ],
                                            'label' => 'THEME_X_CORPORATION.ADMIN.MEMBERS.IMAGE.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.MEMBERS.IMAGE.HELP'
                                        ],
                                        '.description' => [
                                            'type' => 'editor',
                                            'label' => 'Description'
                                        ],
                                        '.facebookurl' => [
                                            'type' => 'text',
                                            'title' => 'Facebook URL',
                                            'label' => 'Facebook URL'
                                        ],
                                        '.twitterurl' => [
                                            'type' => 'text',
                                            'title' => 'twitter URL',
                                            'label' => 'twitter URL'
                                        ],
                                        '.linkedinurl' => [
                                            'type' => 'text',
                                            'title' => 'linkedin URL',
                                            'label' => 'linkedin URL'
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
