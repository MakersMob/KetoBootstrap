<?php

namespace KetoBootstrap;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, Billable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'goals', 'current_weight', 'goal_weight', 'challenge', 'protein', 'carbs', 'fat', 'height', 'age', 'gender', 'join_price',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function journals()
    {
        return $this->hasMany('KetoBootstrap\Journal');
    }

    public function wins()
    {
        return $this->hasMany('KetoBootstrap\Win');
    }

    public function recipes()
    {
        return $this->belongsToMany('KetoBootstrap\Recipe')->withPivot('category', 'slug');
    }

    /*public function weights()
    {
        return $this->hasMany('KetoBootstrap\Weight');
    }

    public function updates()
    {
        return $this->hasMany('KetoBootstrap\Update');
    }*/

    public function challenges()
    {
        return $this->belongsToMany('KetoBootstrap\Challenge')->withPivot('complete', 'completed_on')->withTimestamps();
    }
}
