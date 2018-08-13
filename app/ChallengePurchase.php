<?php

namespace KetoBootstrap;

use Illuminate\Database\Eloquent\Model;

class ChallengePurchase extends Model
{
    protected $fillable = [
    	'user_id', 'challenge_id', 'amount'
    ];

    public function user()
    {
    	return $this->belongsTo('KetoBootstrap\User');
    }

    public function challenge()
    {
    	return $this->belongsTo('KetoBootstrap\Challenge');
    }
}
