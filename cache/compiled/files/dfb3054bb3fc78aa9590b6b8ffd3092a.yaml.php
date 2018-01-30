<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav-admin/user/themes/x-corporation/blueprints/modular/contact.yaml',
    'modified' => 1516806219,
    'data' => [
        'title' => 'Contact',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'contact' => [
                            'type' => 'tab',
                            'title' => 'Contact',
                            'fields' => [
                                'header.address' => [
                                    'type' => 'editor',
                                    'title' => 'Address',
                                    'label' => 'Address'
                                ],
                                'header.contactdetails' => [
                                    'type' => 'text',
                                    'title' => 'Contact Details',
                                    'label' => 'Contact Details'
                                ],
                                'header.subheading' => [
                                    'type' => 'text',
                                    'title' => 'Subheading',
                                    'label' => 'Subheading'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
