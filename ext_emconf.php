<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Fluid Styled Content',
    'description' => 'A set of common content elements based on Fluid for Frontend output.',
    'category' => 'fe',
    'state' => 'stable',
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'version' => '9.2.2',
    'constraints' => [
        'depends' => [
            'typo3' => '9.2.2',
            'fluid' => '9.2.2',
            'frontend' => '9.2.2',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
