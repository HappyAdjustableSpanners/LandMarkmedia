<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/LandMarkmedia/user/themes/x-corporation/blueprints/modular/home_contact.yaml',
    'modified' => 1517567390,
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
                        'page' => [
                            'type' => 'tab',
                            'title' => 'Text',
                            'fields' => [
                                'header.subheading' => [
                                    'type' => 'text',
                                    'title' => 'subheading',
                                    'label' => 'subheading'
                                ],
                                'header.address' => [
                                    'type' => 'editor',
                                    'title' => 'address',
                                    'label' => 'address'
                                ],
                                'header.email' => [
                                    'type' => 'text',
                                    'title' => 'email',
                                    'label' => 'email'
                                ],
                                'header.phone' => [
                                    'type' => 'text',
                                    'title' => 'phone',
                                    'label' => 'phone'
                                ],
                                'header.facebookurl' => [
                                    'type' => 'text',
                                    'title' => 'Facebook URL',
                                    'label' => 'Facebook URL'
                                ],
                                'header.twitterurl' => [
                                    'type' => 'text',
                                    'title' => 'Twitter URL',
                                    'label' => 'Twitter URL'
                                ],
                                'header.linkedinurl' => [
                                    'type' => 'text',
                                    'title' => 'LinkedIn URL',
                                    'label' => 'LinkedIn URL'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
