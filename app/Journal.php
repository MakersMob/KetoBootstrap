<?php

namespace KetoBootstrap;

use Illuminate\Database\Eloquent\Model;
use KetoBootstrap\Services\Markdowner;

class Journal extends Model
{
    protected $fillable = [
    	'challenge_id', 'entry_date', 'user_id', 'wins', 'hiccups', 'food', 'weight', 'sleep', 'waist', 'hips', 'thighs', 'butt', 'chest', 'arms', 'emotions'
    ];

    public function user()
    {
    	return $this->belongsTo('KetoBootstrap\User');
    }

    public function challenge()
    {
        return $this->belongsTo('KetoBootstrap\Challenge');
    }

    public function setEmotionsAttribute($value)
    {
    	$markdown = new Markdowner();

    	$this->attributes['emotions'] = $markdown->toHTML($value);
    }

    public function setWinsAttribute($value)
    {
        $markdown = new Markdowner();

        $this->attributes['wins'] = $markdown->toHTML($value);
    }

    public function setHiccupsAttribute($value)
    {
        $markdown = new Markdowner();

        $this->attributes['hiccups'] = $markdown->toHTML($value);
    }

    public function setFoodAttribute($value)
    {
        $markdown = new Markdowner();

        $this->attributes['food'] = $markdown->toHTML($value);
    }
}
