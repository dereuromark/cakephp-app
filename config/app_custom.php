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
    ],
];
