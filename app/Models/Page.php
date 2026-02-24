<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;

class Page extends Model 
{
    use HasBlocks, HasSlug, HasMedias, HasRevisions, HasMetadata;

    public \Illuminate\Contracts\Foundation\Application|array|\Illuminate\Config\Repository|\Illuminate\Foundation\Application $metadataFallbacks = [];

    protected $fillable = [
        'published',
        'title',
        'description',
        'banner_pretitle',
        'banner_title',
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
    ];
    
}
