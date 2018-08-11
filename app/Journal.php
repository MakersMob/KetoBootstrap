<?php

namespace KetoBootstrap;

use Illuminate\Database\Eloquent\Model;
use KetoBootstrap\Services\Markdowner;

class Journal extends Model
{
    protected $fillable = [
    	'entry', 'entry_date', 'user_id',
    ];

    public function user()
    {
    	return $this->belongsTo('KetoBootstrap\User');
    }

    public function setEntryAttribute($value)
    {
    	$markdown = new Markdowner();

    	$this->attributes['entry'] = $markdown->toHTML($value);
    }
}
