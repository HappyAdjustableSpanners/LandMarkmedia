<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/themes/x-corporation/blueprints.yaml',
    'modified' => 1516701246,
    'data' => [
        'name' => 'X-Corporation',
        'description' => 'Grav Theme based on X-Corporation HTML theme of uiCookies.',
        'version' => '1.1.2',
        'icon' => 'briefcase',
        'author' => [
            'name' => 'Hung Tran',
            'email' => 'hungtran@peaceofmindwebsite.com',
            'url' => 'http://www.peaceofmindwebsite.com'
        ],
        'homepage' => 'https://github.com/tranduyhung/grav-theme-x-corporation',
        'demo' => 'http://www.peaceofmindwebsite.com/skeletons/x-corporation',
        'keywords' => 'corporate, corporation, theme, template, bootstrap, responsive, html5, uicookies, business, agency, lightweight, fast, company, tech startup, consultancy, firm, creative, studio,',
        'bugs' => 'https://github.com/tranduyhung/grav-theme-x-corporation/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'logo' => [
                    'type' => 'filepicker',
                    'folder' => 'theme@:/img',
                    'preview_images' => true,
                    'acccept' => [
                        0 => '.png',
                        1 => '.jpg',
                        2 => '.gif'
                    ],
                    'label' => 'THEME_X_CORPORATION.ADMIN.LOGO.LABEL',
                    'help' => 'THEME_X_CORPORATION.ADMIN.LOGO.HELP'
                ],
                'copyright' => [
                    'type' => 'textarea',
                    'label' => 'THEME_X_CORPORATION.ADMIN.COPYRIGHT_TEXT.LABEL',
                    'help' => 'THEME_X_CORPORATION.ADMIN.COPYRIGHT_TEXT.HELP'
                ],
                'google_maps_api_key' => [
                    'type' => 'text',
                    'label' => 'THEME_X_CORPORATION.ADMIN.GOOGLE_MAPS_API_KEY.LABEL',
                    'help' => 'THEME_X_CORPORATION.ADMIN.GOOGLE_MAPS_API_KEY.HELP'
                ],
                'footer_icons' => [
                    'type' => 'list',
                    'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_ICONS.LABEL',
                    'help' => 'THEME_X_CORPORATION.ADMIN.FOOTER_ICONS.HELP',
                    'style' => 'vertical',
                    'fields' => [
                        '.icon' => [
                            'type' => 'text',
                            'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_ICONS.ICON.LABEL',
                            'placeholder' => 'THEME_X_CORPORATION.ADMIN.FOOTER_ICONS.ICON.HELP'
                        ],
                        '.url' => [
                            'type' => 'text',
                            'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_ICONS.URL.LABEL',
                            'placeholder' => 'THEME_X_CORPORATION.ADMIN.FOOTER_ICONS.URL.HELP'
                        ]
                    ]
                ],
                'footer_blocks' => [
                    'type' => 'list',
                    'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.LABEL',
                    'help' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.DESC',
                    'style' => 'vertical',
                    'fields' => [
                        '.title' => [
                            'type' => 'text',
                            'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.TITLE.LABEL',
                            'placeholder' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.TITLE.HELP'
                        ],
                        '.content' => [
                            'type' => 'textarea',
                            'rows' => 5,
                            'label' => 'THEME_X_CORPORATION.ADMIN.CONTENT.LABEL',
                            'placeholder' => 'THEME_X_CORPORATION.ADMIN.CONTENT.HELP'
                        ],
                        '.logo' => [
                            'type' => 'toggle',
                            'toggleable' => false,
                            'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.LOGO.LABEL',
                            'help' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.LOGO.HELP',
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        '.icons' => [
                            'type' => 'toggle',
                            'toggleable' => false,
                            'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.ICONS.LABEL',
                            'help' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.ICONS.HELP',
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];