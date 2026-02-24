<?php

return [
    'block_editor' => [
        'use_twill_blocks' => [],
        'crops' => [ 
            'textWithImage' => [
                'image' => [
                    [
                        'name' => 'default',
                        'ratio' => 1,
                    ],
                ]
            ],
            'fullWidthImage' => [
                'desktop' => [
                    [
                        'name' => 'landscape',
                        'ratio' => 16 / 9,
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'phone',
                        'ratio' => 45 / 100,
                    ],
                ],
            ],
        ],
    ]
];
