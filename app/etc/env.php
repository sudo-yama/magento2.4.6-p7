<?php
return [
    'backend' => [
        'frontName' => 'backend'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'QWr8BQ3YAnIETiql6wNajzZjB208oXV2'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'e7d_'
            ],
            'page_cache' => [
                'id_prefix' => 'e7d_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '840e3c092da08b7c4a9fa4fecb0a4203'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => '',
                'dbname' => '',
                'username' => '',
                'password' => 'password1',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'production',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'www.i-heng.store'
    ],
    'install' => [
        'date' => 'Fri, 06 Sep 2024 15:17:05 +0000'
    ]
];
