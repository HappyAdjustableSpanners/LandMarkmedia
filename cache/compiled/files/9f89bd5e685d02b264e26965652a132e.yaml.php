<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/LandMarkmedia/user/themes/x-corporation/blueprints/modular/about.yaml',
    'modified' => 1517473116,
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
                        'columns' => [
                            'type' => 'tab',
                            'title' => 'THEME_X_CORPORATION.ADMIN.COLUMNS.LABEL',
                            'fields' => [
                                'header.columns' => [
                                    'name' => 'columns',
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'THEME_X_CORPORATION.ADMIN.COLUMNS.LABEL',
                                    'fields' => [
                                        '.content' => [
                                            'type' => 'textarea',
                                            'rows' => 5,
                                            'label' => 'THEME_X_CORPORATION.ADMIN.CONTENT.LABEL',
                                            'help' => 'THEME_X_CORPORATION.ADMIN.CONTENT.HELP'
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
