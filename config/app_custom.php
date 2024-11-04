<?php

return [
    'Datasources' => [
        'default' => [
            'host' => '127.0.0.1',
            'quoteIdentifiers' => true,
        ],
        'test' => [
            'host' => '127.0.0.1',
            'quoteIdentifiers' => true,
        ],
    ],

    'DebugKit' => [
        'safeTld' => ['site'],
    ],

    'IdeHelper' => [
        'arrayAsGenerics' => true,
        'objectAsGenerics' => true,
        'templateCollectionObject' => 'iterable',
        'generatorTasks' => [
            \Templating\Generator\Task\IconRenderTask::class,
        ],
    ],

    'Icon' => [
        'sets' => [
            'fas' => [
                'class' => \Templating\View\Icon\FontAwesome6Icon::class,
                'path' => WWW_ROOT . 'assets/@fortawesome/fontawesome-free/sprites/regular.svg',
            ],
        ],
        'map' => [
            'view' => 'fas:eye',
            'edit' => 'fas:pen-to-square',
        ],
    ],
];
