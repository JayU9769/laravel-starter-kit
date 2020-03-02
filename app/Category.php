<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Category extends Model implements HasMedia
{
    use Sluggable, HasMediaTrait, SluggableScopeHelpers;

    protected $fillable = [
        'slug',
        'name',
        'type',
        'description',
        'status',
        'parent_id',
        'sequence'
    ];
    /**
     * @inheritDoc
     */
    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
