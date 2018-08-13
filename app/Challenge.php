<?php

namespace KetoBootstrap;

use Illuminate\Database\Eloquent\Model;
use KetoBootstrap\Services\Markdowner;
use Cviebrock\EloquentSluggable\Sluggable;

class Challenge extends Model
{
	use Sluggable;
	
    protected $fillable = [
    	'name', 'description', 'slug', 'video', 'start_email_form', 'restart_email_form', 'days'
    ];

    public function days()
    {
    	return $this->hasMany('KetoBootstrap\ChallengeDay');
    }

    public function purchases()
    {
    	return $this->hasMany('KetoBootstrap\ChallengePurchase');
    }

    public function users()
    {
    	return $this->belongsToMany('KetoBootstrap\User')->withPivot('complete', 'completed_on')->withTimestamps();
    }

    public function wins()
    {
        return $this->hasMany('KetoBootstrap\Win');
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