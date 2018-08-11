<?php

namespace KetoBootstrap;

use Illuminate\Database\Eloquent\Model;
use KetoBootstrap\Services\Markdowner;
use Cviebrock\EloquentSluggable\Sluggable;

class Ingredient extends Model
{
	use Sluggable;

    protected $fillable = [
    	'name', 'slug', 'link', 'image', 'description'
    ];

    public function recipes()
    {
    	return $this->belongsToMany('KetoBootstrap\Recipe')->withPivot('amount');
    }

    public function setDescriptionAttribute($value)
    {
    	$markdown = new Markdowner();

    	$this->attributes['description'] = $markdown->toHTML($value);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
