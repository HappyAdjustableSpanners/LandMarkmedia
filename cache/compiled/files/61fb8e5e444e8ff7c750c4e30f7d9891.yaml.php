<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/LandMarkmedia/user/themes/x-corporation/blueprints/blog.yaml',
    'modified' => 1517562371,
    'data' => [
        'title' => 'Blog',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'child_type' => 'item',
        'rules' => [
            'slug' => [
                'pattern' => '[a-z][a-z0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.child_type' => [
                                            'default' => 'item'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Blog List',
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
                                'header.heading' => [
                                    'type' => 'text',
                                    'title' => 'Heading',
                                    'label' => 'heading'
                                ],
                                'header.subheading' => [
                                    'type' => 'text',
                                    'title' => 'Subheading',
                                    'label' => 'subheading'
                                ],
                                'header.content.items' => [
                                    'type' => 'textarea',
                                    'yaml' => true,
                                    'label' => 'Items',
                                    'default' => '@self.children'
                                ],
                                'header.content.limit' => [
                                    'type' => 'text',
                                    'label' => 'Max Item Count',
                                    'default' => 5,
                                    'validate' => [
                                        'required' => true,
                                        'type' => 'int',
                                        'min' => 1
                                    ]
                                ],
                                'header.content.order.by' => [
                                    'type' => 'select',
                                    'label' => 'Order By',
                                    'default' => 'date',
                                    'options' => [
                                        'folder' => 'Folder',
                                        'title' => 'Title',
                                        'date' => 'Date',
                                        'default' => 'Default'
                                    ]
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'select',
                                    'label' => 'Order',
                                    'default' => 'desc',
                                    'options' => [
                                        'asc' => 'Ascending',
                                        'desc' => 'Descending'
                                    ]
                                ],
                                'header.content.pagination' => [
                                    'type' => 'toggle',
                                    'label' => 'Pagination',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.content.url_taxonomy_filters' => [
                                    'type' => 'toggle',
                                    'label' => 'URL Taxonomy Filters',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
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
        ]
    ]
];
