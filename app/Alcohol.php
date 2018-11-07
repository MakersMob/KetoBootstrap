<?php

namespace KetoBootstrap;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Alcohol extends Model
{
	use Sluggable, Searchable;

	protected $fillable = [
		'name', 'net_carbs', 'calories', 'description', 'slug', 'type'
	];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
