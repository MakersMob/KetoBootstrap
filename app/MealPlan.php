<?php

namespace KetoBootstrap;

use Illuminate\Database\Eloquent\Model;
use KetoBootstrap\Services\Markdowner;

class MealPlan extends Model
{
    protected $fillable = [
    	'title', 'description',
    ];

    public function recipes()
    {
    	return $this->belongsToMany('KetoBootstrap\Recipe')->withPivot('day', 'week', 'meal', 'servings');
    }

    public function setDescriptionAttribute($value)
    {
    	$markdown = new Markdowner();

    	$this->attributes['description'] = $markdown->toHTML($value);
    }
}
