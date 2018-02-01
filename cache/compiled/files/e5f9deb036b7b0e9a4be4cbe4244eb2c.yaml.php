<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/LandMarkmedia/user/themes/x-corporation/blueprints/modular/blog_blog.yaml',
    'modified' => 1517473116,
    'data' => [
        'title' => 'Blog',
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
                            'title' => 'Blog',
                            'fields' => [
                                'header.posts' => [
                                    'type' => 'list',
                                    'title' => 'posts',
                                    'fields' => [
                                        '.author' => [
                                            'type' => 'text',
                                            'title' => 'author',
                                            'label' => 'author'
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
                                        ],
                                        '.heading' => [
                                            'type' => 'text',
                                            'title' => 'Heading',
                                            'label' => 'Heading'
                                        ],
                                        '.text' => [
                                            'type' => 'editor',
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
        ]
    ]
];
