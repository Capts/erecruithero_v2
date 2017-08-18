<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;



    public function roles(){
        return $this
        ->belongsToMany('App\Role')->withTimestamps();
    }

    public function profile(){
        return $this
        ->hasOne('App\Profile');
    }

    public function address(){
        return $this
        ->hasOne(Address::class);
    }

    public function skill(){
        return $this
        ->hasMany('App\Skill');
    }

    public function schoolPrimary(){
        return $this
        ->hasMany('App\SchoolPrimary');
    }
    
    public function schoolSecondary(){
        return $this
        ->hasMany('App\SchoolSecondary');
    }

    public function schoolTertiary(){
        return $this
        ->hasMany('App\SchoolTertiary');
    }

    public function experience(){
        return $this
        ->hasMany('App\Experience');
    }

    public function jobs(){
        return $this
        ->belongsToMany('App\Job');
    }
 



    protected $fillable = [
        'firstname','lastname', 'email', 'password', 'slug', 'gender', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
