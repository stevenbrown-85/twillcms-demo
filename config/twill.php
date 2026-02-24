<?php

return [
    'block_editor' => [
        'use_twill_blocks' => [],
        'crops' => [ 
            'default_social_image' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 1.91 / 1,
                        'minValues' => [
                            'width' => 1200,
                            'height' => 627,
                        ],
                    ],
                ],
            ],
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
