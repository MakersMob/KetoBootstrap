<?php

namespace KetoBootstrap;

use Illuminate\Database\Eloquent\Model;
use KetoBootstrap\Services\Markdowner;

class Win extends Model
{
    protected $fillable = [
    	'win', 'user_id',
    ];

    public function user()
    {
    	return $this->belongsTo('KetoBootstrap\User');
    }

    public function challenge()
    {
    	return $this->belongsTo('KetoBootstrap\Challenge');
    }

    public function setWinAttribute($value)
    {
    	$markdown = new Markdowner();

    	$this->attributes['win'] = $markdown->toHTML($value);
    }
}
