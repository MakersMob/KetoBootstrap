<?php

namespace KetoBootstrap;

use Illuminate\Database\Eloquent\Model;
use KetoBootstrap\Services\Markdowner;

class Instruction extends Model
{
    protected $fillable = [
    	'recipe_id', 'description', 'image', 'order'
    ];

    public function recipe()
    {
    	return $this->belongsTo('KetoBootstrap\Recipe');
    }
}
