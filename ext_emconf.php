<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Fluid Styled Content',
    'description' => 'A set of common content elements based on Fluid for Frontend output.',
    'category' => 'fe',
    'state' => 'stable',
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'version' => '10.4.21',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.21',
            'fluid' => '10.4.21',
            'frontend' => '10.4.21',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
