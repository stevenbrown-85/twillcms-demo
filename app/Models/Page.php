<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class Page extends Model 
{
    use HasBlocks, HasSlug, HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'description',
        'banner_pretitle',
        'banner_strapline',
    ];
    
    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'banner_image' => [
            'desktop' => [
                [
                    'name' => 'landscape',
                    'ratio' => 128 / 25,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'square',
                    'ratio' => 1 / 1,
                ],
            ],
        ],
    ];
    
}
