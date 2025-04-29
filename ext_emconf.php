<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Skip to content',
    'description' => 'TYPO3 extension to include the accessibility functions: skip to content and skip to footer',
    'category' => 'template',
    'author' => 'Kevin Chileong Lee',
    'author_email' => 'kevin.lee@wacon.de',
    'author_company' => 'WACON Internet GmbH',
    'state' => 'stable',
    'version' => '1.2.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Wacon\\SkipToContent\\' => 'Classes'
        ]
    ],
];
