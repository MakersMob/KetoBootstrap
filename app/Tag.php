<?php

namespace KetoBootstrap;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tag extends Model
{
	use Sluggable;

    protected $fillable = [
    	'tag', 'slug',
    ];

    public function recipes()
    {
    	return $this->belongsToMany('KetoBootstrap\Recipe');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'tag'
            ]
        ];
    }
}
