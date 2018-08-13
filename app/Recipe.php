<?php

namespace KetoBootstrap;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use KetoBootstrap\Services\Markdowner;
use Cviebrock\EloquentSluggable\Sluggable;

class Recipe extends Model
{
    use Sluggable, Searchable;

    protected $fillable = [
		'name', 'description', 'calories', 'protein', 'fat', 'carbs', 'slug', 'servings', 'serving_description', 'pinterest', 'image', 'source'
	];

    public function ingredients()
    {
        return $this->belongsToMany('KetoBootstrap\Ingredient')->withPivot('amount', 'item', 'measurement');
    }

    public function instructions()
    {
        return $this->hasMany('KetoBootstrap\Instruction');
    }

    public function tags()
    {
        return $this->belongsToMany('KetoBootstrap\Tag');
    }

    public function meal_plans()
    {
        return $this->belongsToMany('KetoBootstrap\MealPlan')->withPivot('day', 'week', 'meal', 'servings');
    }

    public function users()
    {
        return $this->belongsToMany('KetoBootstrap\User')->withPivot('category');
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
