<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/themes/x-corporation/blueprints/modular/about_custom.yaml',
    'modified' => 1517310534,
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
                            'title' => 'Text',
                            'fields' => [
                                'header.text' => [
                                    'type' => 'text',
                                    'title' => 'text',
                                    'label' => 'text'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
